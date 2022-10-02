<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
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
                    document.login.submit();
                }
            }
        }
</script> -->
<?php
$Email = null;
$Password = null;
$Wrongfield = null;
$Loggedin = null;
if (isset($_SESSION['login']['email'])) {
    $Email = $_SESSION['login']['email'];
    unset($_SESSION['login']['email']);
}
if (isset($_SESSION['login']['password'])) {
    $Password = $_SESSION['login']['password'];
    unset($_SESSION['login']['password']);
}
if (isset($_SESSION['login']['wrongfield'])) {
    $Wrongfield = $_SESSION['login']['wrongfield'];
    unset($_SESSION['login']['wrongfield']);
}
if (isset($_SESSION['login']['loggedIn'])) {
    $Loggedin = $_SESSION['login']['loggedIn'];
    unset($_SESSION['login']['loggedIn']);
}
?>
<div class="container">
        <div class="Login">
            <div class="circle circle-1"></div>
            <div class="circle circle-2"></div>
            <h1>ورود به پنل کاربری</h1>
            <form action="validate.php" method="POST">
                <input type="email" name="userEmail" id="Email" placeholder="ایمیل">
                <span><?php echo $Email; ?></span>
                <input type="password" name="userPassword" id="Password" placeholder="رمز عبور">
                <span><?php echo $Password; ?></span>
                <input type="submit" value="ورود">
                <a href="index.php">ثبت نام</a>
                <span><?php echo $Wrongfield; ?></span>
                <span><?php echo $Loggedin; ?></span>
                <a href="#">بازیابی رمز</a>
                <input type="hidden" name="Login">
            </form>
        </div>
    </div>
</body>
</html>
