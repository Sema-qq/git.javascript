<?php
    require_once ('function.php');
    connectDB();
//    $mysqli = new mysqli("localhost", "root", "", "base");
//    $mysqli->query("SET NAMES 'utf8'");

    $name = $_POST['name'];
    $cat = $_POST['cat'];
    $dop = implode(",", $_POST['dop']);

    $success = $mysqli->query("INSERT INTO `auto` (`name`, `body`, `dops`) VALUES ('{$name}', '{$cat}', '{$dop}')");

    echo $success;

    closeDB();
//    $mysqli->close();
?>