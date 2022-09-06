<?php

header( "Content-type: application/json" );

$jsonData = [
  "captive" => true,
  "user-portal-url" => "https://api.nasirhafeez.com",
  "venue-info-url" => "https://api.nasirhafeez.com",
  "seconds-remaining" => 63200,
  "can-extend-session" => true
];

echo json_encode($jsonData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
