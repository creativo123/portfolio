<?php
require_once('connect.php');

$response = array();


if(isset($_POST["product_id"])){
  $product_id = $_POST["product_id"];
}else{
  $response["result"] = false;
  $response["message"] = "Some information was leaked";
  encode($response,true);
}

$sql = "select price from sa_product where product_id = $product_id;".
"select name,description from sa_product_description where product_id = $product_id;".
"select price as discount from sa_product_discount where product_id = $product_id";

if(mysqli_multi_query($connection,$sql)){
if($result = mysqli_store_result($connection)){
  $response["result"] = true;
  $response["message"] = MESSAGE_SUCCESS;
  $response["data"] = array();
for($i=0;$i<3;$i++){
$data = mysqli_fetch_assoc($result);
	switch($i){
		case 0:
			$response["data"]["price"] = $data["price"];
		break;
		case 1:
		$response["data"]["name"] = $data["name"];
		$response["data"]["description"] = html_entity_decode($data["description"]);
		break;
		case 2:
		if($data["discount"] == null){
			$response["data"]["discount"] = $response["data"]["price"];
		}else{
		$response["data"]["discount"] = $data["discount"];
		}
		break;
	}
		if(mysqli_more_results($connection)){
			mysqli_next_result($connection);
				$result = mysqli_store_result($connection);		
		}else{
			break;
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

encode($response,true);
?>
