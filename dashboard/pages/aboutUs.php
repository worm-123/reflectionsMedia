<?php
 require_once('../../config/database.php'); 
if(!!@$_GET['editId']){
 $getEditid= base64_decode(@$_GET['editId']);
 $sql="SELECT * FROM `about_us` WHERE `id`='$getEditid'";
 $loginQuery=mysqli_query($link, $sql);
 $row = mysqli_fetch_array($loginQuery, MYSQLI_ASSOC);
}

if(isset($_POST['submit'])){
    $heading=$_REQUEST['heading'];
    $description=$_REQUEST['description'];
    $description=addslashes($description);
    

    $mydate=getdate(date("U"));
    $dateFormated="$mydate[mday] $mydate[month], $mydate[year] $mydate[weekday]";
    if(!!@$_GET['editId']){
        $sql= "UPDATE `about_us` SET `heading`='$heading',`description`='$description',`uploadedDate`='$dateFormated' WHERE `id`='$getEditid'";
         
    }else{
        $sql ="INSERT INTO `about_us`(`id`, `heading`, `description`, `uploadedDate`) VALUES ('', '$heading', '$description', '$dateFormated')";
    }

  $insert=mysqli_query($link, $sql);

  if($insert) {
    header('location: allAbout.php');
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
                    <h1 class="page-header"> About Reflections</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            About Us<a href="allAbout.php" class="btn btn-primary"> View All Shows</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                               
                                    <div class="col-lg-6">
                                    <form role="form" method="post" enctype="multipart/form-data"> 
                                        <h3 class="text-center">CONTENT SETUP</h3>
                                        <div class="form-group">
                                            <label>Heading</label>
                                            <input class="form-control" value="<?php echo @$row['heading'];?>" name="heading" placeholder="Enter heading" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Discription</label>
                                            <textarea class="form-control" name="description" rows="3"><?php echo @$row['description'];?></textarea>
                                        </div>
                                        
                                        <input type="submit" name="submit" class="btn btn-primary">
                                        <button type="reset" class="btn btn-danger">Reset Button</button>
                                    </form>
                                    </div>
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
