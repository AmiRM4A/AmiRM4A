<?php
include "config.php";
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    $_SESSION['method'] = 'Unknown Request, Please try again...';
    header("Location: index.php");
    exit;
} else {
    if (empty($_POST['userEmail'])) {
        $_SESSION['register']['email'] = 'Please enter your email';
        header("Location: index.php");
        exit;
    } else {
        $_SESSION['register']['clientEmail'] = $_POST['userEmail'];
    }
    if (empty($_POST['userPassword'])) {
        $_SESSION['register']['password'] = 'Please enter your password';
        header("Location: index.php");
        exit;
    } else if (strlen($_POST['userPassword'] <= 8)) {
        $_SESSION['register']['password'] = 'You password must be 8 charectors';
        header("Location: index.php");
        exit;
    }
    if (empty($_POST['userEmail'])) {
        $_SESSION['login']['email'] = 'Please enter your email';
        header("Location: login.php");
        exit;
    } else {
        $_SESSION['login']['clientEmail'] = $_POST['userEmail'];
    }
    if (empty($_POST['userPassword'])) {
        $_SESSION['login']['password'] = 'Please enter your password';
        header("Location: login.php");
        exit;
    } else if (strlen($_POST['userPassword'] <= 8)) {
        $_SESSION['login']['password'] = 'You password must be 8 charectors';
        header("Location: login.php");
        exit;
    }
    if (isset($_POST['Register'])) {
        if ($_POST['userEmail'] == $_SESSION['data']['email']) {
            $_SESSION['register']['simEmail'] = 'This email already exist! try anotherone...';
            header("Location: index.php");
            exit;
        }
        $_SESSION['data']['email'] = $_POST['userEmail'];
        $_SESSION['data']['password'] = $_POST['userPassword'];
        $_SESSION['register']['reg'] = 'Welcome You Have Registerd';
        header("Location: index.php");
        exit;
    } else if (isset($_POST['Login'])) {
        if ($_POST['userEmail'] === $_SESSION['data']['email'] && $_POST['userPassword'] === $_SESSION['data']['password']) {
            $_SESSION['login']['loggedIn'] = 'Login successfull';
            header("Location:login.php");
            exit;
        } else {
            $_SESSION['login']['wrongfield'] = 'Wrong email or password, Please check fields...';
            header("Location: login.php");
            exit;
        }
    } else { //It has to back to where it comes (not to main page (register page) )
        $_SESSION['login']['method'] = 'Unknown request';
        $_SESSION['register']['method'] = 'Unknown request';
        header("Location:index.php");
        exit;
    }
}
