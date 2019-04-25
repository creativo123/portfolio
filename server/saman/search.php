<?php 
include("connect.php");

$response = array();
$response["data"] = array();
if(isset($_POST["search"])){
	$search = $_POST["search"];
}else{
	$response["result"] = false;
	$response["message"] = "Some information leaked ..";
	encode($response,true);
}
	$sql = "select product_id from sa_product_description where name like '%$search%'";
	$result = mysqli_query($connection,$sql);
	if($result){
		$response["result"] = true;	
		$response["message"] = "SUCCESS";		
		while($data = mysqli_fetch_assoc($result)){
			array_push($response["data"],$data);
			}
		}else{
		$response["result"] = false;
		$response["message"] = "Some information leaked ..";	
		}

		encode($response,true);
?>