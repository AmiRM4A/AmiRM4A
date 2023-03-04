<?php

function dateToJalali(string $date)
{
    list($month, $day, $year) = explode('/', $date);
    $timestamp = mktime($month, $day, $year);
    return jdate('Y/m/d', $timestamp);
}