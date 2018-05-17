<?php
 require_once('../../config/database.php'); 
if(!!@$_GET['editId']){
 $getName= base64_decode(@$_GET['editId']);
 $sql="SELECT  * FROM  `banquets_booking` WHERE `id`='$getName'";
 $loginQuery=mysqli_query($link, $sql);
 $row = mysqli_fetch_array($loginQuery, MYSQLI_ASSOC);
}

if(isset($_POST['submit'])){
    $banquets_name=$_REQUEST['banquets_name'];
    $description=$_REQUEST['description'];
    $description=preg_replace("/[^a-zA-Z]/", " ", $description);
    $hall=$_REQUEST['hall'];
    $decoration=$_REQUEST['decoration'];
    $veg_food=$_REQUEST['veg_food'];
    $nonveg_food=$_REQUEST['nonveg_food'];
    $indian_liquor=$_REQUEST['indian_liquor'];
    $imported_liquor=$_REQUEST['imported_liquor'];
    $big_img=$_FILES["big_img"]["name"];
    $folder="../../media/img/";
    if($big_img!="") {
        move_uploaded_file($_FILES["big_img"]["tmp_name"] , "$folder".$big_img);
    }else{
        $big_img=$row['big_img'];
    }


    $mydate=getdate(date("U"));
    $dateFormated="$mydate[mday] $mydate[month], $mydate[year] $mydate[weekday]";
    if(!!@$_GET['editId']){
        $sql= "UPDATE `banquets_booking` SET `description`='$description',`hall`='$hall',`decoration`='$decoration',`veg_food`='$veg_food',`nonveg_food`='$nonveg_food',`indian_liquor`='$indian_liquor',`imported_liquor`='$imported_liquor',`uploadDate`='$dateFormated',`big_img`='$big_img' WHERE `banquets_name`='$getName'";
         
    }else{
        $sql ="INSERT INTO `banquets_booking`(`id`, `banquets_name`, `description`, `hall`, `decoration`, `veg_food`, `nonveg_food`, `indian_liquor`, `imported_liquor`, `uploadDate`, `big_img`) VALUES ('','$banquets_name','$description','$hall','$decoration','$veg_food','$nonveg_food','$indian_liquor','$imported_liquor','$dateFormated','$big_img')";
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
                    <h1 class="page-header">Banquets Booking</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Banquets Booking Form Elements <a href="allBanquets.php" class="btn btn-primary"> View All Shows</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" method="post" enctype="multipart/form-data">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Banquets Name</label>
                                            <select name="banquets_name" class="form-control" >
                                                <option value="first"> Banquets Name 1</option>
                                                <option value="second"> Banquets Name 2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Hall</label>
                                            <input class="form-control" value="<?php echo @$row['hall'];?>" name="hall" placeholder="Enter price">
                                        </div>
                                        <div class="form-group">
                                            <label>Discription</label>
                                            <textarea class="form-control" name="description" rows="3"><?php echo @$row['description'];?></textarea>  
                                        </div>
                                        <div class="form-group">
                                            <label>Decoration</label>
                                            <input class="form-control" value="<?php echo @$row['decoration'];?>" name="decoration" placeholder="Enter price">
                                            <p class="help-block">Example &#8377;399</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Veg Food</label>
                                            <input class="form-control" value="<?php echo @$row['veg_food'];?>" name="  veg_food" placeholder="Enter price">
                                        </div>
                                        <div class="form-group">
                                            <label>Non-veg Food</label>
                                            <input class="form-control" value="<?php echo @$row['nonveg_food'];?>" name="  nonveg_food" placeholder="Enter price">
                                        </div>
                                        <div class="form-group">
                                           <label>Indian Liquor</label>
                                            <input class="form-control" value="<?php echo @$row['indian_liquor'];?>"  name="indian_liquor" placeholder="Enter Price">
                                        </div>
                                        <div class="form-group">
                                           <label>Imported Liquor</label>
                                            <input class="form-control"  value="<?php echo @$row['imported_liquor'];?>" name="  imported_liquor" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" value="<?php echo @$row['big_img'];?>" name="big_img">
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
