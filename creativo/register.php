<?php
require_once('connect.php');

$response = array();

if(isset($_POST["name"],$_POST["mobile"],$_POST["email"],$_POST["password"])){
	$name =$_POST["name"];
	$mobile = $_POST["mobile"];
	$email = $_POST["email"];
	$password = $_POST["password"];
}else{
	$response["result"] = RESULT_FALSE;
	$response["message"] = "Some information was leaked";
	encode($response,true);
}

$sql = "insert into user(name,mobile,email,password)values('$name','$mobile','$email','$password')";
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
