<?php

    $mysqli = false;
    function connectDB () {
        global $mysqli;
        $mysqli = new mysqli("localhost", "root", "", "base");
        $mysqli->query ("SET NAMES 'utf-8'");
    }

    function closeDB () {
        global $mysqli;
        $mysqli->close ();
    }

//    $mysqli = new mysqli("localhost", "root", "", "base");
//    $mysqli->query("SET NAMES 'utf-8'");
//
//
//    $mysqli->close();


?>