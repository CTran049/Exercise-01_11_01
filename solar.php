<?php
$WeatherSource = "https://api.forecast.io/forecast/3dd2f5a10671febe44f255944b948805/" . $_GET["lat"] . "," . $_GET["lng"];
header("Content-Type: application/json");
header("Cache-Control: no-cache");
readfile($WeatherSource);
?>