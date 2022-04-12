<?php
include("../IncludesRequiresMethods/kmap_db.php");

function Unique($tel){
  $query = "Select * from users where tel='$tel'";
  global $con;
  $result = mysqli_query($con,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
      if($rows>0){
        return false;
      }
      else return true;
}

function Unique2($username){
  $query = "Select * from users where username='$username'";
  global $con;
  $result = mysqli_query($con,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
      if($rows>0){
        return false;
      }
      else return true;
}

if (isset($_POST["tel"])) {
  $_SESSION['tel'] = $_POST['tel'];
  $_SESSION['password'] = $_POST['password'];
  $_SESSION['reset_pin'] = $_POST['reset_pin'];
  if (strlen($_POST['username'])<3) {
     header("location:kamp_user_registration_form.php?err=" .urlencode("<h4>Username must not be less than 3 characters long</h4>"));
    exit();
  }

	else if (!Unique2($_POST['username'])) {
	 header("location:kamp_user_registration_form.php?err=" .urlencode("<h4>Username already in use</h4>"));
	exit();
}

  else if($_POST['password'] != $_POST['confirm_password']){
    header("location:kamp_user_registration_form.php?err=" .urlencode("<h4>Passwords Do not Match</h4>"));
   exit();
  }

    else if (strlen($_POST['password'])<8) {
     header("location:kamp_user_registration_form.php?err=" .urlencode("<h4>Password must not be less than 8 characters long</h4>"));
    exit();
  }

    else if (strlen($_POST['confirm_password'])<8) {
     header("location:kamp_user_registration_form.php?err=" .urlencode("<h4>Password must  not be less than 8 characters long</h4>"));
    exit();
  }

  else if (strlen($_POST['tel'])<10) {
   header("location:kamp_user_registration_form.php?err=" .urlencode("<h4>Telephone Number must  not be less than 10 digits long</h4>"));
  exit();
}

    else if (strlen($_POST['reset_pin']) < 8) {
     header("location:kamp_user_registration_form.php?err=" .urlencode("<h4>Security answer must not be less than 8 characters long</h4>"));
    exit();
  }

    else if (!Unique($_POST['tel'])) {
     header("location:kamp_user_registration_form.php?err=" .urlencode("<h4>Phone number already in use</h4>"));
    exit();
  }

	else if($_POST['reset_pin'] == $_POST['password']){
    header("location:kamp_user_registration_form.php?err=" .urlencode("<h4> Security answer must not be same as password  </h4>"));
   exit();
  }

	else if($_POST['username'] == $_POST['password']){
		header("location:kamp_user_registration_form.php?err=" .urlencode("<h4> Username   must not be same as password  </h4>"));
	 exit();
	}

	else if($_POST['username'] == $_POST['reset_pin']){
		header("location:kamp_user_registration_form.php?err=" .urlencode("<h4> Username   must not be same as reset Answer  </h4>"));
	 exit();
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>KAMP | REGISTER </title>
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/pages.css"/>
  <style>
/*  body{
    line-height: 1.25em;
    font-family: Helvetica Neue, Helvetica, Arial;
    background:   #341c53 ;
    background: -webkit-linear-gradient(to top,  #a58dc5 , #341c53);
    background: -moz-linear-gradient(to top,  #a58dc5 , #341c53);
    background: -o-linear-gradient(to top,  #a58dc5 , #341c53);
    background: linear-gradient(to top,  #a58dc5 , #341c53);
    background-size: cover;
    background-attachment: fixed;
  }*/
  </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
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
          <li ><a href="../index.php">Home</a></li>
          <li><a href="../index.php#about">About</a></li>
          <li><a href="../index.php#contact">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="kamp_user_registration_form.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a  href="kamp_login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

<br></br>  <br></br>                       <br></br>

<?php
    //during form submission
    // insert values into the database.
    if (isset($_POST['username'])){
    $username = stripslashes($_POST['username']); //  backslashes ecaping
    $username = mysqli_real_escape_string($con,$username); //escaping special characters
    $tel = stripslashes($_POST['tel']);
    $tel = mysqli_real_escape_string($con,$tel);

    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($con,$password);

    $reset_pin = stripslashes($_POST['reset_pin']);
  $reset_pin = mysqli_real_escape_string($con,$reset_pin);

    $trn_date = date("Y-m-d H:i:s");

        $query = "INSERT into `users` (username,tel, password, trn_date,reset_pin)
        VALUES ('$username','$tel', '".md5($password)."', '$trn_date','".md5($reset_pin)."')";
        $result = mysqli_query($con,$query);
        if($result){
          header("location:kamp_login.php?err=" .urlencode("<h4>Registered Successfully <br> Please Login</h4>"));

         exit();
        }
      }

?>

<div class="container">
  <?php if(isset($_GET['err'])) {	?>
          <div class="alert alert-danger">	<?php echo $_GET['err']; ?></div>
  <?php } ?>
</div>

  <div class="modal-dialog">
  		<div class="modal-content">
  			<div class="modal-heading">
  				<h2 class="text-center">Signup</h2>
  			</div>

  			<hr />
  			<div class="modal-body">
  				<form class="login-form" action="kamp_user_registration_form.php" method="post">
  					<div class="form-group">
  						<div class="input-group">
  							<span class="input-group-addon">
  							<span class="glyphicon glyphicon-user"></span>
  							</span>
  							<input type="text" class="form-control" placeholder="User Name" name="username"
                value="<?php echo @$_SESSION ["username"]; ?>" pattern="[a-zA]{1,}"
                title="Username must be in letters only"
                required="" />
  						</div>
  					</div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-phone"></span>
                </span>
                <input type="number" class="form-control" placeholder="Telephone " name="tel"
                    value="<?php echo @$_SESSION ["tel"]; ?>" pattern="[0-9]*"
                      title="Field must contain telephone only"
                    required=""/>
              </div>
            </div>
  					<div class="form-group">
  						<div class="input-group">
  							<span class="input-group-addon">
  							<span class="glyphicon glyphicon-lock"></span>
  							</span>
  							<input type="password" class="form-control" placeholder="Password" name="password"
                value="<?php echo @$_SESSION ["password"]; ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{3,}"
                  title="Password must contain atleast one number and one uppercase and lower case letter, and atleast
                  8 or more characters"
                required=""/>
  						</div>
  					</div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-lock"></span>
                </span>
                <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" required=""/>
              </div>
            </div>
<p style="color:#000;"> * WHAT IS YOUR FAVOURITE CAR AND YEAR MODEL </p>
            <div class="form-group">
              <div class="input-group">

                <span class="input-group-addon">
                <span class="glyphicon glyphicon-lock"></span>
                </span>
                <input type="text" class="form-control" placeholder="Security Answer " name="reset_pin"
                value="<?php echo @$_SESSION ["reset_pin"]; ?>"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{3,}"
                  title="Security answer must contain atleast one number and one uppercase and lower case letter, and atleast 8 or more characters"
                required=""/>
              </div>
            </div>



  					<div class="form-group text-center">
  						<button type="submit" class="btn btn-success btn-lg">Signup</button>
  						<a href="kamp_login.php" class="btn btn-link"> Already have an account?</a>
  					</div>

  				</form>
  			</div>
  		</div>
  	</div>

    <footer class="container-fluid text-center">
      <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a>
      <p>&COPY copyright 2019 <a href="../INDEX.PHP"> KAMP </a></p>
    </footer>
</body>
</html>
