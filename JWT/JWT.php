<?php

$header = json_encode(['alg' => 'HS256', 'typ' => 'JWT']);
$payload = json_encode(['name' => 'Amir', 'id' => 1382, 'rank' => 'Admin']);
$base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));
$base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));
$signature = hash_hmac('sha256', $base64UrlHeader . '.' . $base64UrlPayload . 'abc123!', true);
$base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));
$jwt = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;

var_dump($base64UrlHeader) . PHP_EOL;
var_dump($base64UrlPayload) . PHP_EOL;
var_dump($base64UrlSignature) . PHP_EOL;
var_dump($jwt);