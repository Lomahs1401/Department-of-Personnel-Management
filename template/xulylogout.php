<?php 
    session_start();
    session_unset();
    session_destroy();
    // unset($_SESSION['login']);
    header("Location: sidebar_left.php");

    // if (session_destroy()) {
    // }
?>