<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <form id="signup" action="validate.php" method="POST">
            <div class="header">
                <h3>Sign Up</h3>
                <p>You want to fill out this form</p>
            </div>
            <div class="sep"></div>
            <div class="inputs">
                <input type="email" placeholder="e-mail" autofocus name="email" />
                <input type="password" placeholder="Password" name="password" />
                <div class="checkboxy">
                    <input name="cecky" id="checky" value="1" type="checkbox" /><label class="terms">I accept the terms
                        of use</label>
                </div>
                <input type="submit" id="submit" value="SIGN UP" />
            </div>
        </form>
        <?php
include "config.php";
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
    </div>

</body>

</html>