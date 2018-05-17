<?php
 require_once('../../config/database.php'); 
if(!!@$_GET['editId']){
 $getEditid= base64_decode(@$_GET['editId']);
 $sql="SELECT  * FROM  `blog` WHERE `id`='$getEditid'";
 $loginQuery=mysqli_query($link, $sql);
 $row = mysqli_fetch_array($loginQuery, MYSQLI_ASSOC);
}

if(isset($_POST['submit'])){
    $heading=$_REQUEST['heading'];
    $postedBy=$_REQUEST['postedBy'];
    $description=$_REQUEST['description'];
    $description=preg_replace("/[^a-zA-Z]/", " ", $description);
    $big_img=$_FILES["big_img"]["name"];
    $folder="../../media/img/";

    
    if($big_img!="") {

    move_uploaded_file($_FILES["big_img"]["tmp_name"] , "$folder".$big_img);

    } else {

    $big_img = $row['big_img'];

    }

    $mydate=getdate(date("U"));
    $dateFormated="$mydate[mday] $mydate[month], $mydate[year] $mydate[weekday]";
    if(!!@$_GET['editId']){
        $sql ="UPDATE `blog` SET `big_img`='$big_img',`heading`='$heading',`postedBy`='$postedBy',`description`='$description',`uploadedDate`='$dateFormated' WHERE `id`='$getEditid'";
    }else{
        $sql ="INSERT INTO `blog`(`id`, `big_img`, `heading`, `postedBy`, `description`, `uploadedDate`) VALUES ('','$big_img','$heading','$postedBy','$description', '$dateFormated')";
    }

  $insert=mysqli_query($link, $sql);

  if($insert) {
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
                    <h1 class="page-header"> Blog</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements <a href="allBlog.php" class="btn btn-primary"> View All blog</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" method="post" enctype="multipart/form-data">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Post Heading</label>
                                            <input class="form-control" value="<?php echo @$row['heading'] ?>" name="heading" placeholder="Enter price">
                                        </div>
                                        <div class="form-group">
                                            <label>Posted By</label>
                                            <input class="form-control" value="<?php echo @$row['postedBy'] ?>" name="postedBy" placeholder="Enter price">
                                        </div>
                                        <div class="form-group">
                                            <label>Discription</label>
                                            <textarea class="form-control" name="description" rows="3"><?php echo @$row['description'] ?></textarea>    
                                        </div>

                                        <div class="form-group">
                                            <label>Upload blog Image</label>
                                            <input type="file" name="big_img" >
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
