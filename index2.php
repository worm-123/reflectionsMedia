<?php 
require_once('config/database.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="lib/css/style.css" rel="stylesheet"/>
	<link href="lib/css/header.css" rel="stylesheet"/>
	<link href="lib/css/footer.css" rel="stylesheet"/>
	<link href="lib/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!--Start of Tawk.to Script-->

<script type="text/javascript">

var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();

(function(){

var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];

s1.async=true;

s1.src='https://embed.tawk.to/5a5c7f884b401e45400c1826/default';

s1.charset='UTF-8';

s1.setAttribute('crossorigin','*');

s0.parentNode.insertBefore(s1,s0);

})();

</script>

<?php require_once('view/sign-in-up.php'); ?>
<!--End of Tawk.to Script-->
<section class="container-fluid gradient">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="menu">
					<div class="navbar-wrapper">
				        <nav class="navbar">
			                <div class="navbar-header">
			                    <button type="button" class="resMenuCs navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			                    <span class="sr-only">Toggle navigation</span>
			                    <span class="icon-bar" style="border: 1px solid #00253f"></span>
			                    <span class="icon-bar" style="border: 1px solid #00253f"></span>
			                    <span class="icon-bar" style="border: 1px solid #00253f"></span>
			                    </button>
			                    <div class="logo">
									<a href="index.php">
										<img src="media/img/theater.png" alt="" title="">
									</a>
								</div>
			                </div>
			                <div id="navbar" class="navbar-collapse collapse menuCsRes">
			                	<ul class="topBtn nav navbar-nav pull-right">
			                		<li class=""><a href="hot-deals.php"><span class="topTxt">HOT DEALS</span></a></li>
			                		<?php 
			                		if(!isset($_COOKIE['username'])) {
			                		?>
			                		<li class=""><a href="#myModal" data-toggle="modal"><span class="topTxt">SIGN IN</span></a></li>
			                		<?php
			                		}else{
			                		?>
			                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>
			                        <?php $name=base64_decode($_COOKIE['username']);
			                        		echo substr($name,0,6);
			                        ?><span class="caret"></span></a>
			                            <ul class="dropdown-menu backGray">
			                                <li><div class="head_panel text-center">
													<span class="topTxt">Welcome back</span>
													<span class="topTxt"><?php echo substr($name,0,6);?></span>
												</div>
											</li>
			                                <li>
			                                <span class="profileImg"><i class="glyphicon glyphicon-user"></i></span>
			                                	<a href="edit-profile.php" class="" style="display: inline-block;">Edit Profile</a>
											</li>
											<li>
			                                <span class="profileImg"><i class="glyphicon glyphicon-print"></i></span>
			                                	
			                                	<a href="print-tkt.php" class="" style="display: inline-block;">Print Ticket</a>
											</li>
											<li>
			                                <span class="profileImg"><i class="glyphicon glyphicon-th-list"></i></span><a href="booking-history.php" class="" style="display: inline-block;">Booking History</a>
											</li>
											<li>
			                                <span class="profileImg"><i class="glyphicon glyphicon-log-out"></i></span><a href="view/signout.php" class="" style="display: inline-block;">Sign Out</a>
											</li>
			                            </ul>
			                        </li>
			                        <?php }?>
			                    </ul>
			                    <ul class="nav navbar-nav reslics pull-right">
			                        <li class="active dropdown">
			                        	<a href="#" ss="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT </a>
			                        	<ul class="dropdown-menu">
			                                <li><a href="view/about-us.php">About Reflections</a></li>
			                                <li><a href="view/key-personal.php">Key Personnel </a></li>
			                                

			                            </ul>
			                        </li>
			                        <li class=" dropdown">
			                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOSPITALITY </a>
			                            <ul class="dropdown-menu">
			                                <li><a href="#">AMPHI THEATRE</a></li>
			                                <li><a href="view/theatre-cafe-one.php"> REFLECTIONS THEATRE CAFE</a></li>
			                                <li><a href="view/banquets.php">BANQUETS</a></li>
			                                <li><a href="#">SPEAK EASY BAR</a></li>

			                            </ul>
			                        </li>
			                        <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ENTERTAINMENT </a>
			                            <ul class="dropdown-menu">
			                                <li><a href="#">View Managers</a></li>
			                                <li><a href="#">Add New</a></li>
			                            </ul>
			                        </li>
			                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EVENTS </a>
			                            <ul class="dropdown-menu">
			                                <li><a href="#">View Staff</a></li>
			                                <li><a href="#">Add New</a></li>
			                                <li><a href="#">Bulk Upload</a></li>
			                            </ul>
			                        </li>
			                        <li class=" down"><a href="#">COMMUNITY </a>
			                        </li>
			                        <li><a href="#">WORKSHOPS</a></li>
			                        <li><a href="view/blog.php">BLOG</a></li>
			                        <li><a href="view/career.php">CAREERS</a></li>
			                        <li><a href="view/contact.php">CONTACT US</a></li>
			                    </ul>
			                </div>
				        </nav>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
</section>

<div class="container-fluid">
	<div class="container">
		<?php 
			$sql="select * from theatre_cafe";
			$loginQuery=mysqli_query($link, $sql);
			$row = mysqli_fetch_array($loginQuery, MYSQLI_ASSOC);
			?>
		<div class="col-md-6 margin-top-10">
			<p class="navigationTxt"> <?php echo $row['play_name'];?></p>
			<input type="hidden" name="playName" id="playtxt" value="<?php echo $row['play_name']; ?>">
			<p class="text-justify"><?php echo $row['description']; ?></p>
			 <div id="myCarousel" class="carousel slide" data-ride="carousel">

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner">
		    <?php 
				while($row = mysqli_fetch_array($loginQuery, MYSQLI_ASSOC)){
			?>
		      <div class="item imageContainerSlider " >
		        <img src="media/img/<?php echo $row['big_img'] ?>" alt=" <?php echo $row['play_name'];?>" style="width:100%; margin-top: -265px;">
		        <a href="view/theatre-cafe-show-booking.php?id=<?php echo base64_encode($row['id']) ?>" class="btn button" style="position: absolute;left: 50%;z-index: 99999 !important;display: inline-block;bottom: 30px;     margin-left: -40px;">
		        BOOK NOW</a>
		      </div>
		    <?php } ?>
		    </div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
		</div>

		<div class="col-md-6 margin-top-10">
			<div class="row">
				<div class="back_mainMenu heightContainer">
					<a href="#">
						<div class="main_menu_one">
							<div class="entertainment"><span class="entmnt-mrgn">ENTERTAINMENT</span></div>
						</div>
					</a>
					<a href="view/reflection-hospitality.php">
						<div class="main_menu_two">
							<div class="hospitality"><span class="hsptlty-mrgn">HOSPITALITY</span></div>
						</div>
					</a>
					<a href="#">
						<div class="main_menu_three">
							<div class="events"><span class="evnt-mrgn">EVENTS</span></div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--- final bill submission-->
<div class="container-fluid">
	<div class="container">
	  <?php 
	    $sql="select * from inhouseproducts order by id asc";
	    $loginQuery=mysqli_query($link, $sql);
	    while($row = mysqli_fetch_array($loginQuery, MYSQLI_ASSOC)){
	  ?>
	    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb30 margin-top-10">
	        <div class="tutor-block clearfix">
	            <div class="tutor-img" >
	                <img src="media/img/<?php echo $row['logo']; ?>" height="100">
	            </div>
	            <div class="tutor-content">
	                <h5 class="tutor-designation"><?php echo $row['product_name']; ?></h5>
	                <!-- <span class="tutor-designation"><?php echo $row['designation']; ?></span> -->
	                <p class=" text-justify" style="height:100px; overflow:hidden;"><?php echo $row['description']; ?></p>
	                <p><span class="btn button" data-toggle="collapse" data-target="#<?php echo $row['id'] ?>">  See More </span></p>
	                <p id="<?php echo $row['id'] ?>" class="collapse text-justify"><?php echo $row['description']; ?></p>
	            </div>
	        </div>
	    </div>

	  <?php } ?>
                
    </div>
</div>

<section class="container-fluid">
	<div class="row">
		<div class="container">
			<div class="social_icon" style="margin:20px !important">
				<a href="" class="socialLink"><span class="fb"></span></a>
				<a href="" class="socialLink"><span class="tw"></span></a>
				<a href="" class="socialLink"><span class="ig"></span></a>
				<a href="" class="socialLink"><span class="yt"></span></a>
				<a href="" class="socialLink"><span class="sc"></span></a>
				<a href="" class="socialLink"><span class="li"></span></a>
				<p>&copy; 2017. Reflections Media Pvt. Ltd. All rights reserved</p>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript" src="lib/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="lib/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){ 
		$(".imageContainerSlider:nth-child(1)").addClass('active');
	});
</script>


<script>$(document).ready(function(){ 
<?php if(!empty($_SESSION['mail_status'])){?> 
var mail_status=<?php  echo $_SESSION['mail_status'];?>;
if(mail_status == 1){
	$('#forgotPasswordEmail').modal('show');
	sessionStorage.removeItem("mail_status");
}
<?php }?>	
});</script>;

</body>
</html>
<script>
	document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 85)) {
            return false;
        } else {
            return true;
        }
	};
</script>
<style type="text/css">
.col-md-3:nth-child(4n+1){ clear: left;}
.tutor-content { text-align: center; }
.tutor-title { margin-bottom: 5px; text-transform: uppercase; font-weight: bold; font-family:"Montserrat-semiBold";}
.tutor-designation { color: #ff3c2e; display: block; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 15px; font-size: 12px; font-weight: bold; }
.tutor-img img { width: 100%; margin-bottom: 5px; }
.social-media { background-color: #2222; padding: 12px; text-align: center; }
.social-media span { margin-right: 2px; font-size: 20px; font-family: "FontAwesome";}
.mb60{margin-bottom:60px;}
.mt30{margin-top:30px;}
.read-more-state {
  display: none;
}
.read-more-target {  opacity: 0;  max-height: 0;  font-size: 0;  transition: .25s ease;}
.read-more-state:checked ~ .read-more-wrap .read-more-target {  opacity: 1;  font-size: inherit;  max-height: 999em;}
.read-more-state ~ .read-more-trigger:before {  content: 'Show more';}
.read-more-state:checked ~ .read-more-trigger:before {  content: 'Show less';}
.read-more-trigger {  cursor: pointer;  display: inline-block;  padding: 0 .5em;  color: #666;  font-size: .9em;  line-height: 2;  border: 1px solid #ddd;  border-radius: .25em;}
</style>
<?php session_unset(); ?>
<script>
	document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 85)) {
            return false;
        } else {
            return true;
        }
	};
</script>