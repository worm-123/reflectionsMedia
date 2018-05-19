<!-- Sign In-->
<?php 
session_start();
if(isset($_POST["signIn"])){
  $email=$_REQUEST['emailId'];
  $password=$_REQUEST['password'];
  $password=md5($password);
  $sql= "SELECT * FROM `signup` WHERE `email`='".$email."' and `password`='".$password."' ";

  if($loginQuery=mysqli_query($link, $sql)){
    $num_row = mysqli_num_rows($loginQuery);
    $login = mysqli_fetch_array($loginQuery, MYSQLI_BOTH);
     if($num_row >0){
      $email= base64_encode($login['email']);
      setcookie("username", $email);
      $urlPath=$_SERVER['PHP_SELF'];
      $queryString=$_SERVER['QUERY_STRING'];
      header('Location: '.$urlPath.'?'.$queryString);
      }else{
        echo "0";
      }
  }else{
    echo "Error";
  }
}

?>
<!-- Sign Up-->
<?php 
if(isset($_POST["signUp"])){
   $email=$_REQUEST['emailId'];
   $mobile=$_REQUEST['mobile'];
   $password=$_REQUEST['password'];
   $password=md5($password);
  // "INSERT INTO signup(id, email, mobile, password, status) VALUES ('', '$email', '$mobile', '$password', '1')";
  $sql ="INSERT INTO `signup`(`id`, `password`, `email`, `mobile`, `status`) VALUES (' ', '$password', '$email', '$mobile', '1')";

  $insert=mysqli_query($link, $sql);

  if($insert) {
    $msg="Saved Successfully";
  } else {
    $msg= "Not Saved! Try Again";
  }

}
?>
<?php
if(isset($_POST["next"])){
  $email=$_REQUEST['emailId'];
  $to      = $email;
  $subject = 'Reflections: OTP for reseting password.';
  $message = 'Your requested OTP is given below:-'."\r\n";
  $headers = 'From: support@reflections.in' . "\r\n" .
      'Reply-To: upport@reflections.com' . "\r\n" .
      'X-Mailer: PHP/' . phpversion();

      $result = mysqli_query($link,"SELECT * FROM `signup` WHERE email='$email'");
      $count  = mysqli_num_rows($result);
      if($count>0) {
        // generate OTP
        $otp = rand(100000,999999);
        $message .=$otp;
         setcookie("otp_genrate", $otp);
        //$_SESSION['otp_genrate']=$otp;
        // Send OTP
         $sent= mail($to, $subject, $message, $headers);
        if($sent){
        
          $msg1 = "OTP Sent to your email. Please Check";
          $mail_status =1;
          $_SESSION['mail_status']=$mail_status;
          }else{
          $msg1="Something went wrong";
          $mail_status =0;
        }
        if($mail_status == 1) {
          $result = mysqli_query($link,"INSERT INTO otp_expiry(otp,is_expired,create_at) VALUES ('" . $otp . "', 0, '" . date("Y-m-d H:i:s"). "')");
          $current_id = mysqli_insert_id($link);
          if(!empty($current_id)) {
            $msg="1";
          }
        }
      } else {
        $msg = "Email not exists!";
      }
}
?>
 <!-- Forgot Password -->
<?php 
if(isset($_POST["forgotPassword"])){
   $email=$_REQUEST['email'];
   $getOTP=$_REQUEST['enterOTP'];
   $password=$_REQUEST['password'];
   $password1=$_REQUEST['password1'];

   $sql="select * from `signup` where `email`= '$email'";
   $loginQuery=mysqli_query($link, $sql);
   $row = mysqli_fetch_array($loginQuery, MYSQLI_ASSOC);
   if($row){
	
    if($_COOKIE['otp_genrate'] == $getOTP){
      if($password === $password1){
         $password=md5($password);
          $sql ="UPDATE `signup` SET `password`='$password' WHERE `email`='$email'";
          $insert=mysqli_query($link, $sql);
        if($insert) {
          $msg="Password Changed Successfully";
        } else {
          $msg= "!!! Try Again";
        }
      }else{
        $msg ="Password doesn't match";
      }
     }else{
     	$msg="OTP not valid.".$_SESSION['otp_genrate'];
     }
   }else{
       $msg ="Email doesn't exist";
   }

  //$sql ="UPDATE `signup` SET `password`=[value-2],`email`=[value-3],`mobile`=[value-4],`status`=[value-5] WHERE 1"
  //$sql ="INSERT INTO `signup`(`id`, `password`, `email`, `mobile`, `status`) VALUES (' ', '$password', '$email', '$mobile', '1')";

  // $insert=mysqli_query($link, $sql);

  // if($insert) {
  //   $msg="Saved Successfully";
  // } else {
  //   $msg= "Not Saved! Try Again";
  // }

}
?>

<!-- Modal -->
<?php
if(@$msg){
echo '<div class="bs-example">
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>'.$msg.'!</strong>.
    </div>
</div>';
}
?>
<!-- Sign In -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SIGN IN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
		  <h3>Express log in with</h3>
		  <p><a href="../facebook/1353/fbconfig.php" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute."><img src="../media/img/loginFB.png"></a>
        <hr class="horzontal_line">
        <div class="circular-small text-center">
          <b> OR </b>
        </div>
      </p>
		  <form action="" method="post">
        <div class="formControl">
    		  <p><input type="email" name="emailId" class="form-control" placeholder="Enter your email Id"></p>
    		  <p><input type="password" name="password" class="form-control" placeholder="Enter your password"></p>
    		  <p><input type="submit" name="signIn" class="btn button" value="SIGN IN"></p>
        </div>
      </form>
		  <p><a href="#forgotPassword" data-toggle="modal" data-dismiss="modal" aria-label="Close">FORGOT PASSWORD?</a></p>
		  <p>Still not connected? <a href="#signUp" data-toggle="modal" data-dismiss="modal" aria-label="Close">SIGN UP</a></p>
	  </div>
    </div>
  </div>
</div>


<!-- Sign UP -->
<div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SIGN UP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      <h3>Express log in with</h3>
      <p><a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute."><img src="../media/img/loginFB.png"></a>
        <hr class="horzontal_line">
        <div class="circular-small text-center">
          <b> OR </b>
        </div>
      </p>

      <form action="" method="post">
        <div class="formControl">
          <p><input type="email" name="emailId" class="form-control" placeholder="Enter your email Id"  required="required" ></p>
          <p><input type="number" name="mobile" class="form-control" placeholder="10 digit mobile no."  required="required" ></p>
          <p><input type="password" name="password" class="form-control" placeholder="Enter your password"  required="required" ></p>
          <p><input type="submit" name="signUp" class="btn button" value="SIGN UP"></p>
        </div>
      </form>
      <p>Already Connected? <a href="#myModal" data-toggle="modal" data-dismiss="modal" aria-label="Close">SIGN IN</a></p>
    </div>
    </div>
  </div>
</div>



<!-- forget password (email)-->
<div class="modal fade" id="forgotPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">FORGOT PASSWORD?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      <h5>Please enter your email address or mobile number & we will send a confirmation code</h5>

      <form action="" method="post">
        <div class="formControl">
          <p><input type="email" name="emailId" class="form-control" placeholder="Enter your email Id"  required="required" ></p>
          <p>
            <hr class="horzontal_line">
            <div class="circular-small text-center">
              <b> OR </b>
            </div>
          </p>
          <p><input type="number" name="mobile" class="form-control" placeholder="10 digit mobile no." ></p>
          <p><input type="submit" name="next" class="btn button" value="NEXT"></p>
        </div>
      </form>
    </div>
    </div>
  </div>
</div>


<!-- forget password (password)-->
<div class="modal fade" id="forgotPasswordEmail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">FORGOT PASSWORD?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      <p><?php echo @$msg1; echo $_SESSION['otp_genrate'] ?></p>
      <h5>Please enter confirmation code that has been set to your email address. </h3>

      <form action="" method="post">
        <div class="formControl">
        <p><input type="text" name="enterOTP" class="form-control" placeholder="Enter OTP" required="required" ></p>
          <p><input type="email" name="email" class="form-control" placeholder="Enter your email Id" required="required" ></p>
           <p><input type="password" name="password" class="form-control" placeholder="Enter your password"  required="required" ></p>
            <p><input type="password" name="password1" class="form-control" placeholder="Enter your password"  required="required" ></p>
          <p><input type="submit" name="forgotPassword" class="btn button" value="RESET PASSWORD"></p>
        </div>
      </form>
    </div>
    </div>
  </div>
</div>