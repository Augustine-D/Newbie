<?php
require('db.php');
include("secure.php");
?>
<?php
if (isset($_GET['delete_pro'])) {
  $delete_id=$_GET['delete_pro'];
  $delete_pro = "DELETE FROM products WHERE product_id='$delete_id'";
  $run_delete=mysqli_query($con, $delete_pro);
  if ($run_delete) {
    # code
    header("Location: ../pages/admin_all_products.php");
  }
}
?>
