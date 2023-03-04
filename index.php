<?php

$contect = "Hi my firstemail is: asgry255@gmail.com and my second email is: negan1382@gmail.com";
$pattern = "/([a-zA-Z0-9]+)@([a-zA-Z0-9]+)\.([a-zA-Z]{2,5})/";
preg_match_all($pattern, $contect, $email);
// echo "<pre>";
// print_r($email);
// echo "</pre>";