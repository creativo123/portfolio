<?php
require_once('connect.php');

$response = array();


if(isset($_POST["customer_id"]) && isset($_POST["product_id"]) && isset($_POST["quantity"]) ){
$customer_id = $_POST["customer_id"];
  $product_id = $_POST["product_id"];
  $quantity = $_POST["quantity"];

$ans = mysqli_query($connection,"Select customer_id,product_id,quantity from sa_cart where customer_id=$customer_id and product_id=$product_id ");
if(mysqli_num_rows($ans))
{

	$sql = "UPDATE sa_cart set quantity = quantity + $quantity where customer_id =$customer_id and product_id=$product_id;";
	$result = mysqli_query($connection,$sql);
	if($result){
  	$response["result"] = true;
  	$response["message"] = MESSAGE_SUCCESS;
}else{
  $response["result"] = false;
  $response["message"] = mysqli_error($connection);
}


}
else
{
$sql = "INSERT INTO sa_cart(customer_id,product_id,quantity,date_added) VALUES($customer_id,$product_id,$quantity, now() ) ";
$result = mysqli_query($connection,$sql);
if($result){
  $response["result"] = true;
  $response["message"] = MESSAGE_SUCCESS;
}else{
  $response["result"] = false;
  $response["message"] = mysqli_error($connection);
}

}

}else{
  $response["result"] = false;
  $response["message"] = "Some information was leaked";
  encode($response,true);
}

encode($response,true);
?>
