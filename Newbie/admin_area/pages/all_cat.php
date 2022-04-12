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
          <li class=""><a href="admin_panel.php">Home</a></li>
          <li><a href="admin_all_products.php">All Products</a></li>
          <li ><a  href="admin_panel.php">Admin Panel</a></li>
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

<br></br></br>
<div class="container">
  <?php
  global $con;

       $get_pro = "select * from `categories`";

      $run_pro = mysqli_query($con, $get_pro);

$i=0;
      while ($row_pro=mysqli_fetch_array($run_pro)) {
        # code...
        $cat_title = $row_pro['cat_title'];
        $cat_id = $row_pro['cat_id'];

        $i++;
  ?>

  <div class="cats">
<div class="abt"> <h3> <?php echo "$i. $cat_title" ; ?></h3> </div>
    </a>
    <div class="abt1"> <a href="../IncludesRequiresMethods/delete_cat.php?delete_cat=<?php echo $cat_id?>">
    <button  class="btn_del">Delete </button> </a></div>

  </div>
  <?php } ?>
</div>
<br></br><br></br>


<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <?php
      global $con;
      if(isset($_POST['product_cat'])){

              $product_cat = stripslashes($_POST['product_cat']);
              $product_cat = mysqli_real_escape_string($con,$product_cat);


                  $query = "INSERT into `categories` (cat_title) VALUES ('$product_cat')";
                  $result = mysqli_query($con,$query);
                  if($result){
                          			header("Location: all_cat.php");
                  }
                }
              else{
              }

      ?>

    <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-heading">
       <h2 class="text-center">New Category</h2>
     </div>
     <hr />
     <div class="modal-body">
       <form action="" method="POST" enctype="multipart/form-data" >

         <div class="form-group">
           <div class="input-group">
             <span class="input-group-addon">

             </span>
             <input type="text" class="form-control" name="product_cat" placeholder="New Category Name" required="" />
           </div>
         </div>

         <div class="form-group text-center">
           <button type="submit" class="btn btn-success btn-lg">Insert Cat</button>
         </div>

       </form>
    </div>
  </div>
</div>
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
