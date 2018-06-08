
<?php
//url: sms.reflectionsmedia.in
//admin login username: Reflections
//admin login password: Mumbai@123
if(isset($_POST['submit']))

	$username="success";
	$Password="654321"

	//Getting form data

	$sender='BSHSMS';
	$number='7530959768';//$_POST['number'];
	//$message=$_POST['message'];
	$priority='ndnd';
	$stype='normal';
	$bal="+56Rs";
   $message=urlencode("Welcome your balance is:'".$bal."'");

  $var="user=".$username."&pass=".$Password."&sender=".$sender."&phone=".$number."&text=".$message."&priority=".$priority."&stype=".$stype."";


  	 	$curl=curl_init('http://bhashsms.com/api/sendmsg.php?'.$var);
   	 	curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
   	 	$response=curl_exec($curl);
   	 	curl_close($curl);

       echo $response; 


?>