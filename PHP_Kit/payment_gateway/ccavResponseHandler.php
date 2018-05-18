<?php include('Crypto.php');
include('../../config/database.php');
?>
<?php

	error_reporting(0);
	
	$workingKey='D273B2825AE252EF3A2D65034D9D5057';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	echo "<center>";

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==3)	$order_status=$information[1];
		
		if($i==0)	$order_id=$information[1];
	}

	if($order_status==="Success")
	{
		echo "<br>Thank you for shopping with us. Your credit card has been charged and your transaction is successful. We will be shipping your order to you soon.";
		print_r($_POST);
		
	}
	else if($order_status==="Aborted")
	{
		echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
	
	}
	else if($order_status==="Failure")
	{
		echo "<br>Thank you for shopping with us.However,the transaction has been declined.";
	}
	else
	{
		//echo "<br>Security Error. Illegal access detected";
	
	}

	echo "<br><br>";

	echo "<table cellspacing=4 cellpadding=4>";
	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
	    	echo '<tr><td>'.$information[0].'</td><td>'.urldecode($information[1]).'</td></tr>';
	    	if($i === 1) $tracking_id=urldecode($information[1]);
	    	$bill_info[$i]=urldecode($information[1]);
	}

	echo "</table><br>";
	echo "</center>";
	
	$sql="UPDATE `show_ticket_booking` SET `transaction_Id`='$tracking_id',`booking_status`='1',`checkIn_status`='0' WHERE booking_id = '$order_id'";
	$paymentQuery= mysqli_query($link, $sql);
	if($paymentQuery){
		echo "Query updated";
		$updated=1;
		//header("location:../../view/billPrint.php?id=$order_id");
	}else{
		echo "Not updated query!";
	}
	
	// redirection with insert data
	if($updated === 1){
	   $sql1="INSERT INTO `billing_details`(`id`, `order_id`, `tracking_id`, `payment_mode`, `card_name`, `status_message`, `currency`, `amount`, `billing_name`, `billing_address`, `billing_zip`, `billing_country`, `billing_tel`, `billing_email`, `billing_notes`, `trans_date`) VALUES ('','$order_id','$tracking_id','$bill_info[5]','$bill_info[6]','$bill_info[8]','$bill_info[9]','$bill_info[10]','$bill_info[11]','$bill_info[12]','$bill_info[15]','$bill_info[16]','$bill_info[17]','$bill_info[18]','$bill_info[19]','$bill_info[40]')";
	   
	    $insert=mysqli_query($link, $sql1);
	    if($insert){
	    	header("location:../../view/billPrint.php?id=$order_id");
	    }else{
	    echo "Error while inserting data into database";
	    }
		
	}else{
	 echo "Error while redirection the page";
	}
?>
