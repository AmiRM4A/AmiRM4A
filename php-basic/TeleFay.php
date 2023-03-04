<?php

function decrypt($ciphertext, $key) {
    $method = "AES-256-CBC";
    $iv = '';
    $hash = substr($ivHashCiphertext, 16, 32);
   
    return openssl_decrypt(base64_decode($ciphertext), $method, $key, OPENSSL_RAW_DATA, $iv);
}

$str = file_get_contents("https://iopsms.xyz/");
$enc = json_decode($str,true)["encrypted"];
$key = substr(hash("sha256",substr($enc,strlen($enc) - 16)),0,32);


$str = substr($enc,0,strlen($enc) - 16);

$dec = decrypt(trim($str),trim($key));
$dec = substr($dec,16,strlen($dec));


$json = json_decode($dec,true);
for ($i = 0; $i < count($json);$i++)
{
    $ip = $json[$i]["ip"];
    $port = $json[$i]["prt"];
    $secret = $json[$i]["secret"];
    $message .= "<a href='" . "https://t.me/proxy?server=$ip&port=$port&secret=$secret" . "'>"."https://t.me/proxy?server=$ip&port=$port&secret=$secret"."</a>" .  "<br>";
}

?>

<html>
  <head>      
  </head>
  <body>
    <?php echo $message; ?>
  </body>
</html>