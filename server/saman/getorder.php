<?php
require_once('connect.php');

$response = array();

if(isset($_POST['customer_id'])){
$customer_id = $_POST['customer_id'];
$sql = "select * from oc_order where customer_id = '$customer_id' ";
$result = mysqli_query($connection,$sql);
if($result){
  $response["result"] = true;
  $response["message"] = MESSAGE_SUCCESS;
  $response["data"] = array();
  while ($data = mysqli_fetch_assoc($result)) {
	array_push($response["data"],$data);	
	}
    
  }
}
else{
  $response["result"] = false;
  $response["message"] = mysqli_error($connection);
}

encode($response,true);
?>