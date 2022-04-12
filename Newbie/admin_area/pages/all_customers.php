<?php
include("../IncludesRequiresMethods/secure.php");
require("../IncludesRequiresMethods/db.php");
include("../IncludesRequiresMethods/methods.php");
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
          <a class="navbar-brand" href="admin_panel.php">K A M P</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class=""><a href="admin_panel.php">Home</a></li>
            <li><a href="admin_all_products.php">All Products</a></li>
            <li class=""><a  href="admin_panel.php">Admin Panel</a></li>
            <li><a href="admin_register.php">Add Admin</a></li>
            <li><a href="insert_products.php">Add Products</a></li>
            <li class="active"><a href="all_customers.php">Customers</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="kamp_products_log_out.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

  <br></br>
<div class="container">
<div class="row">
<div class="col-sm-12">
  <?php

global $con;
       $get_users = "select * from `users`";

      $run_users = mysqli_query($con, $get_users);

$i=0;
      while ($row_user=mysqli_fetch_array($run_users)) {
        # code...
        $user_name = $row_user['username'];
            $email = $row_user['email'];
              $tel = $row_user['tel'];
                $trn_date = $row_user['trn_date'];

        $i++;
  ?>
  <div class="products">
	<div class="abt0"><?php echo $i; ?></div><br>
	<div class="abt0" style="text-transform: capitalize;"> Username :<b> <?php echo $user_name; ?></b > </div><br>
		<div class="abt0"> Phone: <?php echo   $tel;  ?></div><br>
			<div class="abt0"> Turn in date <?php echo  $trn_date ?></div><br>

	</div>
  <?php } ?>
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
