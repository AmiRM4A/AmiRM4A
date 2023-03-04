<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
<?php
setcookie('user', 'Amir', time() + 5, "/");
echo "<hr>";
echo "<pre>";
var_dump($GLOBALS);
echo "</pre>";
echo "<hr>";
if (isset($_COOKIE['user'])) {
    echo "The coockie has been set.";
} else {
    echo "The cookie has not been set";
}
echo "<hr>";
if (count($_COOKIE) > 0) {
    echo count($_COOKIE) . " " . "Cookie" . " " . "Found!";
} else {
    echo "There is no cookie!";
}
?>
</body>
</html>