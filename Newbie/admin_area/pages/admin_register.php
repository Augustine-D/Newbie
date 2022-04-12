<?php
include("../IncludesRequiresMethods/secure.php");
require("../IncludesRequiresMethods/db.php");
include("../IncludesRequiresMethods/methods.php");



function Unique($username){
  $query = "Select * from admins where username='$username'";
  global $con;
  $result = mysqli_query($con,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
      if($rows>0){
        return false;
      }
      else return true;
}


if (isset($_POST["sub"])) {

  if (strlen($_POST['username'])<3) {
     header("location:admin_register.php?err=" .urlencode("<h4>Username must not be less than 3 characters long</h4>"));
    exit();
  }

	else if (!Unique($_POST['username'])) {
	 header("location:admin_register.php?err=" .urlencode("<h4>Username already in use</h4>"));
	exit();
}


    else if (strlen($_POST['reset_pin']) < 8) {
     header("location:admin_register.php?err=" .urlencode("<h4>Password must  not be less than 8 characters long</h4>"));
    exit();
  }

  else if (strlen($_POST['answer']) < 6) {
   header("location:admin_register.php?err=" .urlencode("<h4>Security answer must also not be less than 8 characters long</h4>"));
  exit();
}

  else if($_POST['reset_pin']  == $_POST['answer']){
    header("location:admin_register.php?err=" .urlencode("<h4> Security answer must not be same as password  </h4>"));
   exit();
  }


  else if($_POST['username']  == $_POST['reset_pin']){
    header("location:admin_register.php?err=" .urlencode("<h4> Username   must not be same as reset password  </h4>"));
   exit();
  }

}

?>
<!DOCTYPE html>
<html>
<head>
  <title>KAMP | ABOSSEY OKAI</title>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/new.css"/>
  <style>
.col-sm-3 img{
  height: 200px;
  border-radius: 50%;
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
          <a class="navbar-brand" href="admin_all_products.php">K A M P</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class=""><a href="admin_all_products.php">Home</a></li>
            <li ><a href="admin_all_products.php">All Products</a></li>
            <li ><a href="admin_panel.php">Admin Panel</a></li>
            <li class="active"><a href="admin_register.php">Add Admin</a></li>
            <li><a href="insert_products.php">Add Products</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="kamp_products_log_out.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

  <br></br>

  <div class="container">
    <?php if(isset($_GET['err'])) {	?>
            <div class="alert alert-danger">	<?php echo $_GET['err']; ?></div>
    <?php } ?>
  </div>
</br>
<div class="container">
<div class="row">
<div class="col-sm-12">
  <?php
    if (isset($_REQUEST['username'])){
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con,$username);


    $reset_pin = stripslashes($_REQUEST['reset_pin']);
    $reset_pin = mysqli_real_escape_string($con,$reset_pin);

    $answer = stripslashes($_REQUEST['answer']);
    $answer = mysqli_real_escape_string($con,$answer);

      $query = "INSERT into `admins` (username,reset_pin,reset,answer)
      VALUES ('$username','".md5($reset_pin)."','*124*124%','".md5($answer)."')";
      $result = mysqli_query($con,$query);
      if($result){
                header("Location: ../index.php");
      }
  }
?>

<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-heading">
        <h2 class="text-center">Signup</h2>
      </div>
      <hr />
      <div class="modal-body">
        <form class="login-form" action="admin_register.php" method="post">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
              <span class="glyphicon glyphicon-user"></span>
              </span>
              <input type="text" class="form-control" placeholder="User Name" name="username" pattern="[a-zA]{1,}"
              title="Username must be in letters only" required="" />
            </div>
          </div>

          <div class="form-group">

            <div class="input-group">
              <span class="input-group-addon">
              <span class="glyphicon glyphicon-lock"></span>
              </span>
              <input type="password" class="form-control" placeholder="Password" name="reset_pin"
              pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{3,}"
               title="Password must contain atleast one number and one uppercase and lower case letter, and atleast
               8 or more characters"  required=""/>
            </div>
          </div>

  <p> Security Question | Favourite Car Make and Model?</p>
          <div class="input-group">
            <span class="input-group-addon">
            <span class="glyphicon glyphicon-lock"></span>
            </span>

            <input type="password" class="form-control" placeholder="Security Answer" name="answer"

            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{3,}"
              title="Security answer must contain atleast one number and one uppercase and lower case letter, and atleast 8 or more characters"
            required=""/>
          </div>
        </div>

          <div class="form-group text-center">
            <button type="submit" name="sub" class="btn btn-success btn-lg">Signup</button>

          </div>

        </form>
      </div>
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
 </br>
 <hr>
   <p> <span class="kamp"> &copy copyright 2018 <i class="kamp"> Kampgh.com</i> all rights reserved. </p>
 </footer>
</body>
</html>
