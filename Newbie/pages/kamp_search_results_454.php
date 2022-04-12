<?php
require("../IncludesRequiresMethods/kmap_db.php");
include('../IncludesRequiresMethods/kamp_methods.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> KAMP | SEARCH RESULT</title>

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
          <a class="navbar-brand active" href="kamp_products.php">K A M P</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class=""><a href="kamp_products.php">Home</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class=""><a href="account.php"><span class="glyphicon glyphicon-cog"></span>Account </a></li>
            <li><a href="kamp_products_log_out.php"><span class="glyphicon glyphicon-thumbs-down"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
  <br></br></br></br>

  <div class="container">
  	<div class="row justify-content-center">
                          <div class="col-12 col-md-10 col-lg-8">
                              <form action="kamp_search_results_454.php"class="card card-sm">
                                  <div class="card-body row no-gutters align-items-center">
                                      <div class="col-auto">
                                      </div>
                                      <div class="col">
                                              <input class="form-control form-control-lg form-control-borderless" type="search" name="user_query" placeholder="Search keywords">
                                      </div>
                                  </div>
                              </form>
                          </div></div></div>

<br></br>

<div class="container">
  <div class="row">
    <div class="col-sm-12">

      <?php
      require('../IncludesRequiresMethods/kmap_db.php');
          global $con;
          if (isset($_GET['user_query'])) {

            $search_query = $_GET['user_query'];

           $get_pro = "SELECT * from products
           where product_title like '%$search_query%'";

           $result = mysqli_query($con,$get_pro) or die(mysql_error());
           $rows = mysqli_num_rows($result);
                if($rows>=1){
echo "<div class='container'>
          <div class='alert alert-success'> Great your $search_query was found   </div>
</div>";
                            while ($rows=mysqli_fetch_array($result)) {
                              $pro_id = $rows['product_id'];
                              $pro_cat = $rows['product_cat'];
                              $pro_title = $rows['product_title'];
                              $pro_price = $rows['product_price'];
                              $pro_image = $rows['product_image'];

                              echo "
                              <div class='col-sm-4'>
                                <div class='panel panel-primary'>
                                  <div class='panel-heading'><a  style='text-decoration:none;
                                  color: #f2f2f2 ;'href='kamp_product_details.php?pro_id=$pro_id'>
                                   $pro_title </a></div>
                            <img src='../admin_area/products/$pro_image'style=' width:100%; height:200px; margin:auto;'/>
                            <div class='panel-footer'> <i class='price'> &#8373 $pro_price >> $pro_cat </div>
                                </div>
                              </div>
                        ";
                      }
                    }
                    else{
                      echo "<div class='container'>
                                <div class='alert alert-danger'> Opps!!! Sorry no spare part found for your search </div>
                      </div>";
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
<h2> Others also viewed these spare part </h2>
<?php index1() ?>
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
<hr>
  <p> <span class="kamp"> &copy copyright 2018 <i class="kamp"> Kampgh.com</i> all rights reserved. </p>
</footer>
</body>
</html>
