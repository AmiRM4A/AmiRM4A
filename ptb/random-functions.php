<?php
//1.    rand();
//2.    mt_rand();
//3.    random_int();
//4.    random_bytes();
//5.    openssl_random_pesudo_bytes();

function RandomNum($length)
{
    $char = "0123456789";
    $charlenght = strlen($char);
    $randomNum = '';
    for ($i = 0; $i < $length; $i++) {
        $randomNum .= rand($char[0], $char[$charlenght - 1]);
    }
    return $randomNum;
}
echo RandomNum(20);

$ch = "abcd";
echo $ch[2];
