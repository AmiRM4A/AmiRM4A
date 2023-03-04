<?php
include "lib.php";
list($host, $dbname, $username, $password) = ["localhost", "test", "root", ""];
try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $attt = $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echoline("Successfully connected to MySQL..." . "<br>");

} catch (PDOException $Exc) {
    echoline("PDO Error: Failed to connect: " . $Exc->getMessage() . "in line: " . $Exc->getLine());
    exit;
}
echoline("Connection Status => " . $db->getAttribute(PDO::ATTR_CONNECTION_STATUS));

// $q = "INSERT INTO `data` (`username`,`password`,`name`)
// VALUES (?,?,?);
// ";
// $stmt = $db->prepare($q);
// $stmt->execute(['Ata001', 'Atankb', 'Ata']);
// echoline("Insert ID:" . $db->lastInsertId());

// $q = "INSERT INTO `data` (`username`,`password`,`name`)
// VALUES (?,?,?)";
// $users = [
//     ["Imzhra6870", "Zahra1386", "Zahra"],
//     ["Amir_M4A", "Amir1382", "Amir"],
//     ["Elhamaaa", "Elham1382", "Elham"],
// ];
// $db->beginTransaction();
// $stmt = $db->prepare($q);
// foreach ($users as $value) {
//     $stmt->execute($value);
// }
// $db->commit();

// $q = "DELETE FROM `users` WHERE `Password` LIKE :like";
// $stmt = $db->prepare($q);
// $stmt->execute(['like' => '%kos%']);
// echoline($stmt->rowCount() . " Rows affected!");

$q = "SELECT `ID` FROM `users`";
$stmt = $db->prepare($q);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);

foreach ($result as $data) {
    $age = rand(12, 25);
    $q = "UPDATE `users` SET `Age` = $age WHERE `ID` = $data";
    $stmt = $db->prepare($q);
    $stmt->execute();
}