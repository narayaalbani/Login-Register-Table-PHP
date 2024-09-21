<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: auth");
    exit();
}

define('BASEPATH', true);
?>

<!DOCTYPE html>
<html lang="en">

<?php include('head.php') ?>

<body>
    <?php include('navbar.php') ?>
    <?php include('offcanvas.php') ?>
    <?php include('footer.php') ?>
    <?php include('script.php') ?>
</body>

</html>