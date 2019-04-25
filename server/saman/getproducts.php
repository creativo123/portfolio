<?php
require_once('connect.php');

$response = array();


if(isset($_POST["category_id"])){
  $category_id = $_POST["category_id"];
}else{
  $response["result"] = false;
  $response["message"] = "Some information was leaked";
  encode($response,true);
}

$sql = "select T1.product_id,image,T1.price,name,description,T4.price AS discount from sa_product T1 LEFT JOIN sa_product_discount T4 ON T1.product_id = T4.product_id LEFT JOIN sa_product_description T2 ON T1.product_id = T2.product_id LEFT JOIN sa_product_to_category T3 ON T1.product_id = T3.product_id  where category_id = $category_id;";
$result = mysqli_query($connection,$sql);
if($result){
  $response["result"] = true;
  $response["message"] = MESSAGE_SUCCESS;
  $response["data"] = array();
  while ($data = mysqli_fetch_assoc($result)) {
	  if($data["discount"] == null){
		$data["discount"] = 0.0;
	}
    $data["description"] = html_entity_decode($data["description"]);
    array_push($response["data"],$data);
  }
}else{
  $response["result"] = false;
  $response["message"] = mysqli_error($connection);
}

encode($response,true);
?>
