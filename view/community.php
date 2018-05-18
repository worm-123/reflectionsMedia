<?php 
require_once('../config/database.php');
require_once('header_media.php');
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="container margin-top-10">
             <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="header">
                          <p class="navigationTxt text-center"><span class="border margin-top-10">know reflections' management people</span></p>
                          <hr class="horzontal_line">
                        </div> 
                    </div>

                </div>
            <div class="row">
              <?php 
                $sql="select * from management_team";
                $loginQuery=mysqli_query($link, $sql);
                while($row = mysqli_fetch_array($loginQuery, MYSQL_ASSOC)){
              ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb30 margin-top-10">
                    <div class="tutor-block clearfix">
                        <div class="tutor-img">
                            <img src="../media/img/<?php echo $row['profile_img']; ?>">
                        </div>
                        <div class="tutor-content">
                            <h5 class="tutor-title"><?php echo $row['name']; ?></h5>
                            <span class="tutor-designation"><?php echo $row['designation']; ?></span>
                            <p><span class="btn button" data-toggle="collapse" data-target="#<?php echo $row['id'] ?>">  Biography </span></p>
                            <p id="<?php echo $row['id'] ?>" class="collapse text-justify"><?php echo $row['description']; ?></p>
                        </div>
                    </div>
                    <div class="social-media social_icon">
                    	<span><a href="#" class="socialLink"><span class="fb"></span></a></span>
			<span><a href="#" class="socialLink"><span class="tw"></span></a></span>
			<span><a href="#" class="socialLink"><span class="ig"></span></a></span>
			<span><a href="#" class="socialLink"><span class="yt"></span></a></span>
			<span><a href="#" class="socialLink"><span class="li"></span></a></span>
			
                    </div>
                </div>

              <?php } ?>
                
            </div>
        </div>
<style type="text/css">
.col-md-3:nth-child(4n+1){ clear: left;}
.tutor-content { text-align: center; }
.tutor-title { margin-bottom: 5px; text-transform: uppercase; font-weight: bold; font-family:"Montserrat-semiBold";}
.tutor-designation { color: #ff3c2e; display: block; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 15px; font-size: 12px; }
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
<?php require_once('footer.php');?>