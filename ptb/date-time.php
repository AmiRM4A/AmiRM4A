<?php
include 'jdf.php';
include 'helper.php';
//1.    date(); M = month -- Y = Year -- D = Day -- l = Week Day | H = Hour -- i = Minute -- S = Second -- a = Shows AM or PM
//2.    date_default_timezone_set('Continent/City') => date_default_timezone_set('Asia / Tehran');
//3.    time();
//4.    mktime();
// $mktime = mktime(8, 43, 59, 10, 25, 2000);
// $date = date('y/m/d  h:i:sA', $mktime);
// echo "$mktime => $date";
//5.    strtotime(date and time);
// echo $time = strtotime('2000 Mar Friday 2:43AM');
// echo "<br>";
// echo date('y/m/d  h:i:sA', $time);
//6. Convert miladi date to shamsi or jalale with jdate(); (check helper.php too)
//echo dateToJalali('10/15/2022');
