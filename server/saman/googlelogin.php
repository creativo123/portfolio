<?php
require_once('connect.php');

$response = array();

if(isset($_POST["password"],$_POST["email"])){
	$user_name = $_POST["email"];
	$password = $_POST["password"];
}else{
	$response["result"] = false;
	$response["message"] = "Some information was leaked";
	encode($response,true);

}

$sql = "select password,firstname,lastname,customer_id,telephone from sa_customer where email = '$user_name';";
$result = mysqli_query($connection,$sql);
if($result){
	$data = mysqli_fetch_assoc($result);
	if($data){
		if($password == "googlepasswordlogin123"){
		$response["result"] = true;
		$response["message"] = "SUCCESS";
 		
		$customer_data = array();
		$customer_data["firstname"] = $data["firstname"];
		$customer_data["lastname"] = $data["lastname"];
		$customer_data["customer_id"] = $data["customer_id"];
		$customer_data["telephone"] = $data["telephone"];
		
		$response["data"] = $customer_data;
	}else{
		$response["result"] = true;
		$response["message"] = "W".$password;
}}else{
	$response["result"] = true;
		$response["message"] = "WRONG CREDENTIALS t".$password;
}
}else{
	$response["result"] = true;
	$response["message"] = mysqli_error($connection);
}

encode($response,true);
?> 
