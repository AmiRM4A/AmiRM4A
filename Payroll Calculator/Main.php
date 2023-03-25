<?php

include_once 'Models/Calculator.php';
include_once 'Models/CRUD.php';

use Models\Calculator\Calculator;
$_SESSION['Payroll'] = [];
$_SERVER['REQUEST_METHOD'] = 'POST';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['Payroll']['output'] = 'Invalid Request...';
} elseif (empty($_POST['name']) || empty($_POST['hourly-rate']) || empty($_POST['hours'])) {
    $_SESSION['Payroll']['output'] = 'Empty Fields...';
} else {
    Calculator::Calculate(
        (float) $_POST['hourly-rate'],
        (float) $_POST['hours'],
        (float) $_POST['taxRate']
    );
    $crud = new CRUD();
    $crud->Insert(
        $_POST['name'],
        (float) $_POST['hourly-rate'],
        (float) $_POST['hours'],
        (float) $_POST['taxRate']
    );
}
header('Location: index.php');
exit;