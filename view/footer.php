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

<?php session_unset(); ?>