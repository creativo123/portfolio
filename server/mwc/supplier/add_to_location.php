<?php

require "init.php";

$response=array();

/*
if(isset($_POST["location_id"],$_POST["suppiler_id"],$_POST["name"],$_POST["product_id"]))
{
  #NOTE:
  //while testing use "STRING"+"INT" format for location_id, eg: DEL1234
  // DO NOT use INT first
  //otherwise there'llbe syntax error while creating a table
  $location_id=$_POST["location_id"];
  $suppiler_id=$_POST["suppiler_id"];
  $name=$_POST["name"];
  $product_id=$POST["product_id"];
*/
//for testing, comment the upper code and uncomment the following


$location_id="location_id_2";
$suppiler_id="651561";
$name="Product 3";
$product_id="5612221";  

  $query="CREATE TABLE IF NOT EXISTS $location_id (supplier_id VARCHAR(15),
          name VARCHAR(20),product_id VARCHAR(15))";


  if(mysqli_query($con,$query)) //creates the table with name location_id
  {
    $query_add="INSERT INTO $location_id VALUES('$suppiler_id','$name','$product_id')";

    if(mysqli_query($con,$query_add)) // inserts the data in table location_id
    {
      $response["result"]="true";
      $response["message"]="SUCCESS";
    }
    else {
      $response["result"]="false";
      $response["message"]="FAILED".mysqli_error($con); // if data insertion fails
    }
  }
  else {
    $response["result"]="false";
    $response["message"]="FAILED, table not created".mysqli_error($con); // if table creation fails
  }

/*
 }
else {
  $response["result"]="false";
  $response["message"]="some info was leaked";
} 
*/
//will return result= true and msg=SUCCESS if table is created and data sccessfully inserted
//else will return result=false and the error
echo json_encode($response);

 ?>
