<?php

function echoline($value, $newline = PHP_EOL)
{
    echo $value . $newline;
}

function mydump($value, $newline = PHP_EOL)
{
    var_dump($value) . $newline;
}

function myprint($value, $newline = PHP_EOL)
{
    print_r($value . $newline);
}