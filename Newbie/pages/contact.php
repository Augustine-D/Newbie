<?php

include("../IncludesRequiresMethods/kmap_db.php");
require('../IncludesRequiresMethods/kamp_methods.php');

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
  <meta charset="utf-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/pages.css"/>
  <style>
.img-thumbnail{
  height: 290px;
  margin-bottom: 20px;

}
.image img{
  border: none;
}

.image img:hover{
  border: 1px solid #f2f2f2;
  transform: scale(1.1,1.1);
  transition: .6s transform;
}

.col-sm-3{
  border-right: none;
  color: grey;
}
.pro {
  margin-bottom: 40px;
  margin-top: 10px;
  border: 1px solid #f2f2f2;
  background: white;
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
        <a class="navbar-brand" href="kamp_products.php">K A M P</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class=""><a href="kamp_products.php">Home</a></li>
          <li ><a href="about.php">About</a></li>
          <li class="active"><a href="contact.php">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        </ul>
      </div>
    </div>
  </nav>

<br></br>  <br></br>                       <br></br>




                          <div class="container bg-grey">
                           <h2 class="text-center">CONTACT</h2>
                           <div class="row">
                             <div class="col-sm-5">
                               <p id="contact">Contact us and we'll get back to you within 24 hours.</p>
                               <p><span class="glyphicon glyphicon-map-marker"></span> Ghana, Accra</p>
                               <p><span class="glyphicon glyphicon-phone"></span> +233 55204 77942</p>
                               <p><span class="glyphicon glyphicon-envelope"></span> customer@kamp.com</p>
                             </div>
                             <div class="col-sm-7">
                               <div class="row">
                                 <div class="col-sm-6 form-group">
                                   <input class="form-control" id="name" name="name" placeholder="Name" type="text"
                                   value="<?php echo @$_SESSION ["username"]; ?>" required >
                                 </div>

                               </div>
                               <textarea class="form-control" id="comments" name="comments" placeholder="Message" rows="5"></textarea><br>
                               <div class="row">
                                 <div class="col-sm-12 form-group">
                                   <button class="btn btn-default pull-right" type="submit">Send</button>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>

<br></br><br></br>
<br id="about"></br><br></br>
<div class="container">
  <div class="jumbotron jumbotron-fluid">
  <h3 class="display-4">ABOUT KAMP GHANA</h3>
  <p class="lead">The main aim and objective behind this project is to develop an online
     web-based application where vehicle owners can buy their spare parts
     from spare part dealers with less stress. This platform is also going
      to facilitate a relationship between the vehicle owners and the spare part dealers.
    Furthermore we are on the path to reduce the challenges vehicle owners
    encounter when buying spare parts.</p>
</div></div>


<br></br><br></br>
  <div class="container bg-3 text-center">
    <h3 class="margin">OUR TEAM</h3><br>
    <div class="row">
      <div class="col-sm-3">
        <p> EMMANUEL BOTCHWAY </p>
        <img  class="img-thumbnail" src="../images/IMG-20180924-WA0048.jpg" class="img-responsive margin" style="width:100%" alt="Image">
      </div>
      <div class="col-sm-3">
        <p> FREDA DANKYI <p>
        <img class="img-thumbnail"  src="../images/PhotoGrid_1527872166150.png" class="img-responsive margin" style="width:100%" alt="Image">
      </div>
      <div class="col-sm-3">
        <p> YEBOAH A. DANQUAH</p>
        <img class="img-thumbnail"  src="../images/PhotoGrid_1520621392369.png" class="img-responsive margin" style="width:100%" alt="Image">
      </div>
      <div class="col-sm-3">
        <p>IRENE AHEMBA TOFFA </p>
        <img  class="img-thumbnail" src="../images/9c3ce451d07616d8af932925f8deba57.jpg" class="img-responsive margin" style="width:100%" alt="Image">
      </div>

    </div>
  </div>



<br></br><br></br>

 <footer class="container-fluid text-center">
   <a href="#top">
     <span class="glyphicon glyphicon-chevron-up"></span>
   </a>
 </br></br>
   <a href="#">
   <i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
   <a href="#">
   <i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
   <a href="#">
       <i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
 <hr>
   <p> <span class="kamp"> &copy copyright 2018 <i class="kamp"> Kampgh.com</i> all rights reserved. </p>
 </footer>
</body>
</html>
