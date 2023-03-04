<?php
$host = "localhost";
$username = "root";
$passw = "";
$database = "test";
$mysqli = new mysqli($host, $username, $passw, $database);

if (!$mysqli) {
    echo "There is an error in connecting to database" . PHP_EOL;
    exit;
} else {
    echo "Successfully connected to $database database!";
}

$q = "SELECT `ID`,`Username`,`Password`,`Email`,`LastIP` FROM `users` WHERE `Username` LIKE 'Amir%'";
$result = $mysqli->query($q);

// echo "<table>";
// while ($row = $result->fetch_assoc()) {
//     echo "<tr>";
//     foreach ($row as $cell) {
//         echo "<td style='border: 1px solid #aaa; padding: 10px;'>";
//         echo $cell;
//         echo "</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";

$stmt = $mysqli->prepare($q);
$stmt->execute();
$stmt->bind_result($ID, $Username, $Password, $Email, $LastIP);

while ($stmt->fetch()) {
    echo "<pre>";
    echo "ID: $ID | UserName: $Username | Password: $Password | Email: $Email | LastIP: $LastIP" . "<hr>";
    echo "</pre>";
}