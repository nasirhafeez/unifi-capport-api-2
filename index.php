<?php

header( "Content-type: application/json" );

$jsonData = [
  "captive" => true,
  "user-portal-url" => "https://capport.nasirhafeez.com/guest/s/jp69ndw2",
  "venue-info-url" => "https://apiserver.nasirhafeez.com",
  "seconds-remaining" => 63200,
  "can-extend-session" => true
];

echo json_encode($jsonData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
