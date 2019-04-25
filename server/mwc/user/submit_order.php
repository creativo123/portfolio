<?php
   require "init.php";

   $response=array();

/*
   $user_id="soum7742075362";
   $location_id="army231234";
   $order_type="new";
   $product_id="product_id_4";
   $qty="1";
   $address="Q7, Block D";
   $order_amount="140";
   $order_later="true";
   $ol_time="08:00";
   $ol_date="02/06/2017
   */

  // for testing comment the codes below and uncomment above lines
   $user_id=_POST["user_id"];
   $location_id=_POST["location_id"];
   $order_type=_POST["order_type"];
   $product_id=_POST["product_id"];
   $qty=_POST["qty"];
   $address=_POST["address"];
   $order_amount=_POST["order_amount"];
   $order_later=_POST["order_later"];
   $ol_time=_POST["ol_time"];
   $ol_date=_POST["ol_date"];
   // building query
   $query="insert into orders values(null,'$user_id','$location_id','$order_type','$product_id','$qty','$address','$order_amount','$order_later','$ol_time','$ol_date')";

   if(mysqli_query($con,$query))
   {
     $response["result"]="true";
     $response["message"]="SUCCESS";
   }

   else {
     $response["result"]="false";
     $response["message"]="FAILED".mysqli_error($con);
   }
   //returning data
   echo json_encode($response);


 ?>
