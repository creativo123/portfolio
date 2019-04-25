<?php
require_once('connect.php');

$response = array();

if(isset($_GET["image"],$_GET["mobile"],$_GET["house-no"],$_GET["street"],$_GET["city"],$_GET["pincode"])){
 	$image = base64_decode($_GET["image"]);
	$mobile = $_GET["mobile"];
	$random = rand(10,99999);
	$url = "$mobile"."_$random";
	file_put_contents("images/$url", $image, FILE_APPEND | LOCK_EX);
	$house_no = $_GET["house-no"];
	$street = $_GET["street"];
	$city = $_GET["city"];
	$pincode = $_GET["pincode"];
 
}else{
	$response["result"] = RESULT_FALSE;
	$response["message"] = "Some information was leaked";
	encode($response,true);
}

$sql = "insert into rooms(user_id,url,house_no,street_name,city,pincode)values('$mobile','$url','$house_no','$street','$city',$pincode); ";
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
