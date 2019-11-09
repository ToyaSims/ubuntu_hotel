<?php
include "includes/conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Register | Buntu's Hotel</title>

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
  background-image: url(images/natural.jpg);
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
        <li><a href="contact.php"><span class="glyphicon glyphicon-Contact Us"></span> Contact Us</a></li>
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
  <div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Registration</div>
				<div class="panel-body">
					<form role="form" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Surname" name="txtLastname" type="text" autofocus="" maxlength="30" onkeypress="return alpha(event)" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Firstname" name="txtFname" type="text" maxlength="30" onkeypress="return alpha(event)" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="ID Number" name="txtID" type="text" maxlength="13" onkeypress="return isNumber(event);" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="txtUser" type="text" maxlength="30" onkeypress="return alpha(event)" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="txtPass" type="password" maxlength="30" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Mobile No." name="txtCell" type="text" maxlength="10" onkeypress="return isNumber(event);" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Email Address" name="txtEmail" type="email" maxlength="30" onblur="validateEmail(this);" required>
							</div>
							<div class="form-group">
									<!--label>Province</label-->
									<select class="form-control" name="txtProvince">
										<option>-- Select your Province --</option>
										<option>Eastern Cape</option>
										<option>Free State</option>
										<option>Gauteng</option>
										<option>Kwazulu-Natal</option>
										<option>Limpopo</option>
										<option>Mpumalanga</option>
										<option>Northern Cape</option>
										<option>North West</option>
										<option>Western Cape</option>
										<option>Other</option>
									</select>
								</div>
							<div class="form-group">
								<!--input class="form-control" placeholder="Home Address" name="txtHAddress" type="text" maxlength="100" onkeypress="return alpha(event)" required-->
                <textarea class="form-control" id="message" name="txtHAddress" placeholder="Please enter your home address here..." maxlength="100" rows="5" required></textarea>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Home Town" name="txtHTown" type="text" maxlength="30" onkeypress="return alpha(event)" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Postal Code" name="txtPCode" type="text" maxlength="4" onkeypress="return isNumber(event);" required>
							</div>
							<button name="btn-register" class="btn btn-primary">Register</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
</section>
<hr>
<!--div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12">
<div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
          <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
            <div class="caption">
              <h3>Heading</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <hr>
              <p class="text-center"><a href="#" class="btn btn-success" role="button">For Sale</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
          <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
            <div class="caption">
              <h3>Heading</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <hr>
              <p class="text-center"><a href="#" class="btn btn-info" role="button">For Rent</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 hidden-sm hidden-xs">
          <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
            <div class="caption">
              <h3>Heading</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <hr>
              <p class="text-center"><a href="#" class="btn btn-success" role="button">For Sale</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
          <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
            <div class="caption">
              <h3>Heading</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <hr>
              <p class="text-center"><a href="#" class="btn btn-info" role="button">For Rent</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
          <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
            <div class="caption">
              <h3>Heading</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <hr>
              <p class="text-center"><a href="#" class="btn btn-primary btn-success" role="button">For Sale</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
          <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
            <div class="caption">
              <h3>Heading</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <hr>
              <p class="text-center"><a href="#" class="btn btn-info" role="button">For Rent</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div-->
<hr>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © 2017 - Buntu's Hotel. All rights reserved.</p>
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
<?php
if(isset($_POST['btn-register'])){
	//echo "Button is clicked";
	$id = $_POST['txtID'];
	$sur = $_POST['txtLastname'];
	$firstn = $_POST['txtFname'];
	$usern = $_POST['txtUser'];
	$passw = $_POST['txtPass'];
	$prov = $_POST['txtProvince'];
	$hstAdd = $_POST['txtHAddress'];
	$htown = $_POST['txtHTown'];
	$pcode = $_POST['txtPCode'];
	$mobi = $_POST['txtCell'];
	$emailAdd = $_POST['txtEmail'];
	
	$sql_comm = "INSERT INTO tbl_guest(idno, surname, firstname, username, pwd, province, 
				 hstraddr, htown, hpcode, cellno, emailaddr)
				 VALUES('$id','$sur','$firstn','$usern','$passw','$prov','$hstAdd','$htown','$pcode','$mobi','$emailAdd')";
	
	if($conn->query($sql_comm)){
		?>
		<script>
			alert("Thanks for registering with us. Registration was successful!");
      window.location.href = "signin.php";
		</script>
		<?php
	}
	else{
		?>
		<script>
			alert("Something went wrong\nData not saved");
		</script>
		<?php
		echo $sql_comm.", ".$conn->error;
	}
}

?>