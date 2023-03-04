<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploader</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php
include "config.php";
?>
    <div class="background">
        <session>
            <div class="form">
                <form action="uploader.php" method="POST" enctype="multipart/form-data">
                    <p>File Uploader</p>
                    <label for="file">Choose File</label>
                    <input type="file" id="file" name="file">
                    <input type="submit" name="submit">
                </form>
                <?php
if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
    $msg = $_SESSION['error'];
    echo "<div class='error'>$msg</div>";
    unset($_SESSION['error']);
}
if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
    $msg = $_SESSION['success'];
    echo "<div class='success'>$msg</div>";
    unset($_SESSION['success']);
}
?>
            </div>
        </session>
    </div>
</body>
</html>
