<?php
include("connect.php");
$response = array();


if(isset($_POST["name"],$_POST["address"],$_POST["latitude"],$_POST["longitude"],$_POST["range"])){
  $name = $_POST["name"];
  $address = $_POST["address"];
  $latitude = $_POST["latitude"];
  $longitude = $_POST["longitude"];
  $range = $_POST["range"];
}else{
  $response["result"] = false;
  $response["message"] = "Some information was leaked";
  echo(json_encode($response));
  exit("");
}

$sql = "insert into locations(`name`, `latitude`, `longitude`, `range`, `address`) values('$name','$latitude','$longitude',$range,'$address');";

$result = mysqli_query($connection,$sql);

if($result){
  $response["result"] = true;
  $response["message"] = "SUCCESS";
}else{
  $errorr  = mysqli_error($connection);
  $response["result"] = false;
  $response["message"] = $errorr;
}

echo(json_encode($response));

?>
