<?php
session_start();
include "includes/conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>About Us  Buntu's  Hotel</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<link href="icon.png" rel="icon">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
body {
  background-image: url(images/1.jpg);
  background-repeat: repeat;
  background-position: center;
    background-attachment: fixed;
}
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myInverseNavbar2"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.html">Ubuntu's  Hotel</a> </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="myInverseNavbar2">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html"><span class="glyphicon glyphicon-Home"></span> Home</a></li>
        <li class="active"><a href="about.php"><span class="glyphicon glyphicon-About Us"></span> About Us</a></li>
        <li><a href="gallery.php"><span class="glyphicon glyphicon-Gallery"></span> Gallery</a></li>
        <li><a href="services.php"><span class="glyphicon glyphicon-Services"></span> Services</a></li>
        <li><a href="our_restuarant.php"><span class="glyphicon glyphicon-Our Small Restuarant"></span> Our Small Restuarant</a></li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-Contact Us"></span> Contact Us</a></li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="signin.php">Sign-In</a></li>
            <li><a href="register.php">Register</a></li>
            <!--li><a href="#">Something else here</a></li>
            <li class="divider"></li>shopping-cart
            <li><a href="#">Separated link</a></li-->
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<hr>

<hr>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-offset-8">
        <p></p>
      </div>
    </div>
  </div>
</section>
<hr>
<div class="container well">
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-lg-8 col-md-8"> <span class="text-right">
          </span>
      <h3>About Us</h3>
      <hr>
      <p>Ubuntu is a Hotel it is situated in Midrand next to Mall of Africa. It was established in 2013 by Mr S Ntuli, Miss Poone and Miss Zuma.
Ubuntu Hotel is a home of royalty rest their heads and fortune favours the brave. Offering a beauty spa and glorious health, the finest dining options and this is a place of friendly atmosphere.
The Hotel has 24 rooms with all the facilities. There are double, single and family rooms with attached bathrooms. There are indoor and outdoor games facilities with a swimming pool. Air-conditioned rooms too are available. Within a distance of a few yards the real maritime view is attractive for the tourist for enjoyment.
In maintaining the langue there are working fifteen employees Managers, Accountant, Supervisors, Cashier, Room boys, Servants, Cleaners, and Cookers for catering. Everyday foreign and local guests visit and enjoy with the resort facilities.
</p>
      <p><strong>Open hours</strong><br>We are working 24/7 <!--<br>Tuesday: 08:30-17:00<br>Wednesday: 08:30-17:00<br>Thursday: 08:30-17:00<br>Friday: 08:30-17:00<br>Saturday: 09:00-13:00 --></p>
    </div>
    <div class="col-xs-6 col-sm-6 col-lg-4 col-md-4"> <span class="text-right"> </span>
      <h3>Contact Us</h3>
      <hr>
        <address>
          <strong>Hotel No. 007</strong><br>
          Next to Mall Of Africa <br>
          Midrand 1632<br>
      <abbr title="Phone number">Tel:</abbr> (078) 678 9402 / (076) 919 5768
          </address>

          <address>
            <strong>E-Mail</strong><br>
            <a href="mailto:#">Fhulugmail.com</a>
          </address>
    </div>
  </div>
</div>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © 2016 -Ubuntu Hotel. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>