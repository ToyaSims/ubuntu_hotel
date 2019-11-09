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
<title>Login Buntu's Hotel</title>

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
        <li><a href="index.html" class="active"><span class="glyphicon glyphicon-Home"></span> Home</a></li>
        <li><a href="about.php"><span class="glyphicon glyphicon-About Us"></span> About Us</a></li>
        <li><a href="gallery.php"><span class="glyphicon glyphicon-Gallery"></span> Gallery</a></li>
        <li><a href="services.php"><span class="glyphicon glyphicon-Services"></span> Services</a></li>
         <li><a href="our_restuarant.php"><span class="glyphicon glyphicon-Our Small Restuarant"></span> Our Small Restuarant</a></li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-shopping-Contact Us"></span> Contact Us</a></li>
        <li class="dropdown active"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account <span class="caret"></span></a>
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
      
    </div>
    <hr>
  </div>
<section>
<h1 style="text-align:center">Please Enter Username and Password: </h1>
  <div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading"><span class="glyphicon glyphicon-lock"></span> Guest Sign In</div>
				<div class="panel-body">
					<form role="form" method="post" id="loginForm">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" id="usern" name="email" type="text" onkeypress="return alpha(event)" maxlength="30" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" id="userpass" name="password" type="password" maxlength="30" value="">
							</div>
							<!--div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div-->
							<button id="login-btn" name="btn-login" class="btn btn-primary">Login</button><a href="register.php" class="btn btn-primary navbar-right">
              Register here!</a>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
</section>
<hr>
<hr>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © 2017 -Buntu's Hotel. All rights reserved.</p>
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
<?php
if(isset($_POST['btn-login'])){
	//echo "Button is clicked";
  $user = $_POST['email'];
  $pass = $_POST['password'];

  //echo "Username: ".$user." - Password: ".$pass;

  $sql = "SELECT * FROM tbl_guest WHERE username ='$user' AND pwd = '$pass'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    # code...
    //echo "Selected Successful!";
   // header('Location: user_dashboard.php');
    $_SESSION=$result->fetch_assoc();
    //header('location:user_dashboard.php');
    //echo $_SESSION['firstname']." ".$_SESSION['surname']." is from ".$_SESSION['province'];
    ?>
    <script>
      alert("Login Successful");
      window.location.href = "user_dashboard.php";
    </script>
    <?php
  }
  else{
    ?>
    <script>
      alert("Login failed! Please make sure that you provide valid username and password.");
    </script>
    <?php
  }
}

?>