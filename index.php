<?php

header( "Content-type: application/captive+json" );

$jsonData = [
//  "captive" => true,
//  "user-portal-url" => "https://capport.nasirhafeez.com/guest/s/jp69ndw2/index.php",
//  "venue-info-url" => "https://apiserver.nasirhafeez.com",
//  "seconds-remaining" => 63200,
//  "can-extend-session" => true
  "captive" => false,
	"user-portal-url" => "https://capport.net/?ClientIP=111.119.178.176",
	"venue-info-url" => "https://capport.net/r?url=https://capport.net",
	"seconds-remaining" => 57513,
	"can-extend-session" => true
];

echo json_encode($jsonData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
