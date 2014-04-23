<?php

$api_key = "AIzaSyAe1GDO_-EGuX_YxX5PqeJuNzlOYgn54yY";

header('Content-type: application/json');
$url = $_GET['url'] . "&key=" . $api_key;                    
$json = file_get_contents($url);
if (isset($_GET['debug'])) {
	$json .= "{'URL' : '$url'}";	
}
echo $json;
?>