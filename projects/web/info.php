<?php
$file_name = $file_name.".json";
$file = fopen($file_name,"r");
$json = fread($file,filesize($file_name));
$arr = json_decode($json,true);
$data = $arr["data"];
if(sizeof($data) >= 3){
   $data_set = array_chunk($data,3);
} else{
 $data_set =  array_chunk($data,2);
}
$len = sizeof($data_set);
foreach ($data_set as $data_item){
  echo('<div class="row web-showcase" style = "margin-bottom : 30px;">');
  foreach ($data_item as $data_1) {
    $title = $data_1["data"]["title"];
    $image = $data_1["image"];
    $back_end = $data_1["data"]["back"];
    $front_end = $data_1["data"]["front"];
    $database = $data_1["data"]["db"];
    $link = $data_1["click"];
    echo("           <div class = 'col-lg-4'>
    <a href='$link'>
    <div class = 'web-showcase-item' style='background-image : url($image)'>
    <div class = 'showcase'>
    <h3> $title </h3>
    <div class = 'container-fluid' style='margin-top : 20px;'>
    <div class='row'>
    <div class = 'col-lg-4'>
    <h5>Front End</h5>
    </div>
    <div  class='col-lg-8'>
    <h5>$front_end</h5>
    </div>
    </div>

    <div class='row'>
    <div class = 'col-lg-4'>
    <h5>Back End</h5>
    </div>
    <div  class='col-lg-8'>
    <h5>$back_end</h5>
    </div>
    </div>

    <div class='row'>
    <div class = 'col-lg-4'>
    <h5>Database</h5>
    </div>
    <div  class='col-lg-8'>
    <h5>$database</h5>
    </div>
    </div>

    </div>
    </div>
    </div>
    </div>
    ");

    if(sizeof($data_item) < 3){
     echo("<div class = 'col-lg-4'></div>");
    }
 }
  echo("</div>");
}

fclose($file);

?>
