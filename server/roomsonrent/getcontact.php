<?php
require_once('connect.php');

$response = array();

if(isset($_POST["id"])){
  $id =	$_POST["id"];
}else{
  $response["result"] = RESULT_FALSE;
  $response["message"] = "Some information was leaked";
  encode($response,true);
}
 $sql = "select * from user where mobile in (select user_id from rooms where id = $id);";
$result = mysqli_query($connection,$sql);
if($result){

  $response["result"] = RESULT_TRUE;
  $response["message"] = MESSAGE_SUCCESS;
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
