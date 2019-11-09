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
<title>Services  Buntu's Hotel</title>

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
  background-color: url(Silver);
	background-repeat: repeat;
	background-position: center;
  background-attachment: fixed;}
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
        <li class="active"><a href="services.php"><span class="glyphicon glyphicon-Services"></span> Services</a></li>
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
  <div class="container well">
    <div class="row">
      <div class="col-lg-12">
        <h3>Our Services</h3>
        <hr>
        <ul id="myTab1" class="nav nav-tabs"><!--
          <li class="active"> <a href="#home1" data-toggle="tab"> Miscellaneous Pricelist </a> </li> -->
          <li><a href="#pane2" data-toggle="tab">Food Platter</a></li>
          <li> <a href="#pane3" data-toggle="tab">Room Rental Agreement</a> </li>
        </ul>
        <div id="myTabContent1" class="tab-content">
          <div class="tab-pane fade in active" id="home1">
            <!--p class="text-center"><img src="img/3b536b.gif" alt=""></p-->
            <h4>We offer Good Services such as:</h4>
            <p><ol>
                <li>Program/Menu/Table number = R35</li>
                <li>Electronic Invitation Picture = R300</li>
                <li>Electronic Invitation Video = From R300</li>
                <li>Invitations = Quotation on request</li>
                <li>Seating Arrangement Display = R500</li>
                <li>Plates numbering = R265</li>
                <li>Bottled Refreshments with decorative sticker</li>
                <li>Flower baskets = R70 each</li>
                <li>Cake cutter or lifter = R70 each</li>
              </ol></p>
              <div class="table-responsive">
                <table class="table table-hover">
                  <tr>
                    <th>#</th>
                    <th>Quantity</th>
                    <th>Water</th>
                    <th>Juice</th>
                  </tr>
                  <?php
                    $sql = "SELECT * FROM tbl_refreshments";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                  # code...
                        while ($row = $result->fetch_assoc()) {
                    # code...
                       
                  ?>
                  <tr>
                    <td><?=$row['id']?></td>
                    <td><?=$row['quantity']?>&nbsp;bottles</td>
                    <td>R<?=$row['wprice']?></td>
                    <td>R<?=$row['jprice']?></td>
                  </tr>
                  <?php
                     }
                    }
                  ?>
                </table>
              </div>
              <hr>
              <p><strong>N.B</strong> Juice flavours available are apple, orange, fruit cocktail, mango, guava, mixed berry, and tropical punch </p>
          </div>
          <div class="tab-pane fade" id="pane2">
            <!--p class="text-center"><img src="img/9b59b6.gif" alt=""></p-->
            <h4>We offer Food Platters such as:</h4>
            <p><ol>
                <li>Chicka chicken hot wing platter = R350</li>
                <li>Chicka chicken sticky platter = R350</li>
                <li>Chicka chicken sticky wings platter = R350</li>
                <li>Chicka chicken platter = R350</li>
                <li>Kebab platter = R400</li>
                <li>Chicken and rib platter = R400</li>
                <li>Hot platter = R400</li>
                <li>Vegetarian platter = R400</li>
                <li>Cold meat platter = R450</li>
                <li>Cold platter = R400</li>
                <li>Cheeseboard platter = R450</li>
                <li>Cocktail bread rolls platter = R200</li>
                <li>Sandwich platter = R250</li>
                <li>Super sub platter = R300</li>
                <li>Vegetable platter = R300</li>
                <li>Fruit platter = R300</li>
              </ol></p>
              <hr>
              <p><strong>N.B</strong> Each platter serves 10 people </p>
          </div>
          <div class="tab-pane fade" id="pane3">
            <!--p class="text-center"><img src="img/16a085.gif" alt=""></p-->
            <hr>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">Terms and Conditions</button>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Agreements</h4>
                  </div>
                  <div class="modal-body">
                    <ol>
                      <li>1. Unless stated otherwise in the face hereto, all invoices shall be due and payable upon presentation.  Queries in respect of specific invoices shall not affect immediate payment of any other outstanding amounts.  Any amounts payable by the Customer to the Hotel in terms of this agreement and not paid on due date, shall accrue interest at 2% (two percent) above the prime bank overdraft rate as advised by the Hotel's Bankers.  Payment by cheque must be made by prior arrangement or must be a bank guaranteed cheque.  All payments by credit or debit card shall be levied with an additional 5% (five percent).</li>
                      <li> The Hotel reserves the right to cancel any booking forthwith and without liability on its part in the event of damage to, or destruction of the allocated causes beyond the control of the Hotel which shall prevent it from performing its obligations in connection with any booking </li>
                      <li>   The Hotel reserves the right to change the name and location of the Customer's previously designated function/conference room upon having given reasonable notice to do so.</li>
                      <li>   Should the booking be cancelled in WRITING:
                        <ol type="1">
                          <li>60 days or more prior to the agreed date, no cancellation fee will be charged.</li>
                          <li>A cancellation fee of 25% will be charged for cancellation 30 to 59 days before the event.</li>
                          <li>A cancellation fee of 50% will be charged for cancellations 15 to 29 days before the event.</li>
                        </ol>
                      </li>
                      <li>The Hotel reserves the right to require payment of a deposit at any time prior to the date of the booking.  The amount of such deposit will be determined by the Hotel at its sole discretion.  Should the Customer fail to pay such deposit by the date indicated on the face of this agreement, or within 7 days of being requested to do so the Hotel shall deem the booking to be cancelled.</li>
                      <li>  If any amount owed by the Customer is not paid on due date, then without prejudice to or any other right it may have, the Hotel may immediately suspend the carrying out of any of its then uncompleted obligations until the payment is made.</li>
                    </ol>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!--button type="button" class="btn btn-primary">Save changes</button-->
                  </div>
                </div>
              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<hr>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
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