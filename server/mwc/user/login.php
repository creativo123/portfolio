<?php
require "init.php";

	$response =array();

/*
//	$name="Soumya";
	$email="soumya@gmail.com";
//	$mobile="12345667";
	$password="password";
/*
	*/
	$email=$_POST["email"];
	$password=$_POST["password"];

	$query="select * from users where email like '$email' and password like '$password'";
	$result=mysqli_query($con,$query);

	if(mysqli_num_rows($result)>0)
	{
		$row=mysqli_fetch_assoc($result);
		$response["result"]="true";
		$response["user_id"]=$row["user_id"];
		$response["name"]=$row["name"];
		$response["email"]=$row["email"];
		$response["phone"]=$row["phone"];
	}
	else {
		$response["result"]="false";
	}
		echo json_encode($response);
	?>
