<?php
	require("../IncludesRequiresMethods/kamp_secure.php");
include("../IncludesRequiresMethods/kmap_db.php");
require('../IncludesRequiresMethods/kamp_methods.php');


if (isset($_POST["username"])) {
  $_SESSION['username'] = $_POST['username'];
  $_SESSION['password'] = $_POST['password'];
  $_SESSION['confirm_password2'] = $_POST['confirm_password2'];

 	if (strlen($_POST['password'])<8) {
	 header("location:change_password.php?err=" .urlencode("<h4>Current Password must not be
	 less than 8 characters long</h4>"));
	exit();
}

else if (strlen($_POST['confirm_password'])<8) {
 header("location:change_password.php?err=" .urlencode("<h4>New Password must be more than 8 characters long</h4>"));
exit();
}

else if (strlen($_POST['confirm_password2'])<8) {
 header("location:change_password.php?err=" .urlencode("<h4>Confirm new Password must be
 more than 8 characters long</h4>"));
exit();
}

  else if($_POST['confirm_password'] != $_POST['confirm_password2']){
    header("location:change_password.php?err=" .urlencode("<h4>New Passwords do not match</h4>"));
   exit();
  }

	else if($_POST['password'] == $_POST['confirm_password']){
		header("location:change_password.php?err=" .urlencode("<h4> New Password must not be same as old Password </h4>"));
	 exit();
	}

	else if($_POST['confirm_password'] == $_POST['confirm_password2']){

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
					global $con;
 		     $user = $_SESSION['username'];
 		    //during form submission
 		    // insert values into the database.
 		    $username = stripslashes($_POST['username']); //  backslashes ecaping
 		    $username = mysqli_real_escape_string($con,$username); //escaping special characters

 		    $password = stripslashes($_POST['password']);
 		    $password = mysqli_real_escape_string($con,$password);

 		    $confirm_password = stripslashes($_POST['confirm_password']);
 		  $confirm_password = mysqli_real_escape_string($con,$confirm_password);

 			$confirm_password2 = stripslashes($_POST['confirm_password2']);
 		$confirm_password2 = mysqli_real_escape_string($con,$confirm_password2);

 		        $query = "UPDATE `users` SET password='".md5($confirm_password2)."'  WHERE username='$user' ";
 		        $result = mysqli_query($con,$query);
 		        if($result){
 		          header("location:account.php?err=" .urlencode("<h4>Password Changed Successfully <br></h4>"));

 		         exit();

 		      }	else{
						echo "<div class='container'>
											<div class='alert alert-danger'>Unable to change password please try again </div>
						</div>";
			}
						}

		}

	}
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KAMP | CHANGE PASSWORD</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: grey;
}

.modal-content{
  opacity: 0.8;
			background-color:  #055692 ;
		}
		.btn-link{
			color:white;
		}
    .btn-link:hover{
      color: black;
    }
		.modal-heading h2{
			color:#ffffff;
		}

    body{
  	line-height: 1.25em;
  	font-family: Helvetica Neue, Helvetica, Arial;

  }
li{
	list-style-type: none;
}
  </style>
</head>
<body>
	<li id="top"><li>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="change_password.php">K A M P</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class=""><a href="kamp_products.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="account.php"><span class="glyphicon glyphicon-cog"></span>Account Settings</a></li>
            <li><a href="kamp_products_log_out.php"><span class="glyphicon glyphicon-thumbs-down"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
   <br></br>  <br></br>
<br></br><br></br>

<div class="container">
  <?php if(isset($_GET['err'])) {	?>
          <div class="alert alert-danger">	<?php echo $_GET['err']; ?></div>
  <?php } ?>
</div>

  <div class="modal-dialog">
  		<div class="modal-content">
  			<div class="modal-heading">
  				<h2 class="text-center">CHANGE PASSWORD</h2>
  			</div>

  			<hr />
  			<div class="modal-body">
  				<form class="login-form" action="change_password.php" method="post">
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
  							<input type="password" class="form-control" placeholder="Current Password" name="password"
               required=""/>
  						</div>
  					</div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-lock"></span>
                </span>
                <input type="password" class="form-control" placeholder="New Password" name="confirm_password" required=""/>
              </div>
            </div>

						<div class="form-group">
              <div class="input-group">
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-lock"></span>
                </span>
                <input type="password" class="form-control" placeholder="Confirm New Password" name="confirm_password2" required=""/>
              </div>
            </div>

  					<div class="form-group text-center">
  						<button type="submit" class="btn btn-success btn-lg">Change Password</button>

  					</div>

  				</form>
  			</div>
  		</div>
  	</div>
<br></br>


                        <div class="container bg-grey">
                         <h2 class="text-center">CONTACT</h2>
                         <div class="row">
                           <div class="col-sm-5">
                             <p id="contact">Contact us and we'll get back to you within 24 hours.</p>
                             <p><span class="glyphicon glyphicon-map-marker"></span> Ghana, Accra</p>
                             <p><span class="glyphicon glyphicon-phone"></span> +233 55204 77942</p>
                             <p><span class="glyphicon glyphicon-envelope"></span> customer@kamp.com</p>
                           </div>
                           <div class="col-sm-7">
                             <div class="row">
                               <div class="col-sm-6 form-group">
                                 <input class="form-control" id="name" name="name" placeholder="Name" type="text"
                                 value="<?php echo @$_SESSION ["username"]; ?>" required >
                               </div>

                             </div>
                             <textarea class="form-control" id="comments" name="comments" placeholder="Message" rows="5"></textarea><br>
                             <div class="row">
                               <div class="col-sm-12 form-group">
                                 <button class="btn btn-default pull-right" type="submit">Send</button>
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>


<br></br><br></br>

    <footer class="container-fluid text-center">
      <a href="#top">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a>
    </br></br>
      <a href="#">
      <i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
      <a href="#">
      <i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
      <a href="#">
          <i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
      <p> <span class="kamp"> &copy copyright 2018 <i class="kamp"> Kampgh.com</i> all rights reserved. </p>
    </footer>
</body>
</html>
