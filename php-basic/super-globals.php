<?php
$num = 3;
$users = array(
    "names" => [
        "ahmad", "reza", "amir",
    ],
    "usernames" => [
        "mohsen", "milad",
    ],
);
// print_r($GLOBALS);
$x = 20;
function sum()
{
    $GLOBALS['x'] = 19;
    $GLOBALS['number'] = 62;
}
sum();
echo $x;
$x = 2;
echo "<br>";
echo $x;
echo "<hr>";
echo "<pre>";
var_dump($GLOBALS);
echo "</pre>";
echo "<hr>";
echo $number;
