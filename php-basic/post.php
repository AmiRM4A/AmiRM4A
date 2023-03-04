<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post method</title>
    <style>
        form {
    width: 30%;
    background-color: #efefef;
    margin: 0 auto;
    padding: 30px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    border: 1px solid rgb(190, 190, 190);
    border-radius: 5px;
    font-size: 13px;
}

    form>label>input {
    width: 100%;
    margin: 5px 0;
    padding: 5px 5px;
    border: none;
    outline: none;
    border-radius: 5px;
}

    form>input {
    width: 50%;
    background-color: #04AA6D;
    color: #FFF;
    border: none;
    border-radius: 5px;
    display: block;
    margin: 10px auto 0;
    padding: 5px;
    cursor: pointer;
}
</style>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['send'])) {
        if (!empty($_POST['name']) && !empty($_POST['age'])) {
            echo "Welcome" . $_POST['name'];
        } else {
            echo "<script>alert('Please fill all fields!')</script>";
        }
    }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <label for="userName">Name
        <input type="text" id="userName" name="name" placeholder="Your name...">
    </label>
    <br>
    <label for="userAge">Age
        <input type="number" id="userAge" name="age"
        placeholder="Your age...">
    </label>
    <br>
    <input type="submit" value="Send!" name="send">
</form>

</body>
</html>