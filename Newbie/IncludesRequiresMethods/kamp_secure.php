
<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location:kamp_login.php");
exit(); }
?>
