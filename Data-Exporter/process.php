<?php

use Exporter\Export;

session_start();
include_once 'vendor/autoload.php';
Sentry\init(['dsn' => 'https://7fd1c4a9d9e6469685f38b60c24b5a2e@o4504853763588096.ingest.sentry.io/4504853766471680']);

include './autoload.php';
$_SESSION['Form'] = [];
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['Form']['Message'] = 'Invalid RequestMethod, Try again...';
} elseif (empty($_POST['Title']) || !is_string($_POST['Title']) || empty($_POST['Content']) || !is_string($_POST['Content'])) {
    $_SESSION['Form']['Message'] = 'Empty Fileds, Try again...';
} else {
    $className = 'Exporter\\' . $_POST['Format'] . 'Exporter';
    $exporter = new $className($_POST['Title'], $_POST['Content']);
    $exporter->Export();
    $_SESSION['Form']['Message'] = file_exists($_SESSION['Form']['CreationPath']) ? '<b>' . $_POST['Title'] . '</b>' . ' Succesfully Created...' : 'Couldnt Create Your File!';
}
header('Location: index.php');
