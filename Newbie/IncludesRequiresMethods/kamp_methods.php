<style>
.panel-footer{
  text-transform: uppercase;
}
</style>
<?php
require('kmap_db.php');

function f1(){
global $con;

 $get_pro = "select * from `products` ORDER BY RAND() LIMIT 0,15";

$run_pro = mysqli_query($con, $get_pro);

while ($row_pro=mysqli_fetch_array($run_pro)) {
  # code...
  $pro_id = $row_pro['product_id'];
  $pro_cat = $row_pro['product_cat'];
  $pro_title = $row_pro['product_title'];
  $pro_price = $row_pro['product_price'];
  $pro_image = $row_pro['product_image'];

  echo "
    <div class='col-sm-4'>
      <div class='panel panel-primary'>
        <div class='panel-heading'><a  style='text-decoration:none;
        color: #f2f2f2 ;'href='kamp_product_details.php?pro_id=$pro_id'>
         $pro_title </a></div>
  <img src='admin_area/products/$pro_image'style=' width:100%; height:200px; margin:auto;'/>
  <div class='panel-footer'> <i class='price'> &#8373 Login</div>
      </div>
    </div>

";

}

}



function f2(){
global $con;

 $get_pro = "select * from `products` ORDER BY RAND() LIMIT 16,30";

$run_pro = mysqli_query($con, $get_pro);

while ($row_pro=mysqli_fetch_array($run_pro)) {
  # code...
  $pro_id = $row_pro['product_id'];
  $pro_cat = $row_pro['product_cat'];
  $pro_title = $row_pro['product_title'];
  $pro_price = $row_pro['product_price'];
  $pro_image = $row_pro['product_image'];

  echo "
    <div class='col-sm-4'>
      <div class='panel panel-primary'>
        <div class='panel-heading'><a  style='text-decoration:none;
        color: #f2f2f2 ;'href='kamp_product_details.php?pro_id=$pro_id'>
         $pro_title </a></div>
  <img src='admin_area/products/$pro_image'style=' width:100%; height:200px; margin:auto;'/>
  <div class='panel-footer'> <i class='price'> &#8373 Login</div>
      </div>
    </div>

";

}

}


function f3(){
global $con;

 $get_pro = "select * from `products` ORDER BY RAND() LIMIT 31,45";

$run_pro = mysqli_query($con, $get_pro);

while ($row_pro=mysqli_fetch_array($run_pro)) {
  # code...
  $pro_id = $row_pro['product_id'];
  $pro_cat = $row_pro['product_cat'];
  $pro_title = $row_pro['product_title'];
  $pro_price = $row_pro['product_price'];
  $pro_image = $row_pro['product_image'];

  echo "
    <div class='col-sm-4'>
      <div class='panel panel-primary'>
        <div class='panel-heading'><a  style='text-decoration:none;
        color: #f2f2f2 ;'href='kamp_product_details.php?pro_id=$pro_id'>
         $pro_title </a></div>
  <img src='admin_area/products/$pro_image'style=' width:100%; height:200px; margin:auto;'/>
  <div class='panel-footer'> <i class='price'> &#8373 Login</div>
      </div>
    </div>

";

}

}

function f4(){
global $con;

 $get_pro = "select * from `products` ORDER BY RAND() LIMIT 46,60";

$run_pro = mysqli_query($con, $get_pro);

while ($row_pro=mysqli_fetch_array($run_pro)) {
  # code...
  $pro_id = $row_pro['product_id'];
  $pro_cat = $row_pro['product_cat'];
  $pro_title = $row_pro['product_title'];
  $pro_price = $row_pro['product_price'];
  $pro_image = $row_pro['product_image'];

  echo "
    <div class='col-sm-4'>
      <div class='panel panel-primary'>
        <div class='panel-heading'><a  style='text-decoration:none;
        color: #f2f2f2 ;'href='kamp_product_details.php?pro_id=$pro_id'>
         $pro_title </a></div>
  <img src='admin_area/products/$pro_image'style=' width:100%; height:200px; margin:auto;'/>
  <div class='panel-footer'> <i class='price'> &#8373 Login</div>
      </div>
    </div>

";

}

}

function f5(){
global $con;

 $get_pro = "select * from `products` ORDER BY RAND() LIMIT 61,75";

$run_pro = mysqli_query($con, $get_pro);

while ($row_pro=mysqli_fetch_array($run_pro)) {
  # code...
  $pro_id = $row_pro['product_id'];
  $pro_cat = $row_pro['product_cat'];
  $pro_title = $row_pro['product_title'];
  $pro_price = $row_pro['product_price'];
  $pro_image = $row_pro['product_image'];

  echo "
    <div class='col-sm-4'>
      <div class='panel panel-primary'>
        <div class='panel-heading'><a  style='text-decoration:none;
        color: #f2f2f2 ;'href='kamp_product_details.php?pro_id=$pro_id'>
         $pro_title </a></div>
  <img src='admin_area/products/$pro_image'style=' width:100%; height:200px; margin:auto;'/>
  <div class='panel-footer'> <i class='price'> &#8373 Login</div>
      </div>
    </div>

";

}

}



function f6(){
global $con;

 $get_pro = "select * from `products` ORDER BY RAND() LIMIT 76,90";

$run_pro = mysqli_query($con, $get_pro);

while ($row_pro=mysqli_fetch_array($run_pro)) {
  # code...
  $pro_id = $row_pro['product_id'];
  $pro_cat = $row_pro['product_cat'];
  $pro_title = $row_pro['product_title'];
  $pro_price = $row_pro['product_price'];
  $pro_image = $row_pro['product_image'];

  echo "
    <div class='col-sm-4'>
      <div class='panel panel-primary'>
        <div class='panel-heading'><a  style='text-decoration:none;
        color: #f2f2f2 ;'href='kamp_product_details.php?pro_id=$pro_id'>
         $pro_title </a></div>
  <img src='admin_area/products/$pro_image'style=' width:100%; height:200px; margin:auto;'/>
  <div class='panel-footer'> <i class='price'> &#8373 Login</div>
      </div>
    </div>

";

}

}


function index1(){
global $con;

 $get_pro = "select * from `products` ORDER BY RAND() LIMIT 0,15";

$run_pro = mysqli_query($con, $get_pro);

while ($row_pro=mysqli_fetch_array($run_pro)) {
  # code...
  $pro_id = $row_pro['product_id'];
  $pro_cat = $row_pro['product_cat'];
  $pro_title = $row_pro['product_title'];
  $pro_price = $row_pro['product_price'];
  $pro_image = $row_pro['product_image'];

  echo "
    <div class='col-sm-4'>
      <div class='panel panel-primary'>
        <div class='panel-heading' style='height:50px;' ><a  style='text-decoration:none;
        color: #f2f2f2 ;height:200px; padding:3px;' href='kamp_product_details.php?pro_id=$pro_id'>
         $pro_title </a></div>
  <img src='../admin_area/products/$pro_image'style=' width:100%; height:200px; margin:auto;'/>
  <div class='panel-footer'> <i class='price'> &#8373 $pro_price >> $pro_cat </div>
      </div>
    </div>

";

}



}



function index2(){
global $con;

 $get_pro = "select * from `products` ORDER BY RAND() LIMIT 16,30";

$run_pro = mysqli_query($con, $get_pro);

while ($row_pro=mysqli_fetch_array($run_pro)) {
  # code...
  $pro_id = $row_pro['product_id'];
  $pro_cat = $row_pro['product_cat'];
  $pro_title = $row_pro['product_title'];
  $pro_price = $row_pro['product_price'];
  $pro_image = $row_pro['product_image'];

  echo "
  <div class='col-sm-4'>
    <div class='panel panel-primary'>
      <div class='panel-heading' style='height:50px;' ><a  style='text-decoration:none;
      color: #f2f2f2 ;height:200px; padding:3px;' href='kamp_product_details.php?pro_id=$pro_id'>
       $pro_title </a></div>
<img src='../admin_area/products/$pro_image'style=' width:100%; height:200px; margin:auto;'/>
<div class='panel-footer'> <i class='price'> &#8373 $pro_price >> $pro_cat </div>
    </div>
  </div>

";

}

}



function index3(){
global $con;

 $get_pro = "select * from `products` ORDER BY RAND() LIMIT 31,45";

$run_pro = mysqli_query($con, $get_pro);

while ($row_pro=mysqli_fetch_array($run_pro)) {
  # code...
  $pro_id = $row_pro['product_id'];
  $pro_cat = $row_pro['product_cat'];
  $pro_title = $row_pro['product_title'];
  $pro_price = $row_pro['product_price'];
  $pro_image = $row_pro['product_image'];

  echo "
  <div class='col-sm-4'>
    <div class='panel panel-primary'>
      <div class='panel-heading' style='height:50px;' ><a  style='text-decoration:none;
      color: #f2f2f2 ;height:200px; padding:3px;' href='kamp_product_details.php?pro_id=$pro_id'>
       $pro_title </a></div>
<img src='../admin_area/products/$pro_image'style=' width:100%; height:200px; margin:auto;'/>
<div class='panel-footer'> <i class='price'> &#8373 $pro_price >> $pro_cat </div>
    </div>
  </div>

";

}

}


function index4(){
global $con;

 $get_pro = "select * from `products` ORDER BY RAND() LIMIT 46,60";

$run_pro = mysqli_query($con, $get_pro);

while ($row_pro=mysqli_fetch_array($run_pro)) {
  # code...
  $pro_id = $row_pro['product_id'];
  $pro_cat = $row_pro['product_cat'];
  $pro_title = $row_pro['product_title'];
  $pro_price = $row_pro['product_price'];
  $pro_image = $row_pro['product_image'];

  echo "
  <div class='col-sm-4'>
    <div class='panel panel-primary'>
      <div class='panel-heading' style='height:50px;' ><a  style='text-decoration:none;
      color: #f2f2f2 ;height:200px; padding:3px;' href='kamp_product_details.php?pro_id=$pro_id'>
       $pro_title </a></div>
<img src='../admin_area/products/$pro_image'style=' width:100%; height:200px; margin:auto;'/>
<div class='panel-footer'> <i class='price'> &#8373 $pro_price >> $pro_cat </div>
    </div>
  </div>

";

}

}


function index5(){
global $con;

 $get_pro = "select * from `products` ORDER BY RAND() LIMIT 61,76";

$run_pro = mysqli_query($con, $get_pro);

while ($row_pro=mysqli_fetch_array($run_pro)) {
  # code...
  $pro_id = $row_pro['product_id'];
  $pro_cat = $row_pro['product_cat'];
  $pro_title = $row_pro['product_title'];
  $pro_price = $row_pro['product_price'];
  $pro_image = $row_pro['product_image'];

  echo "
  <div class='col-sm-4'>
    <div class='panel panel-primary'>
      <div class='panel-heading' style='height:50px;' ><a  style='text-decoration:none;
      color: #f2f2f2 ;height:200px; padding:3px;' href='kamp_product_details.php?pro_id=$pro_id'>
       $pro_title </a></div>
<img src='../admin_area/products/$pro_image'style=' width:100%; height:200px; margin:auto;'/>
<div class='panel-footer'> <i class='price'> &#8373 $pro_price >> $pro_cat </div>
    </div>
  </div>

";

}

}


function index6(){
global $con;

 $get_pro = "select * from `products` ORDER BY RAND() LIMIT 77,92";

$run_pro = mysqli_query($con, $get_pro);

while ($row_pro=mysqli_fetch_array($run_pro)) {
  # code...
  $pro_id = $row_pro['product_id'];
  $pro_cat = $row_pro['product_cat'];
  $pro_title = $row_pro['product_title'];
  $pro_price = $row_pro['product_price'];
  $pro_image = $row_pro['product_image'];

  echo "
  <div class='col-sm-4'>
    <div class='panel panel-primary'>
      <div class='panel-heading' style='height:50px;' ><a  style='text-decoration:none;
      color: #f2f2f2 ;height:200px; padding:3px;' href='kamp_product_details.php?pro_id=$pro_id'>
       $pro_title </a></div>
<img src='../admin_area/products/$pro_image'style=' width:100%; height:200px; margin:auto;'/>
<div class='panel-footer'> <i class='price'> &#8373 $pro_price >> $pro_cat </div>
    </div>
  </div>

";

}

}
