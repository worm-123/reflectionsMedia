<?php
 require_once('../../config/database.php'); 
if(isset($_POST['submit'])){
    $play_id=$_REQUEST['play_id'];
    $fromDate=$_REQUEST['fromDate'];
    $toDate=$_REQUEST['toDate'];
    $video=$_FILES["video"]["name"];
    $folder="../../media/video/";

    $mydate=getdate(date("U"));
    $dateFormated="$mydate[mday] $mydate[month], $mydate[year] $mydate[weekday]";

    if($video!="") {
       move_uploaded_file($_FILES["video"]["tmp_name"] , "$folder".$video);

        $sql ="UPDATE `theatre_cafe` SET `video`='$video', `uploadedDate`='$dateFormated',`fromDate`='$fromDate', `toDate`='$toDate' WHERE id='$play_id'";
    }else{
        $sql ="UPDATE `theatre_cafe` SET `uploadedDate`='$dateFormated',`fromDate`='$fromDate', `toDate`='$toDate' WHERE id='$play_id'";
    }
    

  $insert=mysqli_query($link, $sql);

  if($insert) {
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
    <div id="wrapper">
    <?php require_once('header.php'); ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Trailer Video</h1>
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
                                <form role="form" method="post" enctype="multipart/form-data">
                                
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Select Play Name</label>
                                            <select name="play_id" class="form-control">
                                            <?php 
                                                $sql="select * from theatre_cafe";
                                                $loginQuery=mysqli_query($link, $sql);
                                                while($row = mysqli_fetch_array($loginQuery, MYSQLI_ASSOC)){
                                            ?>
                                                <option value="<?php echo $row['id']?>"><?php echo $row['play_name'] ?></option>
                                            <?php } ?>
                                            </select>
                                        </div> 
                                         <div class="form-group">
                                            <label>Video</label>
                                            <input type="file" name="video">
                                        </div>
                                         <div class="form-group">
                                            <label>From Date</label>
                                            <input type="date" name="fromDate">
                                        </div>
                                        <div class="form-group">
                                            <label>To Date</label>
                                            <input type="date" name="toDate">
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
