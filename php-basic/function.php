<?php
declare (strict_types = 0);
function sum(int $a = null, int $b = null, $callback = null)
{
    $result = array(
        'Sum' => $a + $b,
        'Minus' => $a - $b,
        'Multipl' => $a * $b,
        'Division' => $a / $b,
    );
    if (is_callable($callback)) {
        call_user_func($callback, $result);
    } else {
        return "Not callable";
    }
}
sum(15, 15, function ($input) {
    print_r($input);
    echo "<br>";
    echo $input['Division'];
});

echo "<hr>";

function name(string $name = null, $callback = null)
{
    $result = array(
        'upperCase' => strtoupper($name),
        'lowerCase' => strtolower($name),
    );
    if (is_callable($callback)) {
        call_user_func($callback, $result);
    } else {
        echo "Is not callable!";
    }
}
name("Amir", function ($res) {
    print_r($res);
    echo "<br>";
    echo $res['upperCase'];
});

/*function doLogin(string $name = null, string $uName = null, string $pWord = null): string
{
$userName = "AmiR";
$passWord = "Amir1382";
if ($userName == $uName && $passWord == $pWord) {
return "Welcome $name";
} else {
return "Invalid username or password";
}

}
echo doLogin("Negan", "AmiR", "Amir1382");
echo "<hr>";

function test(&$num)
{
$num++;
return $num * 2;
}
$num = 5;
$num = test($num);
echo $num;
echo "<br>";

function add(int $x, int $y)
{
return $x + $y;
}
echo add(1.5, 2.5);
echo "<br>";

$test = function (string $name): string {
return "hello $name";
};
echo $test("Amir♥");

function sum()
{
$args = func_get_args();
$jam = 0;
for ($i = 0; $i < sizeof($args); $i++) {
$jam += $args[$i];
}
return $jam;
}
echo (sum(3, 4, 5, 7));

echo "<hr>";
$msg = "Hello World!";
$num = 12;
function Message($msg)
{
$num = 13;
global $num;
$msg = "Hello";
return $num;
}
echo "$msg <br>";
echo Message($msg) . "<br>";
echo "$msg <br>";
echo Message($msg);
echo "<br>";

function sayHello($name)
{
return "$name Hello!";
}
echo sayHello("Amir");
echo "<br>";

function incre(&$i)
{
return $i++;
}
$k = "amir";
echo incre($k);
echo "<br>";
echo $k;
echo "<br>";

function Sum2(float $a, int $b): float
{
return $a + $b;
}
echo Sum2(2.3, 5);*/
