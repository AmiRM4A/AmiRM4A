<?php

$string = ['Amir', 'Ali', 'Reza', 'Ata', 'Mohammad'];
foreach ($string as $value) {
    // echo $value . PHP_EOL;
}

$array = [
    'Amir' => [
        18,
        'M',
    ],
    'Ali' => [
        28,
        'M',
    ],
    'Mohammad' => [
        11,
        'M',
    ],
    'Reza' => [
        32,
        'M',
    ],
    'Ata' => [
        134,
        'M',
    ],
];

foreach ($array as $key => $person) {
    echo $key . ' : ';
    foreach ($person as $value) {
        echo $value ' ';
    }
}