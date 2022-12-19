<?php
    require_once 'config.php';

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //if ($_SESSION['error'] == "") {
        $password = md5($password);
        $query = "SELECT * FROM customers WHERE customerID='$username' AND customerPass='$password'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1){
          $_SESSION['username'] = $username;
          header('location: home.php');
        }
        else{
            $_SESSION['error'] = "Wrong username/password combination";
            header('location: login-user.php');
        }
    //}
?>