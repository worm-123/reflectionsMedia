<?php
 require_once('../../config/database.php'); 

if(isset($_POST["submit"])){
    $play_name=$_REQUEST['play_name'];
    $duration=$_REQUEST['duration'];
    $director=$_REQUEST['director'];
    $starring=$_REQUEST['starring'];
    $play_by=$_REQUEST['play_by'];
    $description=$_REQUEST['description'];
    $description=preg_replace("/[^a-zA-Z]/", "", $description);
    $time=$_REQUEST['time'];
    $price=$_REQUEST['price'];
    $price_food=$_REQUEST['price_indianLiquor'];
    $price_indianLiquor=$_REQUEST['price_indianLiquor'];
    $price_foreignLiquor=$_REQUEST['price_foreignLiquor'];
    $big_img=$_FILES["big_img"]["name"];
    $small_img=$_FILES["small_img"]["name"];
    $folder="../../media/img/";
    move_uploaded_file($_FILES["big_img"]["tmp_name"] , "$folder".$big_img);
    move_uploaded_file($_FILES["small_img"]["tmp_name"] , "$folder".$small_img);


  $sql ="INSERT INTO `theatre_cafe`(`id`, `big_img`, `small_img`, `price`, `price_food`, `price_indianLiquor`, `price_foreignLiquor`, `play_name`, `duration`, `time`, `director`, `starring`, `play_by`, `description`) VALUES ('','$big_img','$small_img)','$price','$price_food','$price_indianLiquor','$price_foreignLiquor','$play_name','$duration', '$time','$director','$starring','$play_by','$description')";

  $insert=mysqli_query($link, $sql);

  if($insert) {
    echo $msg="Saved Successfully";
  } else {
    echo $msg= "Not Saved! Try Again";
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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
    <?php require_once('header.php'); ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" method="POST" enctype="multipart/form-data">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Play Name</label>
                                            <input class="form-control" name="play_name" placeholder="Enter price">
                                        </div>
                                        <div class="form-group">
                                            <label>Duration</label>
                                            <input class="form-control" name="duration" placeholder="Enter price">
                                        </div>
                                        <div class="form-group">
                                            <label>Time</label>
                                            <input class="form-control" name="time" placeholder="Enter price">
                                        </div>
                                        <div class="form-group">
                                            <label>Director</label>
                                            <input class="form-control" name="director" placeholder="Enter price">
                                        </div>
                                        <div class="form-group">
                                            <label>Stars</label>
                                            <input class="form-control" name="starring" placeholder="Enter price">
                                        </div>
                                        <div class="form-group">
                                            <label>Play By</label>
                                            <input class="form-control" name="play_by" placeholder="Enter price">
                                        </div>
                                        <div class="form-group">
                                            <label>Discription</label>
                                            <textarea class="form-control" name="description" rows="3"></textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6"> 
                                        <div class="form-group">
                                            <label>price</label>
                                            <input class="form-control" name="price" placeholder="Enter price">
                                            <p class="help-block">Example &#8377;399</p>
                                        </div>
                                        <div class="form-group">
                                            <label>price with food</label>
                                            <input class="form-control" name="price_food" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                           <label>price with indian liquor</label>
                                            <input class="form-control" name="price_indianLiquor" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                           <label>price with foreign liquor</label>
                                            <input class="form-control" name="price_foreignLiquor" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>Big Image</label>
                                            <input type="file" name="big_img">
                                        </div>
                                        <div class="form-group">
                                            <label>Small Image</label>
                                            <input type="file" name="small_img">
                                        </div>
                                       
                                        <button type="submit" name="submit" class="btn btn-primary">Submit Button</button>
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
