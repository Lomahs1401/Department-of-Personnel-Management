<?php 
    include ('../config/db_connect.php');

    session_start();

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == "" || $password == "") {
            header("Location: sidebar_left.php");
        }
        $sql = "SELECT * FROM `admin` WHERE username = '$username' AND `password` = '$password';";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) == 0) {
            header("Location: sidebar_left.php");
        } else {
            $_SESSION['login']['username'] = $username;
            $_SESSION['login']['password'] = $password;
            header("Location: sidebar_left.php");
        }
        mysqli_free_result($result);
        mysqli_close($connection);
    }

?>