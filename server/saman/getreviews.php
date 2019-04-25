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

$sql = "select * from sa_review where product_id = $product_id";

$result = mysqli_query($connection,$sql);

if($result){

  $response["result"] = true;
  $response["message"] = "SUCCESS";
  $response["data"] = array();

  while($data = mysqli_fetch_assoc($result)){
    array_push($response["data"],$data);
  }
}else{
  $response["result"] = false;
  $response["message"] = mysqli_error($connection);
}

encode($response,true);

?>
