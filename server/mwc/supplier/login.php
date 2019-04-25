<?php
require "init.php";

	$response =array();



  if(isset($_POST["email"],$_POST["password"]))
  {
  	$email=$_POST["email"];
  	$password=$_POST["password"];

    //For testing, comment the above lines and use the follwing data:
    /*
    //	$name="Soumya";
    	$email="email@gmail";
    //	$mobile="12345667";
    	$password="password";
    */
    
  	$query="select * from suppliers where email like '$email' and password like '$password'";
  	$result=mysqli_query($con,$query);

  	if(mysqli_num_rows($result)>0)
  	{
  		$row=mysqli_fetch_assoc($result);
  		$response["result"]="true";
      $response["message"]="SUCCESS";
      $response["supplierId"]=$row["supid"];
  		$response["name"]=$row["name"];
  		$response["email"]=$row["email"];
  		$response["phone"]=$row["phone"];
      $response["address"]=$row["address"];
  	}
  	else {
  		$response["result"]="false";
      $response["message"]="FAILED";
  	}
}
else {
  $response["result"]="false";
  $response["message"]="some info was leaked";
}

//will return all the details of the supplier if email and password match with result= true and msg=SUCCESS
//else will return result=false
		echo json_encode($response);
	?>
