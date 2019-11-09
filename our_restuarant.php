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
<title>Our Small Restuarant  Buntu's  Hotel</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<link href="icon.png" rel="icon">
<script src="js/validate.js"></script>
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
 .slider-holder
         {
             width: 600px;
             height: 400px;
             background-color: yellow;
             margin-left: auto;
             margin-right: auto;
             margin-top: 0px;
             text-align: center;
             overflow: hidden;
         }
         
         .image-holder
         {
             width: 2900px;
             background-color: red;
             height: 400px;
             clear: both;
             position: relative;
             
             -webkit-transition: left 2s;
             -moz-transition: left 2s;
             -o-transition: left 2s;
             transition: left 2s;
         }
         
         .slider-image
         {
             float: left;
             margin: 0px;
             padding: 0px;
             position: relative;
         }
         
         #slider-image-1:target ~ .image-holder
         {
             left: 0px;
         }
         
         #slider-image-2:target ~ .image-holder
         {
             left: -800px;
         }
         
         #slider-image-3:target ~ .image-holder
         {
             left: -1600px;
         }
         
         .button-holder
         {
             position: relative;
             top: -20px;
         }
         
         .slider-change
         {
             display: inline-block;
             height: 10px;
             width: 10px;
             border-radius: 5px;
             background-color: brown;
         }
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myInverseNavbar2"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.html">Adorn's Hotel</a> </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="myInverseNavbar2">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html" class="active"><span class="glyphicon glyphicon-Home"></span> Home</a></li>
        <li><a href="about.php"><span class="glyphicon glyphicon-About Us"></span> About Us</a></li>
        <li><a href="gallery.php"><span class="glyphicon glyphicon-Gallery"></span> Gallery</a></li>
        <li><a href="services.php"><span class="glyphicon glyphicon-Services"></span> Services</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-Our Small Restuarant"></span> Our Small Restuarant</a></li>
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
<style>

    h1{
color:white;
 font-weight:bold;
}

</style>
<!doctype html>
<html>
<h1 style="text-align:center"> Our Small Restuarant</h1>
<head>
     <title>QNimate Slider</title>
     <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
     <div class="slider-holder">
         <span id="slider-image-1"></span>
         <span id="slider-image-2"></span>
         <span id="slider-image-3"></span>
        <!-- <span id="slider-image-4"></span>
         <span id="slider-image-5"></span>
         <span id="slider-image-6"></span>
         <span id="slider-image-7"></span>
         <span id="slider-image-8"></span>-->
         <div class="image-holder">
            <img src="img/l1.jpg" img src=  width="600" height="400" alt="Computer Hope" class="slider-image" />
            <img src="img/l2.jpg" img src=  width="600" height="400" alt="Computer Hope" class="slider-image" />
            <img src="img/l3.jpg" img src=  width="600" height="400" alt="Computer Hope" class="slider-image" />
         <!--   <img src="img/l4.jpg" img src=  width="600" height="400" alt="Computer Hope" class="slider-image" />
            <img src="img/l6.jpg" img src=  width="600" height="400" alt="Computer Hope" class="slider-image" />
            <img src="img/l7.jpg" img src=  width="600" height="400" alt="Computer Hope" class="slider-image" />
            <img src="img/l8.jpg" img src=  width="600" height="400" alt="Computer Hope" class="slider-image" />
            <img src="img/l9.jpg" img src=  width="600" height="400" alt="Computer Hope" class="slider-image" />-->
             
         </div>
         <div class="button-holder">
             <a href="#slider-image-1" class="slider-change"></a>
             <a href="#slider-image-2" class="slider-change"></a>
             <a href="#slider-image-3" class="slider-change"></a>
            <!-- <a href="#slider-image-4" class="slider-change"></a>
             <a href="#slider-image-5" class="slider-change"></a>
             <a href="#slider-image-7" class="slider-change"></a>
             <a href="#slider-image-8" class="slider-change"></a> -->

         </div>
     </div>
</body>
</html>
<br>
<br>
<br>
<br>
<br>
<br>
</style>
<footer class="text-center ">
  <div class="container ">
    <div class="row">
      <div class="col-xs-12 ">
        <p>Copyright © 2017 - Ubuntu Hotel. All rights reserved.</p>
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