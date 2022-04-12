
<style>
.col-sm-4{
  border: none;
}
</style>
<?php
require('db.php');
//get categories
function getCats(){
  global $con;
$get_cats = "select * from categories";
$run_cats = mysqli_query($con,$get_cats);
while($row_cats=mysqli_fetch_array($run_cats)){
  $cat_id=$row_cats['cat_id'];
  $cat_title= $row_cats['cat_title'];
  echo "<li> <a href=''> $cat_title </a></li>";
}

}



function f1(){
global $con;

 $get_pro = "select * from `products` ";

$run_pro = mysqli_query($con, $get_pro);
$i=0;
while ($row_pro=mysqli_fetch_array($run_pro)) {
  # code...
  $pro_id = $row_pro['product_id'];
  $pro_cat = $row_pro['product_cat'];
  $pro_title = $row_pro['product_title'];
  $pro_price = $row_pro['product_price'];
  $pro_image = $row_pro['product_image'];
$i++;
  echo "
    <div class='col-sm-4'  border:0px solid #f2f2f2;'>
      <div class='panel panel-primary'>
        <div class='panel-heading' style='height:50px;'><a  style='text-decoration:none;
        color: #f2f2f2 ;'href='kamp_product_details.php?pro_id=$pro_id'>
        $i. $pro_title </a></div>
  <img src='../products/$pro_image'style=' width:100%; height:200px; margin:auto;'/>
  <div class='panel-footer'> <i class='price'> &#8373   $pro_price</div>

  <a href='edit_pro.php?edit_pro=<?php echo $pro_id?>'> <button  type='button' class='btn btn-primary' style='width:100%;
   padding:3px;'>
  Edit </button></a> <br></br>

  <a href='../IncludesRequiresMethods/delete_pro.php?delete_pro=<?php
   echo $pro_id?>'> <button  type='button' class='btn btn-danger' style='width:100%; padding:3px;'>Delete </button></a>
      </div>
    </div>

";

}

}



function get_pro(){
    global $con;

     $get_pro = "select * from 'products'";

    $run_pro = mysqli_query($con, $get_pro);

    while ($row_pro=mysqli_fetch_array($run_pro)) {
      # code...
      $pro_id = $row_pro['product_id'];
      $pro_cat = $row_pro['product_cat'];
      $pro_title = $row_pro['product_title'];
      $pro_price = $row_pro['product_price'];
      $pro_image = $row_pro['product_image'];

      echo "


<div class='col-sm-4' style=' borde:0px solid #f2f2f2;'>
  <div class='panel panel-primary'>
    <div class='panel-heading'>  <a href='kamp_product_details.php?pro_id=$pro_id'>
     $pro_title </a></div>
<img src='admin_area/products/$pro_image' style=' width:100%; height:200px; margin:auto;'/>
<div class='abt2'> <a href='edit_pro.php?edit_pro=<?php echo $pro_id?>'> <button class='btn_edit'>Edit </button></a></div>

  <div class='abt3'><a href='../IncludesRequiresMethods/delete_pro.php?delete_pro=<?php echo $pro_id?>'> <button  class='btn_del'>Delete </button></a></div>
  </div>
</div>
";

    }
}



function get_cus(){
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
                         $cus_image = $row_user['cus_image'];

            $i++;

      echo "
<div class='products'>
<div class='abt'><?php echo $i; ?></div>
    <img src='../customers/<?php echo $cus_image;?>' width='150' height='200'/>
<div class='abt1'><?php echo $user_name; ?> </div>
<div class='abt2'><?php echo  $email; ?></div>
  <div class='abt3'><?php echo   $tel;  ?></div>
    <div class='abt4'><?php echo  $trn_date ?></div>
</div>
";

    }
}

 ?>
