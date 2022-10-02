<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <!-- <script>
        function isItEmpty(){
            var clientEmail = document.getElementById("Email").value;
            var clientPassword = document.getElementById("Password").value;
            if(clientEmail == '' || clinetPassword == ''){
                alert('Please check fields and try again!');
            }else{
                var conf = confirm('You sure to continue?');
                if(conf==true){
                    document.register.submit();
                }
            }
        }
    </script> -->
    <?php
include "config.php";
$Email = null;
$Password = null;
$ClientEmail = null;
$SimilarEmail = null;
$Reg = null;
$Method = null;
if (isset($_SESSION['register']['email'])) {
    $Email = $_SESSION['register']['email'];
    unset($_SESSION['register']['email']);
}
if (isset($_SESSION['register']['password'])) {
    $Password = $_SESSION['register']['password'];
    unset($_SESSION['register']['password']);
}
if (isset($_SESSION['register']['clientEmail'])) {
    $ClientEmail = $_SESSION['register']['clientEmail'];
    unset($_SESSION['register']['clientEmail']);
}
if (isset($_SESSION['register']['simEmail'])) {
    $SimilarEmail = $_SESSION['register']['simEmail'];
    unset($_SESSION['register']['simEmail']);
}
if (isset($_SESSION['register']['reg'])) {
    $Reg = $_SESSION['register']['reg'];
    unset($_SESSION['register']['reg']);
}
if (isset($_SESSION['register']['method'])) {
    $Method = $_SESSION['register']['method'];
    unset($_SESSION['register']['method']);
}
?>
    <div class="container">
        <div class="login">
            <div class="circle circle-1"></div>
            <div class="circle circle-2"></div>
            <h1>ثبت نام</h1>
            <form action="validate.php" method="POST">
                <input type="email" name="userEmail" id="Email" placeholder="ایمیل" value="<?php echo $ClientEmail; ?>">
                <span><?php echo $Email;
echo $SimilarEmail; ?></span>
                <input type="password" name="userPassword" id="Password" placeholder="رمز عبور">
                <span><?php echo $Password; ?></span>
                <input type="submit" name="register" value="ثبت نام">
                <a href="login.php">ورود</a>
                <a href="#">پشتیبانی</a>
                <span> <?php echo $Reg; ?></<span>
                <span> <?php echo $Method; ?></span>
                <input type="hidden" name="Register">
            </form>
        </div>
    </div>
</body>
</html>
