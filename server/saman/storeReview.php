<?php
require_once('connect.php');

$response = array();

if(isset($_POST["product_id"],$_POST["customer_id"],$_POST["author"],$_POST["text"],$_POST["rating"])){
  $product_id = $_POST["product_id"];
  $customer_id = $_POST["customer_id"];
  $author = $_POST["author"];
  $text = $_POST["text"];
  $rating = $_POST["rating"];
}else{
  $response["result"] = false;
  $response["message"] = "Some information was leaked";
  echo(json_encode($response));
  exit("");
}
 
 $sql = "insert into sa_review(product_id,customer_id,author,text,rating) values('$product_id','$customer_id','$author','$text',$rating);";
$result = mysqli_query($connection,$sql);
if($result){
  $response["result"] = true;
  $response["message"] = "SUCCESS";
}else{
  $response["result"] = false;
  $response["message"] = mysqli_error($connection);
}

encode($response,true);
?>
