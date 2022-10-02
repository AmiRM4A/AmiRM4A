<?php

/*
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
);
// echo $users[1]["name"];
// echo "<hr>";

// $jsonEncode = json_encode($users);
// print_r($jsonEncode);
// echo "<br><br>";
// $jsonDecode = json_decode($jsonEncode);
// print_r($jsonDecode);
// echo "<br>";
// print_r($jsonDecode->{2}->name);

//Call by reference
// echo "Car";
// echo "<br>";
// $car = new stdClass;
// $car -> name = "Pride";
// $car -> model = 1998;
// print_r($car);
// echo "<hr>";

// echo "Car2";
// echo "<br>";
// $car2 = clone $car;
// $car2 -> name = "Bmw";
// $car2 -> color = "White";
// $car2 -> speed = 200;
// print_r($car2);

// echo "<hr>";
// echo "Car";//After call by reference
// echo "<br>";
// print_r($car);

// echo "<hr>";
// echo "Car3";
// echo "<br>";
// $car3 = clone $car;
// $car3 -> name = "Benz";
// $car3 -> maxSpeed = 600;
// print_r($car3);
// echo "<br>";
// print_r($car);

// Call by value
// $age = 18;
// echo $age;
// echo "<br>";
// $age2 = 17;
// echo $age2;

$dayOfWeek = strtolower(date("l"));

switch ($dayOfWeek) {
case 'saturday':
echo "امروز $dayOfWeek است(شنبه)";
break;
case 'sunday';
echo "امروز $dayOfWeek است(یک شنبه)";
break;
case 'monday';
echo "امروز $dayOfWeek است(دو شنبه)";
break;
case 'tuesday';
echo "امروز $dayOfWeek است(سه شنبه)";
break;
case 'wednesday';
echo "امروز $dayOfWeek است(چهار شنبه)";
break;
case 'thursday';
echo "امروز $dayOfWeek است(پنج شنبه)";
break;
case 'friday';
echo "امروز $dayOfWeek است(جمعه)";
break;
default:
echo "روزی یافت نشد!";
break;
}

echo "<hr>";

// $number = 12;
// if ($num >= 100) {
//     $msg = "This is msg variable!!";
//     echo $msg . ' ' . "on ture";
// } else {
//     echo $msg . ' ' . "on false";
// }
// $msg = ($number == 12) ? 'True - $number is equal to 12♥' : 'False - $number is not equal to 12';
// echo $msg;
// echo "<br>";

// $num = 100;
// $test = (($num == 100) ? (($num == 100) ? (($num == 100) ? (($num == 100) ? (($num == 100) ? (($num == 100) ? (($num == 100) ? (($num == 100) ? (($num == 100) ? (($num == 100) ? 'Tabrik ta shart dahom omadi vali naridi' :'to shart dahom ridi') :'to shart nohom ridi') :'to shart hashtom ridi') :'to shart haftom ridi') :'to shart sheshom ridi') :'to shart panjom ridi') :'to shart chaharom ridi') :'to shart sevom ridi') :'to shart dovom ridi') :'to hamon shart aval ridi');
// var_dump($test);

// while ($i = -1 <= 10) {
//     echo "$i<br>";
// }
// $i = 0;
// while($i <= 5){
//     echo "<span style='color:red;font-weight:600;background-color:#efefef;padding:3px 10px;'>$i<br></span>";
//     $i++;
// }
// $i = 1;
// do{
//     if($i <= 4 ){
//         echo "Round $i!<br>";
//     }else if ($i == 5){
//         echo "Round $i!";
//     }
//     $i++;
// }while ($i<=5)

// Indexed array
$dbUsers = array(
["reza", 18], ["amir", 22], ["ata", 32],
);

// Echo $dbUsers with while (Indexed array)
echo "<span style='color:green;font-weight:600;''>Echo \$dbUsers with while (Indexed array)</span><br>";
$i = 0;
while ($i < sizeof($dbUsers)) {
echo "Name: {$dbUsers[$i][0]}<br>Age: {$dbUsers[$i][1]}<hr>";
$i++;
}
echo "<hr>";

// Echo $users with for (asociatice array)
echo "<span style='color:green;font-weight:600;''>Echo \$users with for (asociatice array)</span><br>";
for ($i = 1; $i <= 5; $i++) {
echo "Name: {$users[$i]['name']}<br> Family: {$users[$i]['family']}<br> Phone: {$users[$i]['phone']}<br> Email: {$users[$i]['email']}<hr>";
}
echo "<hr>";

// Echo $users with do-while (Object array)
echo "<span style='color:green;font-weight:600;''>Echo \$users with do-while (Object array)</span><br>";
$objUsers = json_decode(json_encode($users));
// print_r($objUsers);
$a = 1;
do {
echo "Name: {$objUsers->$a->name}<br>
Family: {$objUsers->$a->family}<br>
Phone: {$objUsers->$a->phone}<br>
Email: {$objUsers->$a->email}<hr>";
$a++;
} while ($a <= 5);

$array = array("amir", "ata", "reza", "navid", "mahdi");
foreach ($array as $value) {
// ($value != "navid") ? echo $value : continue;
if ($value != "navid") {
echo "$value <br>";
} else {
continue;
}
}

// echo "<br>";
// echo "<pre>";
// var_dump($GLOBALS);
// echo "<pre>";*/

// $x = 10;
// $y = 20;

// function sum()
// {
//     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
// }
// sum();
// echo $z;

// echo "<pre>";
// var_dump($GLOBALS);
// echo "<pre>";
