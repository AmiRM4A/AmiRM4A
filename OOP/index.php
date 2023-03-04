<?php


class User{
    private $Name;
    private $Access;
    public function __construct($Name,$Access){
        if($Access != "Administrator"){
            echo "You can't make a object from this class!";
            die();
        }
        echo "Your object has been created succesfully! \n";
        echo "Welcome $Name, You're $Access... \n";
        $this->Name = $Name;
        $this->Access = $Access;
    }
    public function __destruct(){
        echo "All objects has been destructed succesfully!!!";
    }
}

$Amir = new User("Amir","Administrator");