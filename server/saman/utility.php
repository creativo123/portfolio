<?php
function encode($response, $exit){
  echo(json_encode($response));
  if($exit){
    exit();
  }
}
?>
