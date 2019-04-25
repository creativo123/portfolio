<?php

require_once('settings.php');
//require_once('functions.php');

$connection = mysqli_connect(DBHOST,DBUSER,DBUSERPASS,DBNAME) or error("Unable to connect to database : " . mysqli_connect_errorno());
/*if(!mysqli_select_db(DBNAME)) {
    error("Unable to select database : " . mysqli_error());
}*/
include("utility.php");
?>
