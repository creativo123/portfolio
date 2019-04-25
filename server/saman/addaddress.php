<?php
require_once('connect.php');

$response = array();


if(isset($_POST["customer_id"],$_POST["firstname"],$_POST["lastname"],$_POST["address_1"],$_POST["address_2"],$_POST["city"],$_POST["postcode"],$_POST["country_id"])){
$customer_id = $_POST["customer_id"];
  $address_1 = $_POST["address_1"];
  $firstname = $_POST["firstname"];
  $lastname=$_POST["lastname"];
  $address_2=$_POST["address_2"];
  $city=$_POST["city"];
  $postcode=$_POST["postcode"];
  $country_id=$_POST["country_id"];

$sql = "INSERT INTO sa_address(customer_id,firstname,lastname,address_1,address_2,city,postcode,country_id) VALUES($customer_id,'$firstname','$lastname','$address_1','$address_2','$city','$postcode','$country_id') ";
$result = mysqli_query($connection,$sql);
if($result){
  $response["result"] = true;
  $response["message"] = MESSAGE_SUCCESS;
}else{
  $response["result"] = false;
  $response["message"] = mysqli_error($connection);
}
}else{
  $response["result"] = false;
  $response["message"] = "Some information was leaked";
  encode($response,true);
}

encode($response,true);
?>
