<?php

$queryString = $_SERVER['QUERY_STRING'];

# Create a connection
$url = 'https://abhii.apps.dreamfactory.com//api/v2/user/session?oauth_callback=true&' . $queryString;
$ch = curl_init($url);

# Setting our options
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

# Get the response
$response = curl_exec($ch);
curl_close($ch);

$json = json_decode($response);

var_dump($json);

?>
