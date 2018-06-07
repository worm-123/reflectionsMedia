
Conversation opened. 1 read message.


Skip to content
Using Gmail with screen readers
rajeev.ranjan1088@gmail.com 

Move to Inbox More 
4 of about 70
 
Fwd: SMS API (php code attached, xml and http APIs are under PUSH SMS section ) 
Inbox
x 

Rajeev Ranjan
AttachmentsMay 12
to me 

---------- Forwarded message ----------
From: Rajan Kumar <rajaninc111@gmail.com>
Date: Sat, May 12, 2018 at 2:21 PM
Subject: SMS API (php code attached, xml and http APIs are under PUSH SMS section )
To: Rajeev Ranjan <rajeev.ranjan1088@gmail.com>


url: sms.reflectionsmedia.in
admin login username: Reflections
admin login password: Mumbai@123

Attachments area
	
Click here to Reply or Forward
5.08 GB (33%) of 15 GB used
Manage
Terms - Privacy
Last account activity: in 2 days
Details


<?php

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