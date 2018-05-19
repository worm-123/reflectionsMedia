<?php 
require_once('../config/database.php');
require_once('header-threatre.php');

?>
<div class="container-fluid">
	<div class="container"> 
		<div class="col-md-12 margin-top-20">
			<p class="navigationTxt"><span>REFLECTIONS THEATER CAFE</span> SELECT A DATE</p>
		</div>
	</div>
<div class="container">
<div class="" id="thumbs3">
        <div class="inner Rounded_Rectangle">
            <ul>
                <li>
                    <a href="#">
                    	<span class="calenderTxt">2 DEC. 2017<br/>SATURDAY</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    	<span class="calenderTxt">2 DEC. 2017<br/>SATURDAY</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    	<span class="calenderTxt">2 DEC. 2017<br/>SATURDAY</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    	<span class="calenderTxt">2 DEC. 2017<br/>SATURDAY</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    	<span class="calenderTxt">2 DEC. 2017<br/>SATURDAY</span>
                    </a>
                </li>
                <li>
                   <a href="#">
                    	<span class="calenderTxt">2 DEC. 2017<br/>SATURDAY</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    	<span class="calenderTxt">2 DEC. 2017<br/>SATURDAY</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    	<span class="calenderTxt">2 DEC. 2017<br/>SATURDAY</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    	<span class="calenderTxt">2 DEC. 2017<br/>SATURDAY</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    	<span class="calenderTxt">2 DEC. 2017<br/>SATURDAY</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    	<span class="calenderTxt">2 DEC. 2017<br/>SATURDAY</span>
                    </a>
                </li>
                 <li>
                    <a href="#">
                    	<span class="calenderTxt">2 DEC. 2017<br/>SATURDAY</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    	<span class="calenderTxt">2 DEC. 2017<br/>SATURDAY</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    	<span class="calenderTxt">2 DEC. 2017<br/>SATURDAY</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    	<span class="calenderTxt">2 DEC. 2017<br/>SATURDAY</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    	<span class="calenderTxt">2 DEC. 2017<br/>SATURDAY</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    	<span class="calenderTxt">2 DEC. 2017<br/>SATURDAY</span>
                    </a>
                </li>

            </ul>
        </div>
     </div> 
</div>

</div>

<div class="container-fluid">
	<div class="container">
	<?php 
	$sql="select * from theatre_cafe";
	$loginQuery=mysqli_query($link, $sql);
	while($row = mysqli_fetch_array($loginQuery, MYSQLI_ASSOC)){
	?>

	  <div class="well margin-top-10">
	      <div class="media">
	      	<a class="pull-left" href="#">
	    		<img class="media-object" src="../media/img/<?php echo $row['small_img']; ?>">
	  		</a>
	  		<div class="media-body">
	  			<div class="col-md-12">
	  				<div class="row">
		  				<div class="col-md-4 noPadding head">
		    				<p class="media-heading"><strong>PLAY : <?php echo $row['play_name']; ?></strong></p>
		    				<p><?php echo $row['duration']?></p>
		    				<p><strong>SHOW TIME</strong>: <?php echo $row['time']?></p>
		    			</div>
		    			<div class="col-md-5 noPadding head">
		    				<p><strong>DIRECTOR</strong>: <?php echo $row['director'] ?></p>
		    				<p><strong>STARRING</strong>: <?php echo $row['starring']?></p>
		    				<p><strong>PLAY BY:</strong> <?php echo $row['play_by']?></p>
		    			</div>
		    			<div class="col-md-3 noPadding head">
		    				<p class="text-right pull-left">
			    				<span class="pull-left">
			    				<small class="priceTxt"><strong>&#x20B9;<?php echo $row['price']?></strong></small><br/>
			    				<small class="">(Inc. all taxes)</small></span>
			    				
			    				<a href="theatre-cafe-show-booking.php?id=<?php echo base64_encode($row['id']) ?>" class="btn button pull-right">BOOK NOW</a>
		    				</p>
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
		    			</div>

	    			</div>
	    			<div class="seprator"></div>
	    		</div>
	          <p><?php echo $row['description']; ?></p>
	       </div>
	    </div>
	</div>
	<?php 
	}
	 ?>
	</div>
</div>
<link href="../lib/1/thumbnail-slider.css" rel="stylesheet" type="text/css" />
<script src="../lib/1/thumbnail-slider.js" type="text/javascript"></script>
<?php require_once('footer.php');?>
