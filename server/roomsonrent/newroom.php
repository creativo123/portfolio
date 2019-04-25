<?php
require_once('connect.php');

$response = array();

if(isset($_POST["image"],$_POST["mobile"],$_POST["house-no"],$_POST["street"],$_POST["city"],$_POST["pincode"],$_POST["bhk"])){
 	$image = base64_decode($_POST["image"]);
	$mobile = $_POST["mobile"];
	$random = rand(10,99999);
	$url = "$mobile"."_$random".".png";
	file_put_contents("images/$url", $image, FILE_APPEND | LOCK_EX);
	$house_no = $_POST["house-no"];
	$street = $_POST["street"];
	$city = $_POST["city"];
	$pincode = $_POST["pincode"];
	$bhk = $_POST["bhk"];
}else{
	$response["result"] = RESULT_FALSE;
	$response["message"] = "Some information was leaked";
	encode($response,true);
}

$sql = "insert into rooms(user_id,url,house_no,street_name,city,pincode,bhk)values('$mobile','$url','$house_no','$street','$city',$pincode,$bhk); ";
$result = mysqli_query($connection,$sql);
if($result){
	$response["result"] = RESULT_TRUE;
	$response["message"] = MESSAGE_SUCCESS;
}else{
	$response["result"] = RESULT_FALSE;
	$response["message"] = mysqli_error($connection);
}

encode($response,true);
?>
