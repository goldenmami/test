<?php
include "connexion.php";
$str = file_get_contents('http://host-php.paas.msv-project.com/file.json/');
$json = json_decode($str, true);
echo '<pre>' . print_r($json, true) . '</pre>';
$temperatureMin = $json['daily']['data'][0]['temperatureMin'];
$temperatureMax = $json['daily']['data'][0]['temperatureMax'];
?>
