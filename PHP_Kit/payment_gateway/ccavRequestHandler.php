<html>
<head>
<title> Custom Form Kit </title>
</head>
<body>
<center>

<?php include('Crypto.php')?>
<?php 

	error_reporting(0);
	
	$merchant_data='164164';
	$working_key='D273B2825AE252EF3A2D65034D9D5057';//Shared by CCAVENUES
	$access_code='AVGC75FA81CD85CGDC';//Shared by CCAVENUES
	
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.urlencode($value).'&';
	}

	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.

?>
<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>

