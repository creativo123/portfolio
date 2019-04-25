<?php
require "init.php";

	$response =array();

	//selec all the data from master location table
	$query="select * from locations";
	$result=mysqli_query($con,$query);

	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result))
		{
			array_push($response,array("location_id"=>$row["location_id"],"name"=>$row["name"],"latitude"=>$row["latitude"],"longitude"=>$row["longitude"]));
		}
	}
	else {
		$response["result"]="false";
	}
		echo json_encode(array("locations"=>$response));
	?>
