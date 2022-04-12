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
  <style>
.col-sm-3 img{
  height: 200px;
  border-radius: 50%;
}
.products img{
  width: 220px;
  height: 100px;
}

@media only screen and (max-width: 600px) {
  .products {
			margin: auto;
			width: 100%;
			margin-bottom: 10px;
			color: grey;
			text-align: center;
	}}
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
            <li class="active"><a href="admin_all_products.php">All Products</a></li>
            <li><a href="admin_panel.php">Admin Panel</a></li>
            <li><a href="admin_register.php">Add Admin</a></li>
            <li><a href="insert_products.php">Add Products</a></li>
            <li><a href="all_cat.php">Add Category</a></li>
                <li ><a href="all_customers.php">Customers</a></li>
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
          <div class="alert alert-success">	<?php echo $_GET['err']; ?></div>
  <?php } ?>
</div>
  <br></br>
<div class="container">
<div class="row">
<div class="col-sm-12">
<h2> PRODUCTS IN DATABASE</h2>
<?php

    global $con;
         $get_pro = "select * from `products`";

        $run_pro = mysqli_query($con, $get_pro);

    $i=0;
        while ($row_pro=mysqli_fetch_array($run_pro)) {
          # code...

          $pro_id = $row_pro['product_id'];
          $pro_title = $row_pro['product_title'];
          $pro_price = $row_pro['product_price'];
          $pro_cat = $row_pro['product_cat'];
          $pro_image = $row_pro['product_image'];
          $pro_shops = $row_pro['shops_one'];
          $i++;



    ?>
    <div class="col-sm-4"  border:0px solid #f2f2f2;">
      <div class="panel panel-primary">
        <div class="panel-heading" style="height:50px; text-transform: capitalize;"> <?php echo "<b>#$i. </b> "; ?> <?php echo "$pro_title" ; ?> </div>

        <img src="../products/<?php echo $pro_image;?>" style=" width:100%; height:200px; margin:auto;"/>

        <a  style="text-decoration:none; height:200px; padding:3px;" href="kamp_product_details.php?pro_id=<?php echo $pro_id?>">
        <div class="panel-footer"> <i class="price"> <?php echo "GH&#8373 $pro_price" ; ?></div></a>
          <div class="panel-footer"> <i class="price"> <?php echo "CAT : $pro_cat" ; ?></div>

          <div class="panel-footer"> <i class="price">
            <a href="edit_pro.php?edit_pro=<?php echo $pro_id?>"> <button class="btn btn-info" style="width:100%;
             padding:3px;">Edit </button></a> </div>


          <div class="panel-footer"> <i class="price"> <a href="delete_pro.php?delete_pro=<?php echo $pro_id?>">
            <button  class="btn btn-primary" style="width:100%;
             padding:3px;">Delete </button></a></div>

      </div></div>

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
