<?php

require_once('settings.php');
//require_once('functions.php');

$connection = mysqli_connect(DBHOST,DBUSER,DBUSERPASS,DBNAME) or die("Unable to connect to database : " );
/*if(!mysqli_select_db(DBNAME)) {
    error("Unable to select database : " . mysqli_error());
}*/

mysqli_set_charset($connection,"utf8");
include("utility.php");
?>
