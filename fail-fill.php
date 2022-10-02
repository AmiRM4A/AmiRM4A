<!-- <?php echo $_SERVER['PHP_SELF'] ?> -->

<?php
if ($_GET['name'] && $_GET['age']) {
    echo "Welcome" . " " . $_GET['name'];
}
?>