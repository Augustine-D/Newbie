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
        <a class="navbar-brand" href="admin_panel.php">K A M P</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="admin_panel.php">Home</a></li>
          <li><a href="admin_all_products.php">All Products</a></li>
          <li class="active"><a  href="admin_panel.php">Admin Panel</a></li>
          <li><a href="admin_register.php">Add Admin</a></li>
          <li><a href="insert_products.php">Add Products</a></li>
          <li ><a href="all_customers.php">Customers</a></li>


        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="kamp_products_log_out.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

<br></br></br><br></br></br>

<div class="container">
  <?php if(isset($_GET['err'])) {	?>
          <div class="alert alert-success">	<?php echo $_GET['err']; ?></div>
  <?php } ?>
</div>

<div class="container">
	<div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form action="kamp_search_results_454.php"class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">

                                    </div>

                                    <div class="col">
                                            <input class="form-control form-control-lg form-control-borderless"
                                             type="search" name="user_query" placeholder="Search Database">
                                    </div>
                                </div>
                            </form>
                        </div></div></div>


                        <br></br>
<div class="container">

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
