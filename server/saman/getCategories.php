<?php
require_once('connect.php');

$response = array();



$sql = "select * from sa_category T1 INNER JOIN sa_category_description T2 ON T1.category_id = T2.category_id order by T1.parent_id;";
$result = mysqli_query($connection,$sql);
if($result){
  $response["result"] = true;
  $response["message"] = MESSAGE_SUCCESS;
  $response["data"] = array();
  while ($data = mysqli_fetch_assoc($result)) {
    array_push($response["data"],$data);
  }
}else{
  $response["result"] = false;
  $response["message"] = mysqli_error($result);
}


encode($response,true);
?>
