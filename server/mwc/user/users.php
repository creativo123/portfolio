<?php

require "init.php";
$response=array();

$query="select * from users";

$result=mysqli_query($con,$query);

while($row=mysqli_fetch_array($result))
{
	array_push($response,array("name"=>$row[0],"email"=>$row[1],"phone"=>$row[2]));
}
echo json_encode(array("users"=>$response));

?>