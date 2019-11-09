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
<title>Contact Us  Buntu's  Hotel</title>

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
        <li><a href="our_restuarant.php"><span class="glyphicon glyphicon-Our Small Restuarant"></span> Our Small Restuarant</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-Contact Us"></span> Contact Us</a></li>
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
<div class="container">
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading"><span class="glyphicon glyphicon-envelope"></span> Contact Form</div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<fieldset>
							<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Name</label>
									<div class="col-md-9">
										<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
									</div>
								</div>
										
							<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Your E-mail</label>
									<div class="col-md-9">
										<input id="email" name="email" type="text" placeholder="Your email" class="form-control">
									</div>
								</div>
											
							<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Your message</label>
									<div class="col-md-9">
										<textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
									</div>
								</div>
											
							<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-default btn-md pull-right">Submit</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
      <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-map-marker"></span> Map Location</div>
          <div class="panel-body">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3585.563086281309!2d28.104883215183783!3d-26.015126062631243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e956e0fafb856f1%3A0xeb489d05fbd8c454!2sMall%20of%20Africa!5e0!3m2!1sen!2sza!4v1573309848413!5m2!1sen!2sza" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
		</div>
	</div>
</div>
<hr>

<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © 2016 - Ubuntu Hotel. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
<script>

function validateInput (id) {
  // body...
  if ($("#"+id).val() == null || $("#"+id).val() == "") {
    alert("Error submitting form");
    return false;
  };
}

$(document).ready(){
    function () {
      // body...
      $("#login-btn").click(function () {
        // body...
        validateInput("usern");
      })
    }
}

</script>
</body>
</html>