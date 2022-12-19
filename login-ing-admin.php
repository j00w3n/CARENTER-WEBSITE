<?php
    require_once 'config.php';

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //if ($_SESSION['error'] == "") {
        $query = "SELECT * FROM admin WHERE adminID='$username' AND adminPass='$password'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1){
          $_SESSION['username'] = $username;
          header('location: dashboard.php');
        }
        else{
            $_SESSION['error'] = "Wrong username/password combination";
            header('location: login-admin.php');
        }
    //}
?>