<?php
function auto_loader($class)
{
    $filePath = 'C:\xampp\htdocs\Php\\' . "/$class.php";
    echo "ClassName: " . $class . PHP_EOL;
    echo "FilePath: " . $filePath . PHP_EOL;
    if (!file_exists($filePath) && !is_readable($filePath)) {
        die();
    }
    include $filePath;
    echo "Including $filePath done..." . PHP_EOL;

}
spl_autoload_register('auto_loader');