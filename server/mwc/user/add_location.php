<?php

	require "init.php";

	$response =array();


	$name="Golf course";

	$latitude="87.345667";
	$longitude="28.76270";

	$location_id=substr($name,-3).substr($latitude,-4).substr($longitude,-4).rand(10,9999);

/*
	if(isset($_POST["name"],$_POST["latitude"],$_POST["longitude"]))
	{
		$name=$_POST["name"];
		$latitude=$_POST["latitude"];
		$mobile=$_POST["longitude"];
		$location_id=$name[1:3]+$latitude[1:4]+$longitude[1:4]+rand(10,9999);*/


		$query="insert into locations values('$location_id','$name','$latitude','$longitude')";

		if(mysqli_query($con,$query))
		{
			$response["message"]="SUCCESS";
			$response["result"]="true";
		}
		else
		{
			$response["message"]="FAILED".mysqli_error($con);
			$response["result"]="false";
		}
/*
}
else {
	$response["message"]="some data was leaked";
	$response["result"]="false";
} */
	echo json_encode($response);

?>
