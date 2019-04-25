<?php

	require "init.php";

	$response =array();

/*
	$name="Soumya";
	$email="soumya@gmail.com";
	$mobile="12345667";
	$password="password";
*/

	if(isset($_POST["name"],$_POST["email"],$_POST["mobile"],$_POST["password"]))
	{
		$name=$_POST["name"];
		$email=$_POST["email"];
		$mobile=$_POST["mobile"];
		$password=$_POST["password"];


		$user_id=substr($name,1,3).$mobile;



		$query="insert into users values('$user_id','$name','$email','$mobile','$password')";

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

}
else {
	$response["message"]="some data was leaked";
	$response["result"]="false";
}
	echo json_encode($response);

?>
