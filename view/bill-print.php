<?php
 require_once('../config/database.php'); 
  $oId=$_GET['id'];
  //echo $oId;
  $sql="SELECT * FROM `billing_details` WHERE `order_id` ='$oId'";
  $result = mysqli_query($link,$sql);
  $row  = mysqli_fetch_array($result, MYSQLI_BOTH);
   if(!$row){
    echo "Error while fetching data";
   }
   
   $sql1="SELECT * FROM `show_ticket_booking` WHERE `booking_id` ='$oId'";
  $result1 = mysqli_query($link,$sql1);
     $res  = mysqli_fetch_array($result1, MYSQLI_BOTH);
     if(!$res) {
      echo "Error while fetching data";
     }
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Reflections Media:: Print</title>
  <link href="../lib/css/style.css" rel="stylesheet"/>
  <link href="../lib/css/header.css" rel="stylesheet"/>
  <link href="../lib/css/footer.css" rel="stylesheet"/>
  <link href="../lib/css/bootstrap.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
.buttonClass{
	position:fixed;
	right:0px;
	border:1px solid #00253f;
	color:#00253f;
	padding:5px 10px;
	margin:5px;	
}
.buttonClass:hover{
	text-decoration:none;
	background:#00253f !important;
	color:#fff;	
}
.gap{
	top:60px;
}
</style>
<body>
<a href="javascript:window.print();" class="buttonClass">Print</a>
<a href="index.php" class="buttonClass gap">Back to site</a>
  <div class="container-fluid print margin-top-20">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
            <div class="logo">
              <a href="../index.php">
                <img src="../media/img/logo_home.png" alt="" title="">
              </a>
            </div>
        </div>
        <div class="col-md-6">
          <h3 class="headtitle"><b>REFLECTIONS MEDIA PRIVATE LIMITED</b> </h3>
           <p>Plot no.:1 Shah Industrial Estate, Fun Republic Lane<br>
           Andheri West, Mumbai-400 058, India <br>
           Phone No: 912226337465<br>
           Eail: support@reflectionsmedia.in<br>
           Web:www.reflectionsmedia.in<br>
           GSTIN: 27AADCR9148NIZO</p>
        </div>
      </div>
      <hr>
      <h2 class="subhead">E-TICKET</h2>
      <hr>
      <div class="table_row">
        <table class="table">
          <tr style="border: 0px !important;">
            <td width="50%" style="text-align: right;border-top: 0px !important;">
                Play Name:
            </td>
            <td width="50%" style="text-align: left;border-top: 0px !important;font-weight: normal;">
            <?php echo $res['play_name'];?>
            </td>
          </tr>
          <tr style="border: 0px !important;">
            <td width="50%" style="text-align: right;border-top: 0px !important;">
                No. of Guest: 
            </td>
            <td width="50%" style="text-align: left;border-top: 0px !important;font-weight: normal;">
            <?php echo $res['no_of_guest']; ?>
            </td>
          </tr>
          <tr style="border: 0px !important;">
            <td width="50%" style="text-align: right;border-top: 0px !important;">
                Ticket Type:
            </td>
            <td width="50%" style="text-align: left;border-top: 0px !important;font-weight: normal;">
            <?php echo $res['ticket_type']; ?>
            </td>
          </tr>
          <tr style="border: 0px !important;">
            <td width="50%" style="text-align: right;border-top: 0px !important;">
                Show Date & Time: 
            </td>
            <td width="50%" style="text-align: left;border-top: 0px !important;font-weight: normal;">
            <?php echo  $res['show_date'].'&nbsp;'.$res['show_time']?>
            </td>
          </tr>
          <tr style="border: 0px !important;">
            <td width="50%" style="text-align: right;border-top: 0px !important;">
                SAC: 
            </td>
            <td width="50%" style="text-align: left;border-top: 0px !important;font-weight: normal;">994579</td>
          </tr>
        </table>
      </div>
      <hr>
      <div class="col-md-12">
        <div class="col-md-4 col-xs-4">
          <h4><b>TICKET NUMBER</b></h4>
          <p><?php echo $res['transaction_Id'];?></p>
        </div>
        <div class="col-md-4 col-xs-4">
          <h4><b>BOOKING ID</b></h4>
          <p><?php echo $res['booking_id'];?></p>
        </div>
          <div class="col-md-4 col-xs-4"> <img src="../media/img/qrCode.jpg" style="height:50px" alt="BARCODE" class="img-responsive"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <hr>
          <h4 class="text-center"><b>PAID AMOUNT : &#8377;<?php echo $res['amout_pay']; ?></b></h4>
        </div>
      </div>
      <hr>
      <div class="text-center">
        <div>CGST (9%) : <?php $val=($res['amout_pay'] * 9)/118; echo number_format((float)$val, 2, '.', ''); ?><div>
         <div>SGST (9%) : <?php $val=($res['amout_pay'] * 9)/118; echo number_format((float)$val, 2, '.', ''); ?></div>
        </table>
      </div>
      <hr>
      <div class="col-md-12 text-left">
        <div><b>Booked From</b>: <?php echo $row['billing_email'];?></div>
        <div><b>Payment Mode</b>: <?php echo $row['payment_mode'];?></div>
        <div><b>Booked on</b>: <?php echo $row['trans_date'];?></div>
      </div>
      <div class="row">
        <div class="col-md-12">
        <hr>
         <div style="margin-top: 10px"><h5 ><b>Thanks for choosing REFLECTION, have a pleasent experience</b></h5></div>
         <div  class="margin-top-20">
          <h4><b>TERMS AND CONDITIONS</b></h4>
          <p class="text-justify margin-top-20">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
        </div>
      </div>
      </div>
      <hr>
      <div class="col-md-12 text-left">
        <div class="col-md-4 ">
          <h4><b>TICKET NUMBER</b></h4>
          <p><?php echo $res['transaction_Id'];?></p>
        </div>
        <div class="col-md-4">
          <h4><b>BOOKING ID</b></h4>
          <p><?php echo $res['booking_id'];?></p>
        </div>
          <div class="col-md-4 col-xs-4"> <img src="../media/img/qrCode.jpg" style="height:50px" alt="BARCODE" class="img-responsive"></div>
      </div> 
      <div class="row">
        <div class="col-md-12">  
          <hr>
          <h4 class="text-center"><b>PAID AMOUNT : &#8377;<?php echo $res['amout_pay']; ?></b></h4>
        </div>
      </div>
      <hr>
      <div class="col-md-12 text-left">
        <div><b>Booked From</b>: <?php echo $row['billing_email'];?></div>
        <div><b>Payment Mode</b>: <?php echo $row['payment_mode'];?></div>
        <div><b>Booked on</b>: <?php echo $row['trans_date'];?></div>
      </div>
    </div>
  </div>
</body>
</html>

