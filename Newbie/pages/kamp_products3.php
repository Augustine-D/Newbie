<?php
require("../IncludesRequiresMethods/kamp_secure.php");
require("../IncludesRequiresMethods/kmap_db.php");
include('../IncludesRequiresMethods/kamp_methods.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>KAMP</title>
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/main.css"/>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="kamp_products.php">KAMP</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="account.php"><span class="glyphicon glyphicon-cog"></span>Account </a></li>
        <li><a href="kamp_products_log_out.php"><span class="glyphicon glyphicon-thumbs-down">
        </span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<br></br><br></br>
<div class="container">
	<div class="row justify-content-center">
    <div class="col-12 col-md-10 col-lg-8">
    <form action="kamp_search_results_454.php" class="card card-sm">
    <div class="card-body row no-gutters align-items-center">
    <div class="col-auto">
    </div>
    <div class="col">
    <input class="form-control form-control-lg form-control-borderless" type="search" name="user_query" placeholder="Search keywords">
    </div>
    </div>
    </form>
    </div></div></div>



    <br></br>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
<h2> Available Spare Parts </h2>
<?php index2() ?>
    </div>
  </div>
</div>

<div class="container">
<div class="col-sm-12">
  <ul class="pagination">
    <li><a href="kamp_products2.php">Previous</a></li>
   <li><a href="kamp_products4.php">View More</a></li>
 </ul>
</div>
</div>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>&COPY copyright 2019 <a href="">KAMP</a></p>
</footer>


</body>
</html>
