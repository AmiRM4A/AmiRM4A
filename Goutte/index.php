<?php
include "vendor/autoload.php";
use Goutte\Client;

$client = new Client();
$crawler = $client->request('GET', 'https://packagist.org/explore/popular');
// $data = $crawler->filter('.package-item h4 a');
// var_dump($data);
echo "Popular Packages:";
$crawler->filter('.package-item h4 a')->each(function ($data) {
    echo $data->text() . "<br>";
});