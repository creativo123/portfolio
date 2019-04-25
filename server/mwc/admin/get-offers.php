<?php
require_once('connect.php');

$response = array();

 
 $sql = "select * from offers;";
$result = mysqli_query($connection,$sql);
if($result){

  $response["result"] = RESULT_TRUE;
  $response["message"] = "SUCCESS";
  $response["data"] = array();

  while($data = mysqli_fetch_assoc($result)){
    array_push($response["data"],$data);
  }
}else{
  $response["result"] = RESULT_FALSE;
  $response["message"] = mysqli_error($connection);
}

encode($response,true);
?>
