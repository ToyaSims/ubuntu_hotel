<?php
session_start();
include "includes/conn.php";
$amount = $_GET['amount'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Room Bookings  Adorn's Hotel</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<link href="icon.png" rel="icon">
<style>
  .modal-header{
    background-color: #d9edf7;
  }
</style>
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
  <div class="modal fade bs-example-modal-lg" id="myModal" role="dialog" data-keyboard="false" data-backdrop="static"  aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header modal-header-info">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-center" id="myModalLabel">Provivide the Following information for you to able to book a room(s)</h4>
        </div>

        <!--
        <div class="modal-body">
         <?php
            // $pic = "dresses/".$_GET['id']."-sale.jpg";
            //echo $pic;.
          ?>
        -->
          <div class="row">
            <div class="col-md-2">
              <div class="img-responsive">
              <!--  <img src="<?php //echo $pic;?>">-->
              </div>
            </div>
            <div class="col-md-6">
              <form method="post" role="form" class="form-horizontal" action="">
                <div class="form-group">
                  <label class="col-xs-4 control-label">Check in Date</label>
                  <div class="col-xs-6">
                    <input type="date" class="form-control" name="checkinDate" value="<?php echo date("Y-m-d")?>">
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-xs-4 control-label">Check out Date</label>
                  <div class="col-xs-6">
                    <input type="date" class="form-control" name="checkoutDate">
                  </div>
                  </div>
               <div class="row">
               <div class="col-md-12">
                <form method="post" role="form" class="form-horizontal">
                <div class="form-group">
                  <label class="col-xs-5 control-label">No of rooms</label>
                  <div class="col-xs-5">
                  <select class="form-control" name="no_room">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                  </select>
                  <!-- <input type="text" class="form-control" name ="no_room"> -->
                 </div>
                </div>
                <div class="form-group">
                  <label class="col-xs-5 control-label">No of people</label>
                  <div class="col-xs-5">
                  <select class="form-control" name="no_people">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                  </select>
                </div>
                </div>                               
                <div class="form-group">
                 <!-- <label class="col-xs-3 control-label">Size</label> -->
                  <div class="col-xs-5">
                    <!--Bust<input type="text" class="form-control" name="bust">&nbsp;Waist<input type="text" class="form-control" name="waist">&nbsp;Hips<input type="text" class="form-control" name="hips">&nbsp;Hollow to Floor<input type="text" class="form-control" name="toFloor">-->
                  </div> 
                </div>
                <!-- </form> -->
                <div class="form-group">
                <!--  <label class="col-xs-3 control-label">Quantity</label>-->
                  <div class="col-xs-5">
                   <!-- <input type="text" class="form-control" name="quantity">-->
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-xs-3 control-label">Amount (each)</label>
                  <div class="col-xs-5">
                    <input type="text" class="form-control" name="amount" value="<?php echo $amount; ?>" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-5 col-xs-offset-3">
                    <button type="submit" class="btn btn-primary" name="btn-hire">Book now</button>
                    <!--button type="button" class="btn btn-default" name="btn-login" data-dismiss="modal">Cancel</button-->
                    <a href="user_dashboard.php" class="btn btn-default">Cancel</a>
                  </div>
                </div>
                <hr>
                <strong>Note: </strong>If payment is not made within 7 days after submitting the form above, your request will be cancelled
              </form>
            </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
<script>
  $(window).load(function() {
    $('.bs-example-modal-lg').modal('show');
  });
</script>
</body>
</html>
<?php
  //$dbconn = new PDO("mysql:host=localhost; dbname=colors","root", "");
  if (isset($_POST['btn-hire'])) {
   // $color = $_POST['colorname'];
   // $size = $_POST['bust']." ".$_POST['waist']." ".$_POST['hips']." ".$_POST['toFloor'];
   // $quant = $_POST['quantity'];
    $guest = $_SESSION['gno'];
    $did = $_GET['id'];
    $amount = $_GET['amount'];//* $quant;
    // $bdate = date('Y-m-d H:i:s');
    // $ddate =date('Y-m-d H:i:s');
    $no_room = $_POST['no_room']; 
    $no_people = $_POST['no_people']; 
    $checkinDate = $_POST['checkinDate']; 
    $checkoutDate = $_POST['checkoutDate']; 
    $sqlr = "SELECT * FROM tbl_booking WHERE room_id = $did";
    $queryr = $conn->query($sqlr);
    $rows = $queryr->num_rows;
    $cd = date('Y-m-d');
    if ($checkinDate < $cd) {
      ?>
           <script>
      alert('Check in date is less than current date');
      </script>
        <?php
    }elseif ($checkoutDate < $checkinDate) {
      ?>
           <script>
      alert('Check out date cannot be greater than checkin date');
      </script>
        <?php
    }
    else{
      if ($rows > 0) {
        ?>
<script>
  alert('The selected room is not available! Please try again next time.')
</script>
        <?php
      }else{


      $sql = "INSERT INTO tbl_booking (gno, room_id, checkoutDate, checkinDate, no_room, no_people, amount) VALUES ( '$guest','$did','$checkoutDate', '$checkinDate', '$no_room', '$no_people', '$amount')";
  $result = $conn->query($sql);
  if ($result) {
    # code...
    //echo "Selected Successful!";
   // header('Location: user_dashboard.php');
    //$_SESSION=$result->fetch_assoc();
    //header('location:user_dashboard.php');
    //echo $_SESSION['firstname']." ".$_SESSION['surname']." is from ".$_SESSION['province'];
    ?>
    <script>
      alert("Room bookings was successful!\nPlease make sure you make payment as soon as possible to the banking details below:\nBANK: Standard Bank\nAccount Number: 9441588602\nBranch Code: 04155\nReference Number: Your ID Number\n\nThank you for using our service");
      window.location.href = "user_dashboard.php";
    </script>
    <?php
  }
  else{
    ?>
    <script>
      alert("Something is wrong");
    </script>
    <?php
  }
  }
    }
    
}

?>