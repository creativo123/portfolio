<?php
require_once('connect.php');

$response = array();

if(isset($_POST["password"],$_POST["email"])){
	$user_name = $_POST["email"];
	$password = $_POST["password"];
}else{
	$response["result"] = RESULT_FALSE;
	$response["message"] = "Some information was leaked";
	encode($response,true);
}

$sql = "select password,mobile from user where email = '$user_name';";
$result = mysqli_query($connection,$sql);
if($result){
	$data = mysqli_fetch_assoc($result);
	if($data && $data["password"] == $password){
		$response["result"] = RESULT_TRUE;
		$response["message"] = "SUCCESS";	
		$response["mobile"] = $data["mobile"];		
	}else{
		$response["success"] = false;
		$response["result"] = RESULT_TRUE;
		$response["message"] = "WRONG CREDENTIALS";
	}
}else{
	$response["result"] = RESULT_TRUE;
	$response["message"] = mysqli_error($connection);
}

encode($response,true);
?>