<?php
    include "config.php";

    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $confPass   = $_POST['confirm_password'];
    $custName   = $_POST['name'];
    $custTel    = $_POST['phone'];
    $house      = $_POST['house'];
    $postal     = $_POST['postal'];
    $city       = $_POST['city'];

    
    if ($password != $confPass) {
        $_SESSION['error'] = "The two passwords do not match";
        header('location: register.php');  
    }

    //To check for existing user
    $user_check_query = "SELECT * FROM customers WHERE customerID='$username' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
        if ($user['customerID'] === $username) {
        $_SESSION['error'] = "Username already exists";
        header('location: register.php');  
        }
    }

    //After no error, register the user
    if ($_SESSION['error'] == "") {
        $passwordEncrypted = md5($password);//encrypt the password before saving in the database
  
        $query = "INSERT INTO customers (customerID, customerPass, customerName, customerPhoneNumber, houseLotNum, postalCode, city) 
                  VALUES('$username', '$passwordEncrypted', '$custName', '$custTel', '$house', '$postal', '$city')";
        mysqli_query($conn, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now registered. Please log in.";
        header('location: login-user.php');
    }
?>