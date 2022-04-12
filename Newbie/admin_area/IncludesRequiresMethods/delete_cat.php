<?php
require('db.php');

 global $con;

if (isset($_GET['delete_cat'])) {
  # code...
  $delete_id=$_GET['delete_cat'];
  $delete_cat = "DELETE FROM categories WHERE cat_id='$delete_id'";
  $run_delete=mysqli_query($con, $delete_cat);
  if ($run_delete) {
    # code
    header("Location: ../pages/admin_panel.php");
  }
  else {
    echo "Not Deleted";
  }
}
?>
