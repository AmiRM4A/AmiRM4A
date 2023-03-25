<?php

class Magics
{
    private $name;
    private $set;
    public function __set($name, $value)
    {
        $this->set[$name] = $value;
    }
    public function __get($name)
    {
        return $this->set[$name];
    }
}

$newMagic = new Magics();
$newMagic->Family = 'Asgary';

var_dump($newMagic->Family);
