<?php
  	session_start();
require("../IncludesRequiresMethods/db.php");
?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title> ADMIN FORGOT PASSWORD </title>
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
          <li class="active"><a href="#">Reload</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a style="background:#3498db; color:#f2f2f2;"  href="../index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <br></br>  <br></br>


  <div class="container">
    <?php if(isset($_GET['err'])) {	?>
            <div class="alert alert-danger">	<?php echo $_GET['err']; ?></div>
    <?php } ?>
  </div>

	   <?php
	      if (isset($_POST['username'])){

	  		$username = stripslashes($_REQUEST['username']); // removes backslashes
	  		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
	  		$answer = stripslashes($_REQUEST['answer']);
	  		$answer = mysqli_real_escape_string($con,$answer);

	          $query = "SELECT * FROM `admins` WHERE username='$username' and answer='".md5($answer)."'";
	  		$result = mysqli_query($con,$query) or die(mysql_error());
	  		$rows = mysqli_num_rows($result);
	          if($rows==1){
              $_SESSION['username'] = $username;
      	session_start();
    header("location:admin_panel.php?err=" .urlencode("<h4>    Login success </h4>"));
	              }
	              else{
                  header("location:kamp_user_reset_password.php?err=" .urlencode("<h4>    Invalid Username or     Security Answer  </h4>"));
                 exit();
	  				}
	      }
	  ?>

  <div class="modal-dialog">
  		<div class="modal-content">
  			<div class="modal-heading">
  				<h2 class="text-center">Alternate Login</h2>
  			</div>
  			<hr />
  			<div class="modal-body">
  				<form class="login-form" action="kamp_user_reset_password.php" method="post" enctype="multipart/form-data">
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
  							<input type="password" class="form-control" name="answer" placeholder="Security Answer" required=""/>
  						</div>
  					</div>

  					<div class="form-group text-center">
  						<button type="submit" class="btn btn-success btn-lg">LOGIN</button>
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
   <p> <span class="kamp"> &copy copyright 2018 <i class="kamp"> Kampgh.com</i> all rights reserved. </p>
 </footer>
</body>
</html>
