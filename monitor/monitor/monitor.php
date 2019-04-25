<?php
$date = "\r\n".date("d-m-Y")."---".date("h:i:sa");
$fil = fopen("monitor-monitor.txt","a");
fwrite($fil,$date)
?>