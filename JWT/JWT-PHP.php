<?php
include 'vendor/autoload.php';
use Firebase\JWT\JWT;

$alg = 'HS256';
$key = 'Amir1382';
$payload = [
    'iss' => 'http://google.com',
    'aud' => 'http://irsamp.ir',
    'iat' => 1679194296,
    'nbf' => 1680000000,
    'user_id' => 1382,
];
$jwt = JWT::encode($payload, $key, $alg);
echo "JWT: " . PHP_EOL;
echo $jwt;

$jwtDecode = JWT::decode($jwt, $key, array($alg));
echo "JWT (Decoded): " . PHP_EOL;
var_dump($jwtDecode);