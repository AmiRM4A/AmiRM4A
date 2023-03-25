<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Exporter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header></header>

    <body>
        <div class="main">
            <h1>Data Exporter</h1>
            <form action="process.php" method="POST">
                <input type="text" name="Title" placeholder="Title Here..."><br>
                <textarea name="Content" placeholder="Content Here..."></textarea><br>
                <select name="Format">
                    <option value="Text">Text File</option>
                    <option value="Pdf">PDF File</option>
                    <option value="Json">JSON File</option>
                </select><br>
                <button type="submit" name="submit">Export to File</button>
            </form>
            <?php
session_start();
if (isset($_SESSION['Form']['Message'])) {
    echo "<div class='Msg'>";
    echo $_SESSION['Form']['Message'];
    echo "</div>";
    debug_print_backtrace();
    session_destroy();
}
?>
            <span>Designed with ♥ By <a href="http://t.me/Amir_M4A">Amir</a></span>
        </div>
    </body>
    <footer></footer>
</body>

</html>