<?php

require("IncludesRequiresMethods/kmap_db.php");
include('IncludesRequiresMethods/kamp_methods.php');
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>KAMP | DETAILS</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/pages.css"/>
  <style>
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
}
.image img{
  border: none;
}

.image img:hover{
  border: 1px solid #f2f2f2;
  transform: scale(1.1,1.1);
  transition: .6s transform;
}

.col-sm-3{
  border-right: none;
  color: grey;
}
.pro {
  margin-bottom: 40px;
  margin-top: 10px;
  border: 1px solid #f2f2f2;
  background: white;
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
          <a class="navbar-brand" href="index.php">K A M P</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="pages/kamp_user_registration_form.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="pages/kamp_login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

  <br></br></br></br></br>

  <div class="container">
  	<div class="row justify-content-center">
                          <div class="col-12 col-md-10 col-lg-8">
                              <form action="kamp_search_results_454.php"class="card card-sm">
                                  <div class="card-body row no-gutters align-items-center">
                                      <div class="col-auto">
                                      </div>
                                      <div class="col">
                                              <input class="form-control form-control-lg form-control-borderless " type="search" name="user_query" placeholder="Search keywords">
                                      </div>
                                  </div>
                              </form>
                          </div></div></div>

<br></br>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
    <?php
    require('IncludesRequiresMethods/kmap_db.php');
        global $con;
        if (isset($_GET['pro_id'])) {

          $product_id = $_GET['pro_id'];

         $get_pro = "SELECT * from products
         where product_id='$product_id'";

        $run_pro = mysqli_query($con, $get_pro);

        while ($row_pro=mysqli_fetch_array($run_pro)) {
          $pro_id = $row_pro['product_id'];
          $pro_cat = $row_pro['product_cat'];
          $pro_title = $row_pro['product_title'];
          $pro_price = $row_pro['product_price'];
                $pro_shops = $row_pro['shops_one'];
          $pro_image = $row_pro['product_image'];

          echo "




    <div class='container'>
    <div class='col-sm-12'>
    <div class='col-sm-6'>
      <div class='panel panel-primary'>
        <div class='panel-heading'><a  style='text-decoration:none;
        color: #f2f2f2 ;'href='kamp_product_details.php?pro_id=$pro_id'>
         $pro_title </a></div>
        <img src='admin_area/products/$pro_image'style=' width:100%; height:200px; margin:auto;'/>
        <div class='panel-footer'> <i class='price'> &#8373 LOGIN</div>
      </div>
    </div>

    <div class='col-sm-6'>
    <br></br><br></br>
        <div class='abt2'><p> Shops Available for you</p>  Login to view spare paart dealers</div></div>
    </div>
    </div>
    </div>

    ";

        }
    }

     ?>
    </div>
  </div>
</div>

<br></br><br></br>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
<h2> TAKE A LOOK</h2>
<?php f2() ?>
      </div>
    </div>
  </div>
  <div class="container">
  <div class="col-sm-12">
    <ul class="pagination">
     <li><a href="#">View More</a></li>
   </ul>
  </div>
  </div>
<br></br>

<br></br>

<footer class="container-fluid text-center">
  <a href="#top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a></br>
</br>
  <a href="#">
  <i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
  <a href="#">
  <i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
  <a href="#">
      <i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
<hr>
  <p> <span class="kamp"> &copy copyright 2018 <i class="kamp"> Kampgh.com</i> all rights reserved. </p>
</footer>
</body>
</htmlb
