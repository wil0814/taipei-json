<?php
header('Content-Type:  application/json; charset=utf-8');

$url = "https://tcgbusfs.blob.core.windows.net/blobyoubike/YouBikeTP.json";

$json = file_get_contents($url);

$json_data = json_decode($json, true);

$json_test = array();  
$area= urlencode("大安區");
$Inquire=urlencode($json_data["retVal"]["0405"]["sna"]);
$have=$json_data["retVal"]["0405"]["sbi"];
$stop=$json_data["retVal"]["0405"]["tot"]-$json_data["retVal"]["0405"]["sbi"];
array_push($json_test,$area,$Inquire,$have,$stop); 
echo urldecode(json_encode($json_test));


?>