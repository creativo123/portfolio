<?php
require_once('connect.php');
$response = array();

if(isset($_POST['order_id'],$_POST['total'] )){
$order_id = $_POST['order_id'];
$total = $_POST["total"];
}else{
$response["result"] = false;
$response["message"] = "Some information was leaked..";
encode($response,true);
}

$sql_status = "update sa_order SET order_status_id=2 where order_id=$order_id;";
$result_sql = mysqli_query($connection,$sql_status);

if($result_sql){
	$sql_transaction = "insert into sa_customer_transaction(`customer_id`,`order_id`,`amount`) select customer_id,order_id,'$total' from sa_order where order_id = $order_id;";
	$sql_cart = 
		"delete from sa_cart where product_id in (select product_id from sa_order_product where order_id = $order_id) and customer_id in (select customer_id from sa_order where order_id = $order_id);";
		
		$sql_transaction = $sql_transaction.$sql_cart;
		
$result_transaction = mysqli_query($connection,$sql_transaction);
if($result_transaction){
		$response["result"] = true;
 		$response["message"] = MESSAGE_SUCCESS;	
}else{
		$response["result"] = false;
		$response["message"] = mysqli_error($connection);
}
	}else{
		$response["result"] = false;
		$response["message"] = mysqli_error($connection);
}

encode($response,true);
?>