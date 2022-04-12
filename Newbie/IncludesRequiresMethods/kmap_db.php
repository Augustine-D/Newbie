<?php
$con = mysqli_connect("localhost","root","","project_atom");// connecting to database
if (mysqli_connect_errno())// Checking database connection
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();// if database connection fails
  }
?>
