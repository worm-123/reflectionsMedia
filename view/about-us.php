<?php 
require_once('../config/database.php');
require_once('header-media.php');
?>
<div class="container-fluid">
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
                    <h1>IT'S GOOD TO KNOW REFLECTIONS MEDIA</h1>
                    <h2>Spend a couple of minutes to read about us</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <?php 
      $sql="select * from about_us";
      $loginQuery=mysqli_query($link, $sql);
      while($row = mysqli_fetch_array($loginQuery, MYSQLI_ASSOC)){
    ?>
    <div class="container">

        <div class="header">
          <p class="navigationTxt text-center"><span class="border margin-top-10"><?php echo $row['heading'] ?></span></p>
            <div class="row text-blue">
                    <p><?php echo $row['description']?></p>
                <hr class="horzontal_line">
            </div>
        </div>
    </div>
  <?php } ?>
</div>



<?php require_once('footer.php');?>