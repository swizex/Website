<?php
$ch = curl_init();

$auth_token = "";
$pinNo = "";

curl_setopt($ch, CURLOPT_URL, "http://blynk-cloud.com/"+$auth_token+"/get/"+$pinNo);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);

?>