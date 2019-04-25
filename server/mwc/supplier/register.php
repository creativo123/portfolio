<?php

require "init.php";

$response=array();


if(isset($_POST["name"],$_POST["email"],$_POST["password"],$_POST["mobile"],$_POST["address"]))
{
  $name=$_POST["name"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $phone=$_POST["phone"];
  $address=$_POST["address"];
  $supplierId=$phone+rand(10,9999);

//For testing, comment the above lines and use the follwing data:
/*
$name="Soumya";
$email="email@gmail";
$password="password";
$phone="126283688";
$address="abcedbekd";
$supplierId=$phone+rand(10,9999);
*/

  $query="insert into suppliers values('$supplierId','$name','$email','$password','$phone','$address')";

  if(mysqli_query($con,$query))
  {
    $response["result"]="true";
    $response["message"]="SUCCESS";
  }
  else {
    $response["result"]="false";
    $response["message"]="FAILED";
  }

 }
else {
  $response["result"]="false";
  $response["message"]="some info was leaked";
}

//will return result= true and msg=SUCCESS if data sccessfully inserted
//else will return result=false
echo json_encode($response);

 ?>
