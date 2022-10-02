<?php

$names = array(
    'reza', 'ali', 'mahdi', 'ali',
);

foreach ($names as $value) {
    if ($value == 'ali') {
        echo "$value Found!<br>";
        echo "<br>";
    } else {
        echo "Not found!";
    }
}

exit();
function numbers(int $a = null, int $b = null, $callback = null)
{
    $array = array(
        'number1' => $a,
        'number2' => $b,
        'result' => null,
    );
    if (is_callable($callback)) {
        call_user_func($callback, $array);
    } else {
        "Please enter callbackable argument!";
    }
}

// Sum
function jam(int $a, int $b)
{
    numbers($a, $b, function ($sum) {
        echo $sum['result'] = ($sum['number1'] + $sum['number2']);
    });
}

// Minus
function tafrigh(int $a, int $b)
{
    numbers($a, $b, function ($minus) {
        echo $sum['result'] = ($minus['number1'] - $minus['number2']);
    });
}

// Multiple
function zarb(int $a, int $b)
{
    numbers($a, $b, function ($multiple) {
        echo $sum['result'] = ($multiple['number1'] * $multiple['number2']);
    });
}

// Divide
function taqsim(int $a, int $b)
{
    numbers($a, $b, function ($divide) {
        echo $sum['result'] = ($divide['number1'] / $divide['number2']);
    });
}

// jam(20, 30);
// echo "<hr>";

// tafrigh(20, 30);
// echo "<hr>";

// zarb(20, 30);
// echo "<hr>";

// taqsim(20, 30);
// echo "<hr>";

function YeKariBokon($a, $b, $callback)
{
    if (is_callable($callback)) {
        return call_user_func($callback, $a, $b);
    }
    return null;
}

$funcs = array(
    'jam' => function ($number1, $number2) {
        return $number1 + $number2;
    },
    'tafrigh' => function ($number1, $number2) {
        return $number1 - $number2;
    },
    'zarb' => function ($number1, $number2) {
        return $number1 * $number2;
    },
    'taqsim' => function ($number1, $number2) {
        return $number1 / $number2;
    },
);

$results = [];
foreach ($funcs as $key => $func) {
    $results[$key] = YeKariBokon(20, 30, $func);
}
var_dump($results);
