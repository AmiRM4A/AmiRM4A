<?php
define('CACHE_ENABLED', 1);
define('CACHE_DIR', __DIR__ . '/cache/');
include_once 'app/iran.php';
spl_autoload_register(function ($class) {
    $fileName = __DIR__ . "/$class.php";
    // echo 'FileName: ' . $fileName . PHP_EOL;
    if (!(file_exists($fileName) && is_readable($fileName))) {
        die("$class Not Found!");
    }
    include_once $fileName;
});