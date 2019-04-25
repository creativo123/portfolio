<?php
include("connect.php");
$response = array();


if(isset($_POST["name"],$_POST["brand"],$_POST["description"],$_POST["price"],$_POST["stock"],$_POST["image"])){
  $name = $_POST["name"];
  $brand = $_POST["brand"];
  $description = $_POST["description"];
  $price = $_POST["price"];
  $stock = $_POST["stock"];
  $image = base64_decode($_POST["image"]) ;
}else{
  $response["result"] = false;
  $response["message"] = "Some information was leaked";
  echo(json_encode($response));
  exit("");
}


$sql = "insert into products(name,brand,description,price,stock,added) values('$name','$brand','$description',$price,$stock,now());";
 

$result = mysqli_query($connection,$sql);

if($result){
  $response["result"] = true;
  $response["message"] = "SUCCESS";
  $id = mysqli_insert_id($connection);
  file_put_contents("images/products/img_$id.png", $image, FILE_APPEND | LOCK_EX);

}else{
  $errorr  = mysqli_error($connection);
  $response["result"] = false;
  $response["message"] = $errorr;
}

echo(json_encode($response));

?>
