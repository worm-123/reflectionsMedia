<?php 
require_once('../config/database.php');
require_once('header_media.php');
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="container margin-top-10">
             <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="header">
                          <p class="navigationTxt text-center"><span class="border margin-top-10">HOT DEALS</span></p>
                        </div> 
                    </div>

                </div>
            <div class="row">
              <?php 
                $mydate=getdate(date("U"));
                $dateFormated="$mydate[mday] $mydate[month], $mydate[year] $mydate[weekday]";
                $sql="SELECT * FROM `hot_deals` ";//WHERE `uploadedDate`= '$dateFormated'

                $loginQuery=mysqli_query($link, $sql);
                while($row = mysqli_fetch_array($loginQuery, MYSQLI_ASSOC)){
              ?>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center margin-top-10">
                    <img src="../media/img/<?php echo $row['small_img'];?>">
                </div>

              <?php } ?>
               <div class="col-md-12 text-center"> <a href="theatreCafeSelectaDate.php" class="btn button">BOOK A TABLE</a></div>
            </div>
        </div>
<style type="text/css">
.col-md-3:nth-child(4n+1){ clear: left;}
</style>
<?php require_once('footer.php');?>