<?php

$db_name="mwc";
$mysql_user="portfolio";
$mysql_pass="portfolio123";
$host_name="portfolio.czgoq2baos2c.us-west-2.rds.amazonaws.com:3306";

$con=mysqli_connect($host_name,$mysql_user,$mysql_pass,$db_name);

if(!$con)
{
	//echo "Connection error..".mysqli_connect_error();
}

else
{
	//echo "Connection successful";
}



?>