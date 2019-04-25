<?php
require_once('connect.php');

$response = array();

if(isset($_POST['customer_id'])){
$customer_id = $_POST['customer_id'];
}else{
	$response["result"] = false;
	$response["message"] = "Some information was leaked";
	encode($response,true);
 }
$sql = "select order_id from sa_order where customer_id = $customer_id;";
$result = mysqli_query($connection,$sql);
if($result){
  $response["result"] = true;
  $response["message"] = MESSAGE_SUCCESS;
  $response["data"] = array();
  while ($data = mysqli_fetch_assoc($result)) {
	 $id = $data["order_id"];
	 $sql_products = "select * from sa_order_product where order_id = $id;";
	 $result_product = mysqli_query($connection,$sql_products);
	 if($result_product){
		
	 while($data_result = mysqli_fetch_assoc($result_product)){	
	 array_push($response["data"],$data_result);	
	 } 
	 }else{

			$response["result"] = false;
  $response["message"] = mysqli_error($connection);
		 
	 }
	 }
  }
else{
  $response["result"] = false;
  $response["message"] = mysqli_error($connection);
}

encode($response,true);
?>