<?php 
require_once('../config/database.php'); 
    $email=$_COOKIE['username'];
    $email=base64_decode($_COOKIE['username']);
    $sql="select * from `signup` where `email`='$email'";
    $loginQuery=mysqli_query($link, $sql);
    $row = mysqli_fetch_array($loginQuery, MYSQLI_ASSOC);       

    if(isset($_POST["updateInfo"])){
           $mobile=$_REQUEST['mobile'];
           $sql ="UPDATE `signup` SET `mobile`='$mobile' WHERE `email`='$email'";
           $insert=mysqli_query($link, $sql);
           if($insert) {
              $msg= "Updated Successfully";
             header('Location: '.$_SERVER['PHP_SELF']);
            } else {
              $msg=  "!!! Try Again";
            }
        }

require_once('header-threatre.php');
?>
<div class="container edit_profile">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
           <div class="header">
              <p class="navigationTxt text-center"><span class="border margin-top-10">EDIT USER PROFILE</span></p>
            <hr class="horzontal_line">
            </div>
            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <?php @$msg ?>
                    <label class="control-label col-sm-4" for="email">Upload profile picture:</label>
                    <div class="col-sm-8 pl-0">
                        <!-- <input type="file" class="form-control" id="email"> -->

                        <div class="input-group" style="background: #fff; border;border-top-left-radius: 0;    border-bottom-left-radius: 0;">
                            <input type="file" id="file" class="form-control browse" style="opacity: 0">
                            <label for="file" class="input-group-addon">Browse</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="pwd">Update Mobile No:</label>
                    <div class="col-sm-8 pl-0">
                        <input type="number" name="mobile" class="form-control" id="pwd" value="<?php echo $row['mobile'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="pwd">Update Email Id:</label>
                    <div class="col-sm-8 pl-0">
                        <input type="email" class="form-control"   name="emailId" id="pwd"  value="<?php echo $row['email']; ?>" readonly="readonly">
                        <small># Register email ID Can't be changed.</small>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-4">
                        <input type="submit" class="btn button" name="updateInfo" value="UPDATE">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- <div class="row mt-35">
        <div class="col-sm-4 col-sm-offset-4">
            <form class="form-horizontal" action="/action_page.php">
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Enter OTP:</label>
                    <div class="col-sm-8 pl-0">
                        <input type="text" class="form-control" id="email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-4">
                        <button type="submit" class="btn button">UPDATE PROFILE</button>
                    </div>
                </div>
            </form>
        </div>
    </div> -->

</div>

<link rel="stylesheet" href="../lib/css/style.css" type="text/css">
<link href="../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../lib/1/thumbnail-slider.css" rel="stylesheet" type="text/css" />
<script src="../lib/1/thumbnail-slider.js" type="text/javascript"></script>
<?php require_once('footer.php');?>