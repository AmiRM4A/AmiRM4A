<?php
include 'vendor/autoload.php';

$fake = Faker\Factory::Create();
echo $fake->name();