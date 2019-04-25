<?php
require_once('connect.php');

$response = array();

if(isset($_POST["cart_id"])){
	$cart_id = $_POST['cart_id'];
}
else
{
	$response["result"] = false;
	$response["message"] = "Some Information was leaked !!";
	encode($response,true);
}

$sql = "delete from sa_cart where cart_id = $cart_id;";

$result = mysqli_query($connection,$sql);

if($result){
		$response["result"] = true;
 		$response["message"] = MESSAGE_SUCCESS;
		
}else{
		$response["result"] = false;
		$response["message"] = mysqli_error($connection);
}
encode($response,true);
?>