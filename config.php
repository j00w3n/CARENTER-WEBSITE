<?php
    session_start();
    
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "car_rental";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    // Check connection
    if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
    }
?>