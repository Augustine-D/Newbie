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
<div class="row">
<div class="col-sm-12">
  <?php

     global $con;

   if (isset($_GET['edit_pro'])){

     $get_id= $_GET['edit_pro'];

     $get_pro = "select * from `products` where product_id='$get_id'";

    $run_pro = mysqli_query($con, $get_pro);

 $row_pro=mysqli_fetch_array($run_pro);
      # code...
      $pro_id = $row_pro['product_id'];
      $pro_cat = $row_pro['product_cat'];
      $pro_title = $row_pro['product_title'];
      $pro_price = $row_pro['product_price'];
      $shops_one = $row_pro['shops_one'];
     $pro_image = $row_pro['product_image'];

   }

       if (isset($_REQUEST['product_title'])){

         $update_id = $pro_id;

   		$product_title = stripslashes($_REQUEST['product_title']);
   		$product_title = mysqli_real_escape_string($con,$product_title);

       $product_price = stripslashes($_REQUEST['product_price']);
       $product_price = mysqli_real_escape_string($con,$product_price);

       $product_cat = stripslashes($_REQUEST['product_cat']);
       $product_cat = mysqli_real_escape_string($con,$product_cat);

       $shops_one = stripslashes($_REQUEST['shops_one']);
       $shops_one = mysqli_real_escape_string($con,$shops_one);


 $product_image=$_FILES['product_image']['name'];
 $product_image_tmp = $_FILES['product_image']['tmp_name'];

  move_uploaded_file ($product_image_tmp,"products/$product_image");

   $update_product = "UPDATE `products` SET product_title='$product_title',
     product_cat='$product_cat', product_price='$product_price',shops_one='$shops_one',
     product_image='$product_image' WHERE product_id='$update_id'";
  $result = mysqli_multi_query($con,$update_product);
           if($result){

                 header("location: admin_all_products.php?err=" .urlencode("<br></br><h4> Product edited successfully  </h4>"));

           }
       }else{
       }
   ?>


 <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-heading">
         <h2 class="text-center">Add Spare Part</h2>
       </div>
       <hr />
       <div class="modal-body">
         <form   action="" method="post" enctype="multipart/form-data" >

               <input type="text" class="form-control" name="product_title" placeholder="Product Name" value="<?php echo $pro_title?>"/>
<br></br>
               <input type="text" class="form-control" name="product_price" placeholder=" Product Price In Ghana Cedis" value="<?php echo $pro_price?>"/>
<br></br>
                  <input type="text" class="form-control" name="product_cat"
                      placeholder=" Product Cat" value="<?php echo $pro_cat?>"/>
<br></br>

                <input type="text" class="form-control" name="shops_one" placeholder=" Shops Available" value="<?php echo $shops_one?>"/>

<br></br>

           <input type="file" name="product_image"><img src="../products/<?php echo $pro_image?>" width="100px" height="100px"/>

<br></br>

             <button type="submit" class="btn btn-success btn-lg">Enter</button>

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
