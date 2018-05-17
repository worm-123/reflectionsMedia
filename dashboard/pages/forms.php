<?php
 require_once('../../config/database.php'); 
if(!!@$_GET['editId']){
 $getEditid= base64_decode(@$_GET['editId']);
 $sql="SELECT  * FROM  `theatre_cafe` WHERE `id`='$getEditid'";
 $loginQuery=mysqli_query($link, $sql);
 $row = mysqli_fetch_array($loginQuery, MYSQLI_ASSOC);
}

if(isset($_POST['submit'])){
    $play_name=$_REQUEST['play_name'];
    $duration=$_REQUEST['duration'];
    $director=$_REQUEST['director'];
    $starring=$_REQUEST['starring'];
    $play_by=$_REQUEST['play_by'];
    $description=$_REQUEST['description'];
    $description=preg_replace("/[^a-zA-Z]/", " ", $description);
    $time=$_REQUEST['time'];
    $price=$_REQUEST['price'];
    $price_food=$_REQUEST['price_indianLiquor'];
    $price_indianLiquor=$_REQUEST['price_indianLiquor'];
    $price_foreignLiquor=$_REQUEST['price_foreignLiquor'];
    $big_img=$_FILES["big_img"]["name"];
    $small_img=$_FILES["small_img"]["name"];
    $folder="../../media/img/";
    if($big_img!="") {
        move_uploaded_file($_FILES["big_img"]["tmp_name"] , "$folder".$big_img);
    }else{
        $big_img=$row['big_img'];
    }
    if($small_img!="") {
    move_uploaded_file($_FILES["small_img"]["tmp_name"] , "$folder".$small_img);
    }else{
        $small_img= $row['small_img'];
    }

    $mydate=getdate(date("U"));
    $dateFormated="$mydate[mday] $mydate[month], $mydate[year] $mydate[weekday]";
    if(!!@$_GET['editId']){
        $sql= "UPDATE `theatre_cafe` SET `big_img`='$big_img',`small_img`='$small_img',`price`='$price',`price_food`='$price_food',`price_indianLiquor`='$price_indianLiquor',`price_foreignLiquor`='$price_foreignLiquor',`play_name`='$play_name',`duration`='$duration',`time`='$time',`director`='$director',`starring`='$starring',`play_by`='$play_by',`description`='$description',`uploadedDate`='$dateFormated' WHERE `id`='$getEditid'";
         
    }else{
        $sql ="INSERT INTO `theatre_cafe`(`id`, `big_img`, `small_img`, `price`, `price_food`, `price_indianLiquor`, `price_foreignLiquor`, `play_name`, `duration`, `time`, `director`, `starring`, `play_by`, `description`, `video`, `uploadedDate`) VALUES ('','$big_img','$small_img','$price','$price_food','$price_indianLiquor','$price_foreignLiquor','$play_name','$duration', '$time','$director','$starring','$play_by','$description','', '$dateFormated')";
    }

  $insert=mysqli_query($link, $sql);

  if($insert) {
    header('Location: '.$_SERVER['PHP_SELF']);
     $msg= "Saved Successfully";
  } else {
    $msg= "Not Saved! Try Again";
  }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ADMIN</title>
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
if(!!@$msg){
echo '<div class="bs-example">
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>'.$msg.'!</strong>.
    </div>
</div>';
}
?>
    <div id="wrapper">
    <?php require_once('header.php'); ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Theatre Show</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements <a href="allShows.php" class="btn btn-primary"> View All Shows</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" method="post" enctype="multipart/form-data">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Play Name</label>
                                            <input class="form-control" value="<?php echo @$row['play_name'];?>" name="play_name" placeholder="Enter play name">
                                        </div>
                                        <div class="form-group">
                                            <label>Duration</label>
                                            <input class="form-control" value="<?php echo @$row['duration'];?>" name="duration" placeholder="Enter duration">
                                        </div>
                                        <div class="form-group">
                                            <label>Time</label>
                                            <input class="form-control"  value="<?php echo @$row['time'];?>" name="time" placeholder="Enter Time">
                                        </div>
                                        <div class="form-group">
                                            <label>Director</label>
                                            <input class="form-control" value="<?php echo @$row['director'];?>" name="director" placeholder="Enter director">
                                        </div>
                                        <div class="form-group">
                                            <label>Stars</label>
                                            <input class="form-control" value="<?php echo @$row['starring'];?>" name="starring" placeholder="Enter starts">
                                        </div>
                                        <div class="form-group">
                                            <label>Play By</label>
                                            <input class="form-control" value="<?php echo @$row['play_by'];?>" name="play_by" placeholder="Enter play by">
                                        </div>
                                        <div class="form-group">
                                            <label>Discription</label>
                                            <textarea class="form-control" name="description" rows="3"><?php echo @$row['description'];?></textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6"> 
                                        <div class="form-group">
                                            <label>price</label>
                                            <input class="form-control" value="<?php echo @$row['price'];?>" name="price" placeholder="Enter price">
                                            <p class="help-block">Example &#8377;399</p>
                                        </div>
                                        <div class="form-group">
                                            <label>price with food</label>
                                            <input class="form-control" value="<?php echo @$row['price_food'];?>" name="price_food" placeholder="Enter price with food">
                                        </div>
                                        <div class="form-group">
                                           <label>price with indian liquor</label>
                                            <input class="form-control" value="<?php echo @$row['price_indianLiquor'];?>"  name="price_indianLiquor" placeholder="Enter price with indian liquor">
                                        </div>
                                        <div class="form-group">
                                           <label>price with foreign liquor</label>
                                            <input class="form-control"  value="<?php echo @$row['price_foreignLiquor'];?>" name="price_foreignLiquor" placeholder="Enter price with foreign liquor">
                                        </div>
                                        <div class="form-group">
                                            <label>Big Image</label>
                                            <input type="file" value="<?php echo @$row['big_img'];?>" name="big_img">
                                        </div>
                                        <div class="form-group">
                                            <label>Small Image</label>
                                            <input type="file" value="<?php echo @$row['small_img'];?>" name="small_img">
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-primary">
                                        <button type="reset" class="btn btn-danger">Reset Button</button>
                                    </div>

                                </form>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
