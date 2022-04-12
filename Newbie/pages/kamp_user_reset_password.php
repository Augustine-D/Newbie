<?php
    	session_start();
require("../IncludesRequiresMethods/kmap_db.php");
?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KAMP | FORGOT PASSWORD</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <style>
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: grey;
}



    body{
  	line-height: 1.25em;
  	font-family: Helvetica Neue, Helvetica, Arial;
  }

  </style>
</head>
<body>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../index.php">K A M P</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="kamp_user_reset_password.php">Reload</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="kamp_user_registration_form.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a  href="kamp_login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <br></br>  <br></br>

	   <?php
	      if (isset($_POST['username'])){

	  		$username = stripslashes($_REQUEST['username']); // removes backslashes
	  		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
	  		$reset_pin = stripslashes($_REQUEST['reset_pin']);
	  		$reset_pin = mysqli_real_escape_string($con,$reset_pin);

	          $query = "SELECT * FROM `users` WHERE username='$username' and reset_pin='".md5($reset_pin)."'";
	  		$result = mysqli_query($con,$query) or die(mysql_error());
	  		$rows = mysqli_num_rows($result);
	          if($rows==1){
              $_SESSION['username'] = $username;
      	session_start();
	  			header("Location:kamp_products.php");
	              }
	              else{
	  					echo "<div class='container'>
                        <div class='alert alert-danger'>Invalid username or password please try again </div>
              </div>";

	  				}
	      }
	  ?>

  <div class="modal-dialog">
  		<div class="modal-content">
  			<div class="modal-heading">
  				<h2 class="text-center">ALTERNATE LOGIN</h2>
  			</div>
  			<hr />
  			<div class="modal-body">
  				<form class="login-form" action="" method="post" enctype="multipart/form-data">
  					<div class="form-group">
  						<div class="input-group">
  							<span class="input-group-addon">
  							<span class="glyphicon glyphicon-user"></span>
  							</span>
  							<input type="text" class="form-control" placeholder="User Name" name="username" required=""/>
  						</div>
  					</div>
  					<div class="form-group">
  						<div class="input-group">
  							<span class="input-group-addon">
  							<span class="glyphicon glyphicon-lock"></span>
  							</span>
  							<input type="password" class="form-control" name="reset_pin" placeholder="Security Answer" required=""/>
  						</div>
  					</div>

  					<div class="form-group text-center">
  						<button type="submit" class="btn btn-success btn-lg">Reset</button>
  					</div>

  				</form>
  			</div>
  		</div>
  	</div>


<br></br>


<br></br><br></br>
 <footer class="container-fluid text-center">
   <a href="#myPage" title="To Top">
     <span class="glyphicon glyphicon-chevron-up"></span>
   </a></br>
   <p> <span class="kamp"> &copy copyright 2019 <i class="kamp"> Kampgh.com</i> all rights reserved. </p>
 </footer>
</body>
</html>
