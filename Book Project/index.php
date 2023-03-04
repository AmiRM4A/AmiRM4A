<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixed Cars</title>
</head>
<body>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "cars";
$link = mysqli_connect($hostname, $username, $password, $db_name);
?>

<div><!-- CarsName + CarsOwner-->
<?php
$query = "SELECT `CarName` , `CarOwner` FROM `fixedcars`";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
echo "<b>-- Fixed Cars + Cars Owner --</b> <br>";
while ($row = mysqli_fetch_array($result)) {
    echo "CarName =>" . ' ' . $row["CarName"] . ' ---- ';
    echo "CarOwner =>" . ' ' . $row["CarOwner"] . "<br>";
}
echo "<hr>";
?>
</div>
<!-- <div>
    <?php
$query = "SELECT `Repaired part` FROM `fixedcars` WHERE `Plate` == 123";
$result = mysqli_query($link, $query);
// $row = mysqli_fetch_array($result);
echo "<b>-- Plate 123 --</b>";
echo $result;

?>
</div> -->

<div>
<?php
$query = "SELECT `CarName` FROM `fixedcars` WHERE `RepPrice`= (SELECT MAX(`RepPrice`) FROM `fixedcars`)";
$result = mysqli_query($link, $query);
echo $result;
?>
</div>

</body>
</html>
