<?php

$api_key = "AIzaSyB_tVsms-ULE2W1QGg0XFx2VNHoUlHDfCs";

header('Content-type: image/jpeg');
$url = "https://maps.googleapis.com/maps/api/place/photo?maxwidth=" . $_GET['size'] . "&photoreference=" . $_GET['ref'] . "&sensor=true&key=" . $api_key;                    
$jpeg = file_get_contents($url);
echo $jpeg;
?>