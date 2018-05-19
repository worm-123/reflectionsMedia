

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

<!--End of Tawk.to Script-->

<!-- Sign In-->
<!-- Sign Up-->
 <!-- Forgot Password -->

<!-- Modal -->
<!-- Sign In -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SIGN IN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
		  <h3>Express log in with</h3>
		  <p><a href="../facebook/1353/fbconfig.php" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute."><img src="../media/img/loginFB.png"></a>
        <hr class="horzontal_line">
        <div class="circular-small text-center">
          <b> OR </b>
        </div>
      </p>
		  <form action="" method="post">
        <div class="formControl">
    		  <p><input type="email" name="emailId" class="form-control" placeholder="Enter your email Id"></p>
    		  <p><input type="password" name="password" class="form-control" placeholder="Enter your password"></p>
    		  <p><input type="submit" name="signIn" class="btn button" value="SIGN IN"></p>
        </div>
      </form>
		  <p><a href="#forgotPassword" data-toggle="modal" data-dismiss="modal" aria-label="Close">FORGOT PASSWORD?</a></p>
		  <p>Still not connected? <a href="#signUp" data-toggle="modal" data-dismiss="modal" aria-label="Close">SIGN UP</a></p>
	  </div>
    </div>
  </div>
</div>


<!-- Sign UP -->
<div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SIGN UP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      <h3>Express log in with</h3>
      <p><a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute."><img src="../media/img/loginFB.png"></a>
        <hr class="horzontal_line">
        <div class="circular-small text-center">
          <b> OR </b>
        </div>
      </p>

      <form action="" method="post">
        <div class="formControl">
          <p><input type="email" name="emailId" class="form-control" placeholder="Enter your email Id"  required="required" ></p>
          <p><input type="number" name="mobile" class="form-control" placeholder="10 digit mobile no."  required="required" ></p>
          <p><input type="password" name="password" class="form-control" placeholder="Enter your password"  required="required" ></p>
          <p><input type="submit" name="signUp" class="btn button" value="SIGN UP"></p>
        </div>
      </form>
      <p>Already Connected? <a href="#myModal" data-toggle="modal" data-dismiss="modal" aria-label="Close">SIGN IN</a></p>
    </div>
    </div>
  </div>
</div>



<!-- forget password (email)-->
<div class="modal fade" id="forgotPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">FORGOT PASSWORD?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      <h5>Please enter your email address or mobile number & we will send a confirmation code</h5>

      <form action="" method="post">
        <div class="formControl">
          <p><input type="email" name="emailId" class="form-control" placeholder="Enter your email Id"  required="required" ></p>
          <p>
            <hr class="horzontal_line">
            <div class="circular-small text-center">
              <b> OR </b>
            </div>
          </p>
          <p><input type="number" name="mobile" class="form-control" placeholder="10 digit mobile no." ></p>
          <p><input type="submit" name="next" class="btn button" value="NEXT"></p>
        </div>
      </form>
    </div>
    </div>
  </div>
</div>


<!-- forget password (password)-->
<div class="modal fade" id="forgotPasswordEmail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">FORGOT PASSWORD?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      <p></p>
      <h5>Please enter confirmation code that has been set to your email address. </h3>

      <form action="" method="post">
        <div class="formControl">
        <p><input type="text" name="enterOTP" class="form-control" placeholder="Enter OTP" required="required" ></p>
          <p><input type="email" name="email" class="form-control" placeholder="Enter your email Id" required="required" ></p>
           <p><input type="password" name="password" class="form-control" placeholder="Enter your password"  required="required" ></p>
            <p><input type="password" name="password1" class="form-control" placeholder="Enter your password"  required="required" ></p>
          <p><input type="submit" name="forgotPassword" class="btn button" value="RESET PASSWORD"></p>
        </div>
      </form>
    </div>
    </div>
  </div>
</div><section class="container-fluid gradient">
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
										<img src="../media/img/logo_home.png" alt="" title="">
									</a>
								</div>
			                </div>
			                <div id="navbar" class="navbar-collapse collapse menuCsRes">
			                	<ul class="topBtn nav navbar-nav pull-right">
			                		<li class=""><a href="hot-deals.php"><span class="topTxt">HOT DEALS</span></a></li>
			                					                		<li class=""><a href="#myModal" data-toggle="modal"><span class="topTxt">SIGN IN</span></a></li>
			                					                    </ul>
			                    <ul class="nav navbar-nav reslics pull-right">
			                        <li class="active dropdown">
			                        	<a href="#" ss="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT</a>
			                        	<ul class="dropdown-menu">
			                                <li><a href="about-us.php">About Reflection</a></li>
			                                <li><a href="key-personal.php">Key Personnel </a></li>
			                                

			                            </ul>
			                        </li>
			                        <li class=" dropdown">
			                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOSPITALITY </a>
			                            <ul class="dropdown-menu">
			                                <li><a href="#">AMPHI THEATRE</a></li>
			                                <li><a href="theatre-cafe-one.php"> REFLECTIONS THEATRE CAFE</a></li>
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
			                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EVENTS</a>
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
</section><div class="container-fluid">
    <div class="row">
        <div class="col-md-12 noPadding">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="../media/img/aboutUs.png" alt="First slide">
                    </div>
                   
                </div>
               <!--  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span>
                </a> -->
            </div>
            <div class="main-text hidden-xs">
                <div class="col-md-12 text-center">
                    <h1>IT’S GOOD TO KNOW REFLECTIONS MEDIA</h1>
                    <h2>Spend a couple of minutes to read about us</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="header">
          <p class="navigationTxt text-center"><span class="border margin-top-10">About refections media</span></p>
            <div class="row text-blue">
                    <p>Reflections Media is a conglomerate launched by Aanand Mahendroo the producer/director behind the popular TV shows Idhar Udhar, Isi Bahane, Indradhanush, Dekh Bhai Dekh and the feature film Rang Rasiya.  In the posh western suburb of Andheri (W) a film studio is being converted to a cultural hub. Our vision is to keep art, culture and tradition alive.</p>
		    <p>There is a production house producing feature films, TV shows and web series. The art centre will comprise a Broadway style theatre (a black box), theatre cafe, art galleries, and restaurants.</p>
                    <p>Reflections Theatre Cafe is a 100-seater lounge style cafe for cosy, intimate gatherings. It is the ideal performing platform for solo music performances, stand up shows, small plays or musical performances. Gourmet food and carefully curated performances ensure a unique invigorating experience for the viewer.</p>
		    <p>In the pipeline is India's first Black Box. Black Box consists of a large pillar-less space (approximately 10,000 square feet) with a height of 45 feet plus retractable stage and seats. Philharmonic level acoustics and sound systems make it the perfect audio-visual experience. Whether you are looking to stage musicals or award functions, introduce new products or corporate launches, or host exhibitions and parties this is the perfect venue.</p>
                <hr class="horzontal_line">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="header">
          <p class="navigationTxt text-center"><span class="border margin-top-10">Recent Offerings</span></p>
            <div class="row text-blue">
                    <p>Our in-house theatrical production company Naatak Du Jour is staging plays, musicals and comic revues.</p>
                    <p><strong>Andhon Ka Hathi</strong> is a political satire (Playwright: Late Sharad Joshi) dealing with corruption.  Written roughly five decades ago, the theme strikes an instantaneous chord with audiences even today.</p>
                    <p><strong>Wah Nawab Wah</strong> (Under Production) written by playwright Late Shri Sharad Joshi is a political satire about the levels politicians can go to retain power. It will be staged as a musical for the first time with a large cast against a vast canvas.</p>
                    <p><strong>Vyom Wellness</strong> believes each individual has the ability to bring about a positive transformation in their life. Spiritual fulfilment is attainable when the mind, heart, body and soul are holistically aligned. Start the journey towards living in a state of intuitive awareness and divine bliss.</p>
                    <p><strong>Kids Paradise</strong> conducts workshops, hold exhibitions and stage plays for children of all ages. Children flourish when they are provided with the correct stimulation. The idea behind this enterprise is to create a congenial atmosphere where children can express themselves fearlessly.</p>
                    <p align="center">To know more mail us at am@reflectionsmedia.in or call us at +91 22 26337465</p>
            </div>
        </div>
    </div>
</div>




<section class="container-fluid">
	<div class="row">
		<div class="container">
			<div class="footerBtm text-center ">
				<ul>
					<li class="footormenu"><a href="career.php" title="Careers"> Careers</a><span class="rightline">|</span></li>
					<li class="footormenu"><a href="group-partners.php" title="Group Partners">  Group Partners </a><span class="rightline">|</span></li>
					<li class="footormenu"><a href="Affiliates.php" title="Affiliates"> Affiliates</a><span class="rightline">|</span></li>
					<li class="footormenu"><a href="investors.php" title="Investors"> Investors</a><span class="rightline">|</span></li>
					<li class="footormenu"><a href="#" title="Community"> Community</a><span class="rightline">|</span></li>
					<li class="footormenu"><a href="privacy-policy.php" title="Privacy Policy"> Privacy Policy</a><span class="rightline">|</span></li>
					<li class="footormenu"><a href="turms-of-use.php" title="Terms of Use"> Terms of Use</a><span class="rightline">|</span></li>
					<li class="footormenu"><a href="corporate-informations.php" title="Corporate Information"> Corporate Information</a><span class="rightline">|</span></li>
					<li class="footormenu"><a href="privacy-and-cookies.php" title="Privacy & Cookie Statement"> Privacy & Cookie Statement</a><span class="rightline">|</span></li>
					<li class="footormenu"><a href="sitemap.php" title="Sitemap"> Sitemap</a><span class="rightline">|</span></li>
					<li class="footormenu"><a href="cookies-statement.php" title="Cookie Statement"> Cookie Statement</a><span class="rightline">|</span></li>
					<li class="footormenu"><a href="faq.php" title="FAQs"> FAQs</a></li>
				</ul>
			</div>
			<div class="social_icon text-center">
				<a href="#" class="socialLink"><span class="fb"></span></a>
				<a href="#" class="socialLink"><span class="tw"></span></a>
				<a href="#" class="socialLink"><span class="ig"></span></a>
				<a href="#" class="socialLink"><span class="yt"></span></a>
				<a href="#" class="socialLink"><span class="sc"></span></a>
				<a href="#" class="socialLink"><span class="li"></span></a>
				<p>&copy; 2017. Reflections Media Pvt. Ltd. All rights reserved</p>
			</div>
		</div>
	</div>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="../lib/js/bootstrap.min.js"></script>

<script>$(document).ready(function(){ 
	
});</script>;

</body>
</html>

