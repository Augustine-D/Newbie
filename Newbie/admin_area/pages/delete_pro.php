<?php
require('../IncludesRequiresMethods/db.php');
include("../IncludesRequiresMethods/ecure.php");
?>
<?php
if (isset($_GET['delete_pro'])) {
  $delete_id=$_GET['delete_pro'];
  $delete_pro = "DELETE FROM products WHERE product_id='$delete_id'";
  $run_delete=mysqli_query($con, $delete_pro);
  if ($run_delete) {
        header("location: ../pages/admin_all_products.php?err=" .urlencode("<h4> Product deleted successfully  </h4>"));
  }
}
?>
