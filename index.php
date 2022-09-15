<?php

header( "Content-type: application/captive+json" );

$jsonData = [
  "captive" => false,
	"user-portal-url" => "https://apiserver.nasirhafeez.com/portal.php",
	"venue-info-url" => "https://apiserver.nasirhafeez.com/venue.php"
];

echo json_encode($jsonData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
