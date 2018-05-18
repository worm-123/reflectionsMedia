<?php 
require_once('../config/database.php');
require_once('header_threatre.php');
?>

<div class="container edit_profile">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <h4 class="text-center">BOOKING HISTORY</h4>
            <hr class="horzontal_line">
            <div class="center text-blue text-center">
              <p>Booking ID: Some Id</p>
              <p>Booking ID: Some Id</p>
              <p>Booking ID: Some Id</p>
              <p>Booking ID: Some Id</p>
              <p>Booking ID: Some Id</p>
              <hr class="horzontal_line">
              <button type="submit" class="btn button"><span class="glyphicon glyphicon-chevron-left text-yellow"></span></button>
              <button type="submit" class="btn button"><span class="glyphicon glyphicon-chevron-right text-yellow"></button>
              <p class="mt-35">(Showing results for last 6 months)</p>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="../lib/css/style.css" type="text/css">
<link href="../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../lib/1/thumbnail-slider.css" rel="stylesheet" type="text/css" />
<script src="../lib/1/thumbnail-slider.js" type="text/javascript"></script>
<?php require_once('footer.php');?>