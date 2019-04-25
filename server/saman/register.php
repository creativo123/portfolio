<?php
require_once('connect.php');

$response = array();

if(isset($_POST["email"],$_POST["firstname"],$_POST["lastname"],$_POST["telephone"],$_POST["password"])){
  $email = $_POST["email"];
  $first_name = $_POST["firstname"];
  $last_name = $_POST["lastname"];
  $telephone = $_POST["telephone"];
  $password = $_POST["password"];
}else{
  $response["result"] = false;
  $response["message"] = "Some information was leaked";
  echo(json_encode($response));
  exit("");
}
 
 $sql = "insert into sa_customer(email,firstname,lastname,telephone,password) values('$email','$first_name','$last_name','$telephone','$password');";
$result = mysqli_query($connection,$sql);
if($result){
  $response["result"] = true;
  $response["message"] = "REGISTERED";
}else{
  $response["result"] = false;
  $response["message"] = mysqli_error($connection);
}

encode($response,true);
?>
