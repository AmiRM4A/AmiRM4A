<?php
include "session.php";
echo $_SESSION['userName'];
echo "<hr>";
$_SESSION['userName'] = "Ata";
echo $_SESSION['userName'];
