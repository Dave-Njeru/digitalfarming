<!-- PHP CURL to send the API request -->
<?php
$apiKey = 'f1d0d9dcba89cf4cae8f28d8c06263a9';
$cityId = 198476;

$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" .$cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
curl_close($ch);
$data = json_decode($response);
$currentTime = time() ;
?>
