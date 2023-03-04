<?php
include "config.php";
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    $_SESSION['error'] = 'ERROR: Unknown request. Please refresh page and try again!';
    header("Location: index.php");
    exit();
}
if ($_FILES['file']['size'] == 0 || !isset($_FILES['file'])) {
    $_SESSION['error'] = 'ERROR: Please upload your file first';
    header("Location: index.php");
    exit();
}
if ($_FILES['file']['size'] > 5242880) {
    $_SESSION['error'] = "Check your file size (MAX => 5MB)";
    header("Location: index.php");
    exit();
}
echo "<pre>";
var_dump($_FILES);
echo "</pre>";
$FileName = explode('.', $_FILES['file']['name']);
$FileFormat = strtolower(end($FileName));
$Formats = array('rar', 'zip', 'jpg', 'txt', 'pdf');
if (!in_array($FileFormat, $Formats)) {
    $_SESSION['error'] = 'ERROR: Choose another file to upload!';
    header("Location: index.php");
    exit();
}
$newFileName = md5(time() . $FileName) . '.' . $FileFormat;
$newPath = 'uploaded-files/' . $newFileName;
if (move_uploaded_file($_FILES['file']['tmp_name'], $newPath)) {
    $_SESSION['success'] = 'Your File Successfully uploaded.';
    header("Location: index.php");
    exit();
}
