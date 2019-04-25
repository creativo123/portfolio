<?php
require_once('connect.php');
$response = array();

if(isset($_POST['customer_id'],$_POST['address_id'],$_POST['product_id'],$_POST['quantity'],$_POST['price'] )){
$customer_id = $_POST['customer_id'];
$address_id = $_POST['address_id'];
$product_id = explode(",",$_POST['product_id']);
$quantity = explode(",",$_POST['quantity']);
$price = explode(",",$_POST['price']);
}else{
$response["result"] = false;
$response["message"] = "Some information was leaked..";
encode($response,true);
}

$sql = "INSERT INTO `sa_order`(`shipping_firstname`, `shipping_lastname`, `shipping_company`, `shipping_address_1`, `shipping_address_2`, `shipping_city`, `shipping_postcode`, `shipping_country_id`, `shipping_zone_id`, `customer_id`,`date_added`) select  `firstname`, `lastname`, `company`, `address_1`, `address_2`, `city`, `postcode`, `country_id`, `zone_id`,`customer_id`,now() from sa_address where address_id = $address_id; ";

$result_address = mysqli_query($connection,$sql);
$str_sql = "";
if($result_address){
$last_id =	mysqli_insert_id($connection);
$str_sql = "insert into sa_order_product(order_id,product_id,name,model,quantity,price,total)";
 
for($i = 0; $i < sizeof($product_id);$i++){
	$total = $price[$i] * $quantity[$i];
$str_sql .= "(select '$last_id','$product_id[$i]',name,model,'$quantity[$i]',$price[$i],'$total' from sa_product T1, sa_product_description T2 where T1.product_id=$product_id[$i] and T2.product_id = $product_id[$i])";
 
	if($i  < sizeof($product_id)-1){
		$str_sql = $str_sql . " UNION ALL "; 
	}else{
		$str_sql = $str_sql . ";";
	}
}
$result_product = mysqli_query($connection,$str_sql);
	if($result_product){
		
		$response["result"] = true;
		$response["order_id"] = $last_id;
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