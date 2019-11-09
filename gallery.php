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
<title>Gallery Buntu's  Hotel</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<link href="icon.png" rel="icon">
<script src="js/validate.js"></script>
<style>
body {
  background-image: url(images/natural.jpg);
  background-repeat: repeat;
  background-position: center;
  background-attachment: fixed;
}
@import url('http://fonts.googleapis.com/css?family=Open+Sans:300');

* {
  margin: 10;
  padding: 10;
  box-sizing: border-box;
}

body {
  font: 14px/1 'Open Sans', sans-serif;
  color: #555;
  background: #e5e5e5;
}

.gallery {
  width: 1270px;
  margin: 0 auto;
  padding: 5px;
  background: #fff;
  box-shadow: 1px 2px rgba(0,0,0,.3);
}

.gallery > div {
  position: relative;
  float: left;
  padding: 5px;
}

.gallery > div > img {
  display: block;
  width: 200px;
  transition: .1s transform;
  transform: translateZ(0); /* hack */
}

.gallery > div:hover {
  z-index: 1;
}

.gallery > div:hover > img {
  transform: scale(1.7,1.7);
  transition: .3s transform;
}

.cf:before, .cf:after {
  display: table;
  content: "";
  line-height: 0;
}

.cf:after {
  clear: both;
}

h1 {
  margin: 30px 0;
  font-size: 30px;
  font-weight: 300;
  text-align: center;
}

    h1{
color:white;
 font-weight:bold;
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
        <li class="index.html"><a href="index.html"><span class="glyphicon glyphicon-Home"></span> Home</a></li>
        <li><a href="about.php"><span class="glyphicon glyphicon-About Us"></span> About Us</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-Gallery"></span> Gallery</a></li>
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



</style>
<h1 style="text-align:center">Gallery</h1>

<div class="gallery cf">
  <div>
    <img src="img/a1.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
  <div>
     <img src="img/a2.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
  <div>
    <img src="img/a3.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
  <div>
    <img src="img/a4.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
  <div>
    <img src="img/a8.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
  <div>
    <img src="img/a6.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
    <div>
    <img src="img/a7.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
    <div>
    <img src="img/a8.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
    <div>
    <img src="img/a9.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
    <div>
    <img src="img/a10.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
  <div>
     <img src="img/a12.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
  <div>
    <img src="img/a13.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
  <div>
    <img src="img/a14.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
  <div>
    <img src="img/a15.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
  <div>
    <img src="img/a25.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
    <div>
    <img src="img/a17.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
    <div>
    <img src="img/a18.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
    <div>
    <img src="img/a19.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
      <div>
    <img src="img/a20.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
      <div>
    <img src="img/a21.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
      <div>
    <img src="img/a22.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
      <div>
    <img src="img/a23.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
      <div>
    <img src="img/a24.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
      <div>
    <img src="img/a26.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
      <div>
    <img src="img/a28.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
        <div>
    <img src="img/a29.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
        <div>
    <img src="img/a30.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
        <div>
    <img src="img/a31.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
        <div>
    <img src="img/a32.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
        <div>
    <img src="img/a33.jpg" img src=  width="900" height="200" alt="Computer Hope"/>
  </div>
</div>

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