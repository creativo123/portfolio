<?php
require_once('connect.php');

$response = array();

if(isset($_POST["product_id"])){
$product_id = $_POST['product_id'];
}
else
{
$response["result"] = false;
$response["message"] = "Some Information was leaked !!";
encode($response,true);
}
$sql = "select image from sa_product_image where product_id = $product_id;";
//echo($sql);
$result = mysqli_query($connection,$sql);
if($result){
  $response["result"] = true;
  $response["message"] = MESSAGE_SUCCESS;
  $response["data"] = array();
  while ($data = mysqli_fetch_assoc($result)) {
	array_push($response["data"],$data);	
	}
  }else{
  $response["result"] = false;
  $response["message"] = mysqli_error($connection);
}

encode($response,true);
?>