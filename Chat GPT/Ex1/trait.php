<?php

trait Logger
{
    public function Log(string $message)
    {
        $message = "File Path: " . __FILE__ . " Line: " . __LINE__ . ' => ' . $message . PHP_EOL;
        $myFile = fopen(__DIR__ . '\log.txt', 'a');
        fwrite($myFile, $message);
        fclose($myFile);
    }
}
trait Serialize
{
    public function Serialize()
    {
        $vars = (array) get_class_vars(static::class);
        return json_encode($vars) . PHP_EOL;
    }
}
trait Hasher
{
    public function Hash(string $value)
    {
        $result = password_hash($value, PASSWORD_DEFAULT);
        return $result . PHP_EOL;
    }
}