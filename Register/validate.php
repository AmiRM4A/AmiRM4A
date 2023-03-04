<?php
include "config.php";
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    $_SESSION['msg'] = "UNKNOWN REQUEST, TRY AGAIN!";
    header("Location: index.php");
    exit;
}
if (empty($_POST['email'] || empty($_POST['password']))) {
    $SESSION['msg'] = "PLEASE FILL ALL FIELDS!";
    header("Location: index.php");
    exit;
}
$hostname = "localhost";
$username = "root";
$pw = "";
$database = "users";
$mysql = mysqli_connect($hostname, $username, $pw, $database);
mysqli_errno($mysql);

// $query = "SELECT `Email` FROM `register-data`";
// $mysql_query = mysqli_query($mysql, $query);
// $result = mysqli_fetch_array($mysql_query);
// var_dump($result);

$time = time();
$email = $_POST['email'];
$password = md5($_POST['password'] . $time);
$time = date('Y-m-d H:i:s');
$query = "INSERT INTO `register-data` (`Email`,`Password`,`Register-time`) VALUES ('$email','$password','$time')";
mysqli_query($mysql, $query);