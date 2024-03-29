
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
<title>Room booking Buntu's  Hotel</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<link href="icon.png" rel="icon">
<style>
  .modal-header{
    background-color: #d9edf7;
  }
  </style>
  
  <style>

@import "compass/css3";

@import "compass/reset";
@import "compass/css3";

/* Colors */  
/* ---------------------------------------- */ 
$border:     #c6c6c6;
$border-focus: #9FB1C1;
$brand-color:  #1b3d4d;
$booking-green: #bdcc00;
$asphalt:     #506982;

*{
  @include box-sizing(border-box);
}
body{
  text-align: center;
  font-family: 'Lato', 'sans-serif';
  font-weight: 400;

}
a{
  text-decoration: none;
}
.info-text{
  text-align: left;
  width: 100%;
}
header, form{
  padding: 4em 10%;
}

.form-group{
  margin-bottom: 20px;
}
h2.heading{
  font-size: 18px;
  text-transform: uppercase;
  font-weight: 300;
  text-align: left;
  color: $asphalt;
  border-bottom: 1px solid $asphalt;
  padding-bottom: 3px;
  margin-bottom: 20px;
}

.controls{
  text-align: left;
  position: relative;
  input[type="text"],
  input[type="email"],
  input[type="number"],
  input[type="date"],
  input[type="tel"],
  textarea,
  button,
  select{
    padding: 12px;
    font-size: 14px;
    border: 1px solid $border;
    width: 100%;
    margin-bottom: 18px;
    color: #888;
    font-family: 'Lato', 'sans-serif';
    font-size: 16px;
    font-weight: 300;
    @include border-radius(2px);
    @include transition(all .3s);

    &:focus, &:hover{
      outline: none;
      border-color: $border-focus;
      + label{
        color: $booking-green;
          cursor: text;
      }
    }
  }

  .fa-sort{
    position:absolute;
    right: 10px;
    top: 17px;
    color: #999;
  }
  select{
    @include appearance(none);
    cursor: pointer;
  }
  label{
    position: absolute;
    left: 8px;
    top: 12px;
     width: 60%;
     color: #999;
    font-size: 16px;
    display: inline-block;
    padding: 4px 10px;
    font-weight: 400;
    background-color: rgba(255,255,255,0);
    @include transition(color .3s, top .3s, background-color .8s);
     background-color: rgba(255,255,255,1);

    &.active{
      top: -11px;
      color: #555;
      background-color: rgba(255,255,255,1);
      width: auto;
    }
  }
  textarea{
    resize: none;
    height: 200px;
  }
}

button{
  cursor: pointer;
  background-color: $brand-color;
  border: none;
  color: #fff;
  padding: 12px 0;
  float: right;
  &:hover{
    background-color: lighten($brand-color, 5%);
  }
}

.clear:after{
    content: "";
    display: table;
    clear: both;
}





// Grid https://codepen.io/chriscoyier/pen/eGcLw

$pad: 10px;

.grid {
  background: white;
  //margin: 0 0 $pad 0;
  
  &:after {
    /* Or @extend clearfix */
    content: "";
    display: table;
    clear: both;
  }
}

[class*='col-'] {
  float: left;
  padding-right: $pad;
  .grid &:last-of-type {
    padding-right: 0;
  }
}
.col-2-3 {
  width: 66.66%;
}
.col-1-3 {
  width: 33.33%;
}
.col-1-2 {
  width: 50%;
}

.col-1-4 {
  width: 25%;
}

@media (max-width: 760px) {
  .col-1-4-sm, .col-1-3, .col-2-3 {
  width: 100%;
  }
  [class*='col-'] {
    padding-right: 0px;
  }  
}

.col-1-8 {
  width: 12.5%;
}
</style>
<!-- =============================================================================
    
    Title: Simple Hotel booking form
    Description: Simple Clean form for booking a room
    Nerds name: Andi
    Site: http://andi.io
    Twitter: @gitmash
    Location: Zurich, Switzerland 

    ==== THANKS ==== 

    Forked from @soulrider911 https://codepen.io/soulrider911/pen/ugnyl/
    font: Lato (google font)
    Icon font:   http://fontawesome.io/icons/

    ==== @TODO ====

    Make <select> easier to select

========================================================================== -->

<form action="">
  <!--  General -->
  <div class="form-group">
    <h2 class="heading">Booking & contact</h2>
    <div class="controls">
      <input type="text" id="name" class="floatLabel" name="name">
      <label for="name">Name</label>
    </div>
    <div class="controls">
      <input type="text" id="email" class="floatLabel" name="email">
      <label for="email">Email</label>
    </div>       
    <div class="controls">
      <input type="tel" id="phone" class="floatLabel" name="phone">
      <label for="phone">Phone</label>
    </div>
      <div class="grid">
        <div class="col-2-3">
          <div class="controls">
           <input type="text" id="street" class="floatLabel" name="street">
           <label for="street">Street</label>
          </div>          
        </div>
        <div class="col-1-3">
          <div class="controls">
            <input type="number" id="street-number" class="floatLabel" name="street-number">
            <label for="street-number">Number</label>
          </div>          
        </div>
      </div>
      <div class="grid">
        <div class="col-2-3">
          <div class="controls">
            <input type="text" id="city" class="floatLabel" name="city">
            <label for="city">City</label>
          </div>         
        </div>
        <div class="col-1-3">
          <div class="controls">
            <input type="text" id="post-code" class="floatLabel" name="post-code">
            <label for="post-code">Post Code</label>
          </div>         
        </div>
      </div>
      <div class="controls">
        <input type="text" id="country" class="floatLabel" name="country">
        <label for="country">Country</label>
      </div>
  </div>
  <!--  Details -->
  <div class="form-group">
    <h2 class="heading">Details</h2>
    <div class="grid">
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
        <input type="date" id="arrive" class="floatLabel" name="arrive" value="<?php echo date('Y-m-d'); ?>">
        <label for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Arrive</label>
      </div>      
    </div>
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
        <input type="date" id="depart" class="floatLabel" name="depart" value="<?php echo date('Y-m-d'); ?>" />
        <label for="depart" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Depart</label>
      </div>      
    </div>
      </div>
      <div class="grid">
    <div class="col-1-3 col-1-3-sm">
      <div class="controls">
        <i class="fa fa-sort"></i>
        <select class="floatLabel">
          <option value="blank"></option>
          <option value="1">1</option>
          <option value="2" selected>2</option>
          <option value="3">3</option>
        </select>
        <label for="fruit"><i class="fa fa-male"></i>&nbsp;&nbsp;People</label>
      </div>      
    </div>
    <div class="col-1-3 col-1-3-sm">
    <div class="controls">
      <i class="fa fa-sort"></i>
      <select class="floatLabel">
        <option value="blank"></option>
        <option value="deluxe" selected>With Bathroom</option>
        <option value="Zuri-zimmer">Without Bathroom</option>
      </select>
      <label for="fruit">Room</label>
     </div>     
    </div>

    <div class="col-1-3 col-1-3-sm">
    <div class="controls">
      <i class="fa fa-sort"></i>
      <select class="floatLabel">
        <option value="blank"></option>
        <option value="single-bed">Zweibett</option>
        <option value="double-bed" selected>Doppelbett</option>
      </select>
      <label for="fruit">Bedding</label>
     </div>     
    </div>
      
     </div>
      <div class="grid">
        <p class="info-text">Please describe your needs e.g. Extra beds, children's cots</p>
        <br>
        <div class="controls">
          <textarea name="comments" class="floatLabel" id="comments"></textarea>
          <label for="comments">Comments</label>
          </div>
            <button type="submit" value="Submit" class="col-1-4">Submit</button>
      </div>  
  </div> <!-- /.form-group -->
</form>

<?php
(function($){
  function floatLabel(inputType){
    $(inputType).each(function(){
      var $this = $(this);
      // on focus add cladd active to label
      $this.focus(function(){
        $this.next().addClass("active");
      });
      //on blur check field and remove class if needed
      $this.blur(function(){
        if($this.val() === '' || $this.val() === 'blank'){
          $this.next().removeClass();
        }
      });
    });
  }
  // just add a class of "floatLabel to the input field!"
  floatLabel(".floatLabel");
})(jQuery);

?>