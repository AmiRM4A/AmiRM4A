<?php
spl_autoload_register(function ($class) {
    $fileName = __DIR__ . "/$class.php";
    if (file_exists($fileName) && is_readable($fileName)) {
        include $fileName;
    }
});

$pdo = new PDOException();
var_dump($pdo);
