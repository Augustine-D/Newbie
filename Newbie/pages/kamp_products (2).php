<?php
session_start();
include("../IncludesRequiresMethods/kmap_db.php");
require('../IncludesRequiresMethods/kamp_methods.php');

if (isset($_POST["username"])) {
$_SESSION['username'] = $_POST['username'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
<link rel="icon" href="../images/favicon.ico" type="image/x-icon">


  <title> KAMP </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/main.css"/>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">KAMP</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">LOGIN</a></li>
        <li><a href="#pricing">SIGNUP</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>


<br></br><br></br>


	<div class="container">
	  <?php if(isset($_GET['err'])) {	?>
	          <div class="alert alert-success">	<?php echo $_GET['err']; ?></div>
	  <?php } ?>
	</div>

       <?php

          // form submitted the we insert values into the database.
          if (isset($_POST['username'])){

      		$username = stripslashes($_REQUEST['username']); // removing backslashes
      		$username = mysqli_real_escape_string($con,$username); //escaping the special characters in the form inputs
      		$password = stripslashes($_REQUEST['password']);
      		$password = mysqli_real_escape_string($con,$password);

      	//finding out if user is in the database or not
              $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
      		$result = mysqli_query($con,$query) or die(mysql_error());
      		$rows = mysqli_num_rows($result);
              if($rows==1){
      			$_SESSION['username'] = $username;

      			header("Location: kamp_products.php"); // Redirect user to the  products page
                  }
                  else{
                    echo "Invalid username or password please try again";
      				}
          }
      ?>



  <div class="modal-dialog">
  		<div class="modal-content">
  			<div class="modal-heading">
  				<h2 class="text-center">Login</h2>
  			</div>
  			<hr />
  			<div class="modal-body">
  				<form class="login-form" action="kamp_login.php" method="post" enctype="multipart/form-data">
  					<div class="form-group">
  						<div class="input-group">
  							<span class="input-group-addon">
  							<span class="glyphicon glyphicon-user"></span>
  							</span>
  							<input type="text" class="form-control" placeholder="User Name" name="username"
								value="<?php echo @$_SESSION ["username"]; ?>" required="" />
  						</div>
  					</div>
  					<div class="form-group">
  						<div class="input-group">
  							<span class="input-group-addon">
  							<span class="glyphicon glyphicon-lock"></span>
  							</span>
  							<input type="password" class="form-control" placeholder="Password" name="password" required=""/>

  						</div>
  					</div>

  					<div class="form-group text-center">
  						<button type="submit" class="btn btn-success btn-lg">Login</button>
  						<a href="kamp_user_reset_password.php" class="btn btn-link">forget Password</a>
  					</div>

  				</form>
  			</div>
  		</div>
  	</div>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
