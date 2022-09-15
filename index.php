<?php

header( "Content-type: application/captive+json" );

$jsonData = [
//  "captive" => true,
//  "user-portal-url" => "https://capport.nasirhafeez.com/guest/s/jp69ndw2/index.php",
//  "venue-info-url" => "https://apiserver.nasirhafeez.com",
//  "seconds-remaining" => 63200,
//  "can-extend-session" => true
  "captive" => false,
	"user-portal-url" => "https://apiserver.nasirhafeez.com/portal.php",
	"venue-info-url" => "https://apiserver.nasirhafeez.com/venue.php"
];

echo json_encode($jsonData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

?>
