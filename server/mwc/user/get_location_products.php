<?php
require "init.php";
  //$location_id=_POST["location_id"];
$location_id="location_id_1";
	$response =array();

	//selec all the data from master location table
	$query="select * from $location_id";
	$result=mysqli_query($con,$query);

	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result))
		{
			array_push($response,array("supplier_id"=>$row["supplier_id"],"name"=>$row["name"],"product_id"=>$row["product_id"]));
		}
	}
	else {
		$response["result"]="false";
	}
		echo json_encode(array("products"=>$response));
	?>
