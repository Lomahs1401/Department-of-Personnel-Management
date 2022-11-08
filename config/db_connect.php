<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dulieu999";

    // Create connection
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    
    // Check if the connection succeeded
    if (!$connection) {
        echo 'Connection failed: ' . mysqli_connect_error();
    }

?>