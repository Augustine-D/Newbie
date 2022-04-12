<?php

include("IncludesRequiresMethods/kmap_db.php");
require('IncludesRequiresMethods/kamp_methods.php');

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> KAMP | HOME</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/pages.css"/>
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
        <a class="navbar-brand" href="index.php">K A M P</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="pages/kamp_user_registration_form.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="pages/kamp_login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

<br></br>  <br></br>                       <br></br>



                          <img style="width:100%;" src="images/a.jpg" alt=""/>
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
<h2> FEATURED </h2>

<?php f2() ?>
      </div>
    </div>
  </div>

<div class="container">
<div class="col-sm-12">
  <ul class="pagination">
    <li><a href="f3.php">Previous </a></li>
   <li><a href="f5.php">View More</a></li>
 </ul>
</div>
</div>

<br id="about"></br><br></br>
<div class="container">
  <h3>ABOUT KAMP GHANA</h3>
  <p>Our aim is to provide a converntional way of getting access to spare part dealers around
    Abossey Okai.</p>
</div>


<br></br><br></br>


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
