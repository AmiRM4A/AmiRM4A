<?php
// Loops with for/foreach/while/do-while

$array = array(
    ["amir", 18, "asgry255@gmail.com"],
    ["ata", 18, "atanikbakht@gmail.com"],
    ["reza", 18, "rezaranjbar@gmail.com"],
);
$users = array(
    "1" => [
        "name" => "ata",
        "family" => "nikbakht",
        "phone" => "09121234567",
        "email" => "atanikbakht@gmail.com",
    ],
    "2" => [
        "name" => "amir",
        "family" => "asgry",
        "phone" => "09033126062",
        "email" => "asgry255@gmail.com",
    ],
    "3" => [
        "name" => "reza",
        "family" => "nagaiidam",
        "phone" => "09123333214",
        "email" => "reza@gmail.com",
    ],
    "4" => [
        "name" => "navid",
        "family" => "nagaiidam",
        "phone" => "09191775495",
        "email" => "navid@gmail.com",
    ],
    "5" => [
        "name" => "hassan",
        "family" => "nagaiidam",
        "phone" => "09181596985",
        "email" => "mpgames@gmail.com",
    ],
    "6" => [
        "name" => [
            "FirstName" => "Amir",
            "LastName" => "Asgry",
        ],
        "family" => "nagaiidam",
    ],
);
$objArray = json_decode(json_encode($array));
// while (associatice array)
echo "<span style='color:green;'>While (Associatice array)</span><br>";
$a = 0;
while ($a < sizeof($array)) {
    echo "Name: {$array[$a][0]}<br> Age: {$array[$a][1]}<br> Email: {$array[$a][2]}<hr>";
    $a++;
}
;
echo "<br>";

//while (Objected array)
// $b = 0;
// while ($b <= 2) {
//     echo "Name: {$objArray->$b->{0}}<br> Age: {$objArray->$b->{1}}<br> Email: {$objArray->$b->{2}}<hr>";
//     $b++;
// };
// echo "<br>";

//Foreach (associatice array)
foreach ($users as $key => $value) {
    // echo "ID$key<br>
    // Name: {$value["name"]}<br>
    // Family: {$value["family"]}<br>
    // Phone: {$value["phone"]}<br>
    // Email: {$value["email"]}><hr>";
    echo "ID$key<br> {$value["name"]["FirstName"]}";
}
