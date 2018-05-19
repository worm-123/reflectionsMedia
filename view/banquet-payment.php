<?php 

require_once('../config/database.php');
$request_body = file_get_contents('php://input');
$request_body = html_entity_decode($request_body);
$request_body = (array)json_decode($request_body);

//$request_body=html_entity_decode($request_body);
$amountToPay=$request_body["amountToPay"];
$date=$request_body['date'];
$noOfGuest=$request_body['noOfGuest'];
$banquetName=$request_body['banquetName'];
$ticketType=$request_body['ticketType'];
$time=$request_body['time'];
$decoration=$request_body['decoration'];
$hall=$request_body['hall'];
$userId=$request_body['userId'];
//booking-status by default 0 ==> on transaction success, sataus would be 1 & on failure -1
$booking_id = "RM".rand(10000000, 99999999);

$sql="INSERT INTO `show_banquet_booking`(`id`, `banquet_name`, `slot_time`, `booking_date`, `no_of_guest`, `ticket_type`, `amout_pay`, `booking_id`, `transaction_Id`, `booking_status`, `checkIn_status`, `decoration`, `hall`,`userId`) VALUES ('','$banquetName','$time','$date','$noOfGuest','$ticketType','$amountToPay','$booking_id','','0','','$decoration','$hall','$userId')";

$bookingQuery=mysqli_query($link, $sql);
$returnData = array();
if($bookingQuery){
	$returnData['booking_id'] = $booking_id;
	$returnData['status'] = 1;
}else{
	$returnData['message'] = 'Error While Saving records';
	$returnData['status'] = 0;
}
echo json_encode($returnData);
// $data = json_decode($request_body);
// //echo $data['playName'];
// //$returnArr=array('a','b');
// echo json_encode($data);
?>