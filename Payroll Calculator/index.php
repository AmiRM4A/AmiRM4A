<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>Employee Payroll Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Employee Payroll Calculator</h1>
        <form action="Main.php" method="POST">
            <label for="name">Employee Name:</label>
            <input type="text" id="name" name="name">
            <label for="hourly-rate">Hourly Rate:</label>
            <input type="number" id="hourly-rate" name="hourly-rate">
            <label for="hours">Total Hours Worked:</label>
            <input type="number" id="hours" name="hours">
            <label for="tax-rate">Tax Rate (%):</label>
            <input type="number" id="tax-rate" name="tax-rate">
            <button type="submit">Calculate</button>
        </form>
        <div class="output">
            <?php
if (isset($_SESSION['Payroll']['output'])) {
    echo $_SESSION['Payroll']['output'];
    session_destroy();
}
?>
        </div>
    </div>

    <!-- <script src="app.js"></script> -->
</body>

</html>