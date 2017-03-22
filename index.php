<?php
include "connexion.php";
$str = file_get_contents('http://example.com/example.json/');
$json = json_decode($str, true);
echo '<pre>' . print_r($json, true) . '</pre>';
$temperatureMin = $json['daily']['data'][0]['temperatureMin'];
$temperatureMax = $json['daily']['data'][0]['temperatureMax'];
?>
