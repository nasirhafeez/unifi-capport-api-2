<?php

header( "Content-type: application/captive+json" );

$jsonData = [
  "captive" => false,
	"user-portal-url" => "https://capport.nasirhafeez.com",
	"venue-info-url" => "https://apiserver.nasirhafeez.com/venue.html"
];

echo json_encode($jsonData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
