<?php
require_once('connect.php');

$response = array();

if(isset($_POST['customer_id'])){

$customer_id = $_POST['customer_id'];

$sql = "select cart_id,product_id,quantity,date_added from sa_cart where customer_id = $customer_id;";
$result = mysqli_query($connection,$sql);
if($result){
  $response["result"] = true;
  $response["message"] = MESSAGE_SUCCESS;
  $response["data"] = array();
  while ($data = mysqli_fetch_assoc($result)) {
	  $product_id = $data["product_id"];
	  $sql = "select price from sa_product where product_id = $product_id;".
"select name,description from sa_product_description where product_id = $product_id;".
"select price as discount from sa_product_discount where product_id = $product_id";


if(mysqli_multi_query($connection,$sql)){
if($result1 = mysqli_store_result($connection)){
  $response["result"] = true;
  $response["message"] = MESSAGE_SUCCESS;
  $data["product"] = array();
for($i=0;$i<3;$i++){
$product = mysqli_fetch_assoc($result1);
	switch($i){
		case 0:
			$data["product"]["price"] = $product["price"];
		break;
		case 1:
		$data["product"]["name"] = $product["name"];
		//$response["data"]["product"]["description"] = html_entity_decode($product["description"]);
		break;
		case 2:
		if($product["discount"] == null){
			$data["product"]["discount"] = $data["product"]["price"];
		}else{
		$data["product"]["discount"] = $product["discount"];
		}
		break;
	}
		if(mysqli_more_results($connection)){
			mysqli_next_result($connection);
				$result1 = mysqli_store_result($connection);		
		}
}
   // $data["description"] = html_entity_decode($data["description"]);
  }
else{
  $response["result"] = false;
  $response["message"] = mysqli_error($connection);
}} else{
	  $response["result"] = false;
	  $response["message"] = mysqli_error($connection);
}

	array_push($response["data"],$data);
	} 
  }
}
else{
  $response["result"] = false;
  $response["message"] = "Some information was leaked ..";
}

encode($response,true);
?>