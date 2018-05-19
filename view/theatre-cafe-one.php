<?php 
require_once('../config/database.php');
require_once('header-threatre.php');
?>
<div class="container">
    <div class='col-md-12'>
    <div class="header border">
    	<span class="nowPlaying "> NOW PLAYING</span>
	    <ul class="topBtnheaderVideo nav navbar-nav pull-right">
    		<li class=""><a href="#"><span class="topTxt">VIEW FOOD MENU</span></a></li>
    		<li class=""><a href="theatre-cafe-selecta-date.php"><span class="topTxt">GO FOR BOOKING</span></a></li>
        </ul>
    </div>
     <div id="thumbnail-slider">
        <div class="inner">
            <ul>
            <?php 
				$sql="select * from theatre_cafe";
				$loginQuery=mysqli_query($link, $sql);
				while($row = mysqli_fetch_array($loginQuery, MYSQLI_ASSOC)){
				?>
                <li>
                	<p class="PlayTxtVideo">PLAY:<?php echo $row['play_name']; ?></p>
                	<div class="">
                	<ul class="list-unstyled">
    					<li>
	               			<span class="glyphicon glyphicon-star"></span>
	                        <span class="glyphicon glyphicon-star"></span>
	                        <span class="glyphicon glyphicon-star"></span>
	                        <span class="glyphicon glyphicon-star"></span>
	                        <span class="glyphicon glyphicon-star-empty"></span>
        				</li>
        			</ul>
		            </div>
                    <div class="videoSection">
                    <video width="350" controls>
					  <source src="../media/video/<?php echo $row['video']; ?>" type="video/mp4">
					  <source src="../media/video/Tera_Zikr_Lyrics_Darshan_Raval.mp4" type="video/ogg">
					  Your browser does not support HTML5 video.
					</video>
					</div >
                    <a class="btn button" href="theatre-cafe-show-booking.php?id=<?php echo base64_encode($row['id']); ?>">BOOK NOW</a>
                </li>
            <?php } ?>
            </ul>
        </div>
     </div> 
     <hr></hr>                        
    </div>
</div>

<div class="container">
    <div class='col-md-12'>
    <div class="header border"><span class="nowPlaying"> COMMING SOON </span></div>
     <div class="" id="thumbs2">
        <div class="inner">
            <ul>
            <?php 
                $sql="select * from theatre_cafe";
                $loginQuery=mysqli_query($link, $sql);
                while($row = mysqli_fetch_array($loginQuery, MYSQLI_ASSOC)){
                ?>
                <li>
                    <p class="PlayTxtVideo">PLAY:<?php echo $row['play_name']; ?></p>
                    <div class="pull-left">
                    <ul class="list-unstyled">
                        <li>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                        </li>
                    </ul>
                    </div>
                    <div class="videoSection">
                    <video width="350" controls>
                      <source src="../media/video/<?php echo $row['video']; ?>" type="video/mp4">
                      <source src="../media/video/Tera_Zikr_Lyrics_Darshan_Raval.mp4" type="video/ogg">
                      Your browser does not support HTML5 video.
                    </video>
                    </div >
                    <a class="btn button" href="theatre-cafe-show-booking.php?id=<?php echo base64_encode($row['id']); ?>">BOOK NOW</a>
                </li>
            <?php } ?>
            </ul>
        </div>
     </div>                         
    </div>
</div>
<link href="../lib/1/thumbnail-slider.css" rel="stylesheet" type="text/css" />
<script src="../lib/1/thumbnail-slider.js" type="text/javascript"></script>

<?php require_once('footer.php');?>