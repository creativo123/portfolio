<?php
require "init.php";

	$response =array();

	//selec all the data from master products table
	$query="select * from products";
	$result=mysqli_query($con,$query);

	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			
			array_push($response,array("product_id"=>$row["product_id"],"name"=>$row["name"],"description"=>$row["description"],"price"=>$row["price"],"stock"=>$row["stock"]));
		}
	}
	else {
		$response["result"]="false";
	}
		echo json_encode($response);
	?>
