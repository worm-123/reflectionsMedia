<?php
 require_once('../config/database.php'); 

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="../lib/css/style.css" rel="stylesheet"/>
	<link href="../lib/css/header.css" rel="stylesheet"/>
	<link href="../lib/css/footer.css" rel="stylesheet"/>
	<link href="../lib/css/bootstrap.min.css" rel="stylesheet">
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

<?php require_once('sign_in_up.php'); ?>
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
									<a href="../index.php">
										<img src="../media/img/theater.png" alt="" title="">
									</a>
								</div>
			                </div>
			                <div id="navbar" class="navbar-collapse collapse menuCsRes">
			                	<ul class="topBtn nav navbar-nav pull-right">
			                		<li class=""><a href="hotDeals.php"><span class="topTxt">HOT DEALS</span></a></li>
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
			                                	<a href="editProfile.php" class="" style="display: inline-block;">Edit Profile</a>
											</li>
											<li>
			                                <span class="profileImg"><i class="glyphicon glyphicon-print"></i></span>
			                                	
			                                	<a href="printTkt.php" class="" style="display: inline-block;">Print Ticket</a>
											</li>
											<li>
			                                <span class="profileImg"><i class="glyphicon glyphicon-th-list"></i></span><a href="booking_history.php" class="" style="display: inline-block;">Booking History</a>
											</li>
											<li>
			                                <span class="profileImg"><i class="glyphicon glyphicon-log-out"></i></span><a href="signout.php" class="" style="display: inline-block;">Sign Out</a>
											</li>
			                            </ul>
			                        </li>
			                        <?php }?>
			                    </ul>
			                    <ul class="nav navbar-nav reslics pull-right">
			                        <li class="active dropdown">
			                        	<a href="#" ss="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT </a>
			                        	<ul class="dropdown-menu">
			                                <li><a href="aboutUs.php">About Reflection</a></li>
			                                <li><a href="community.php">Key Personnel </a></li>
			                                

			                            </ul>
			                        </li>
			                        <li class=" dropdown">
			                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOSPITALITY </a>
			                            <ul class="dropdown-menu">
			                                <li><a href="#">AMPHI THEATRE</a></li>
			                                <li><a href="theatreCafeOne.php"> REFLECTIONS THEATRE CAFE</a></li>
			                                <li><a href="banquets.php">BANQUETS</a></li>
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
			                        <li><a href="blog.php">BLOG</a></li>
			                        <li><a href="career.php">CAREERS</a></li>
			                        <li><a href="contact.php">CONTACT US</a></li>
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