<?php
include("connect.php");
$response = array();


if(isset($_POST["title"],$_POST["offer"],$_POST["discount"],$_POST["limit"],$_POST["stock"],$_POST["validity"])){
  $title = $_POST["title"];
  $offer = $_POST["offer"];
  $discount = $_POST["discount"];
  $limit = $_POST["limit"];
  $stock = $_POST["stock"];
  $validity = $_POST["validity"];
}else{
  $response["result"] = false;
  $response["message"] = "Some information was leaked";
  echo(json_encode($response));
  exit("");
}


//$sql = "insert into offers(title,offer,discount,limit,stock) values('$title','$offer',$discount,$limit,$stock);";
$sql = "INSERT INTO `offers`( `title`, `offer`, `discount`, `limit`, `stock`, `validity`) VALUES ('$title','$offer',$discount,$limit,$stock,'$validity')";

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
