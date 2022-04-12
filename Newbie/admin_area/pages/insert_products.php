<?php
include("../IncludesRequiresMethods/secure.php");
require("../IncludesRequiresMethods/db.php");
include("../IncludesRequiresMethods/methods.php");


if (isset($_POST["product_title"])) {
  $_SESSION['product_title'] = $_POST['product_title'];
  $_SESSION['product_price'] = $_POST['product_price'];
  $_SESSION['product_cat'] = $_POST['product_cat'];
  $_SESSION['shops_one'] = $_POST['shops_one'];
  $_SESSION['product_image'] = $_POST['product_image'];


  if (strlen($_POST['product_title'])<3) {
     header("location:insert_products.php?err=" .urlencode("<h4>Product Name must not be less than 3 characters long</h4>"));
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
          <li><a  href="admin_panel.php">Admin Panel</a></li>
          <li><a href="admin_register.php">Add Admin</a></li>
          <li  class="active"><a href="insert_products.php">Add Products</a></li>
          <li ><a href="all_customers.php">Customers</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="kamp_products_log_out.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

<div class="container">
  <?php if(isset($_GET['err'])) {	?>
          <div class="alert alert-success">	<?php echo $_GET['err']; ?></div>
  <?php } ?>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <?php
    global $con;
        if (isset($_REQUEST['product_title'])){
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

    move_uploaded_file ($product_image_tmp,"../products/$product_image");

    $trn_in_date = date("Y-m-d H:i:s");
            $query = "INSERT into `products` (product_cat,product_title,product_price,trn_in_date,shops_one,product_image)
            VALUES ('$product_cat','$product_title','$product_price','$trn_in_date','$shops_one','$product_image')";
            $result = mysqli_query($con,$query);
            if($result){

                header("location:insert_products.php?err=".urlencode("<h4>    Insertion success </h4>"));
            }
        }else{


    ?>

  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-heading">
          <h2 class="text-center">Add Spare Part</h2>
        </div>
        <hr />
        <div class="modal-body">
          <form   action="" method="post" enctype="multipart/form-data" >
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon">
                <i class="fa fa-plus"></i>
                </span>
                <input type="text" class="form-control" name="product_title" placeholder="Product Name"
                value="<?php echo @$_SESSION ["product_title"]; ?>"  required=""/>
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-plus"></i>
                </span>
                <input type="text" class="form-control" name="product_price" placeholder=" Product Price In Ghana Cedis"
                value="<?php echo @$_SESSION ["product_price"]; ?>"  required=""/>
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-plus"></i>
                </span>
                <input type="text" class="form-control" name="product_cat" placeholder=" Product Category"
                value="<?php echo @$_SESSION ["product_cat"]; ?>"  required=""/>
              </div>
            </div>


            <div class="form-group">
              <div class="input-group">
              <textarea name="shops_one" class="form-control" value="<?php echo @$_SESSION ["shops_one"]; ?>" > </textarea>
              </div>
            </div>


              <input type="file" name="product_image" value="<?php echo @$_SESSION ["product_image"]; ?>" />


            <div class="form-group text-center">
              <button type="submit" class="btn btn-success btn-lg">Enter</button>
            </div>

          </form>
        </div>
      </div>
    </div>

    </div>
  </div>
</div>
<?php } ?>
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
