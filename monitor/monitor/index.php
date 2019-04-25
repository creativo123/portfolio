<html>
<head>
<style>
body{
margin : 0px;
padding : 0px;
}
	.work_container{
		background-color : rgb(36,36,36);
		padding : 5px;
		width : 100%;
	}
</style>
</head>
<body>
<div class = "work_container">
<h3 style="color : white; text-align : center;font-family : monospace;">This project is developed by keval choudhary, Please visit <a href = "http://www.creativek.me/project.php" style="color :#009688";>www.creativek.me</a> for more projects and information </h3>
</div>
<?php
$date = "\r\n".date("d-m-Y")."---".date("h:i:sa");
$file = fopen("index-monitor.txt","a");
fwrite($file,$date)
?>
</body>
</html>	