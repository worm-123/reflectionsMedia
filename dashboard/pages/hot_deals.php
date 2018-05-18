<?php
 require_once('../../config/database.php'); 
if(!!@$_GET['editId']){
 $getEditid= base64_decode(@$_GET['editId']);
 $sql="SELECT  * FROM  `hot_deals` WHERE `id`='$getEditid'";
 $loginQuery=mysqli_query($link, $sql);
 $row = mysqli_fetch_array($loginQuery, MYSQLI_ASSOC);
}

if(isset($_POST['submit'])){
    $deals=$_REQUEST['deals'];
    $small_img=$_FILES["small_img"]["name"];
    $folder="../../media/img/";

    if($small_img!="") {
     move_uploaded_file($_FILES["small_img"]["tmp_name"] , "$folder".$small_img);
    }else{
        $small_img= $row['small_img'];
    }


    $mydate=getdate(date("U"));
    $dateFormated="$mydate[mday] $mydate[month], $mydate[year] $mydate[weekday]";
    if(!!@$_GET['editId']){
        $sql ="UPDATE `hot_deals` SET `deals`='$deals',`small_img`='$small_img',`uploadedDate`='$dateFormated' WHERE `id`='$getEditid'";
    }else{

        $sql ="INSERT INTO `hot_deals`(`id`, `deals`, `small_img`, `uploadedDate`) VALUES ('','$deals', '$small_img', '$dateFormated')";
    }

  $insert=mysqli_query($link, $sql);

  if($insert) {
     $urlPath=$_SERVER['PHP_SELF'];
      $queryString=$_SERVER['QUERY_STRING'];
      header('Location: '.$urlPath.'?'.$queryString);
    echo "Saved Successfully";
  } else {
    echo "Not Saved! Try Again";
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
                    <h1 class="page-header"> Hot Deals</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Hot Deals <a href="allHotDeals.php" class="btn btn-primary"> View All Hot Deals</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" method="post" enctype="multipart/form-data">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Deals Occasion</label>
                                            <input class="form-control" name="deals" placeholder="Enter deals" value="<?php echo @$row['deals']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Small Image</label>
                                            <input type="file" name="small_img">
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
