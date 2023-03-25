<?php
include_once 'trait.php';
class User
{
    public function __construct()
    {
        echo static::class . " -> Constructor: Your object created..." . PHP_EOL;
    }
    use Logger;
    use Serialize;
    use Hasher;
    private $test;
    public function __destruct()
    {
        echo static::class . " -> Destructor: Your object removed..." . PHP_EOL;
    }

}

$user = new User();
$user->Log('Erroridam');
var_dump($user->serialize());
echo $user->Hash('MyName Is Amir');