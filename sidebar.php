<?php 
    require_once "config.php";
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login-admin.php");
    } 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include "sidebar.css";?></style>
</head>
<body>
    <div class="sidebar">
            <h2>CAR<span>ENTER</span></h2>
            <p id="admin">Admin Side</p>
            <ul>
                <li><a href="dashboard.php"><i class="fas fa-home"></i>Dashboard</a></li>
                <li><a href="verification.php"><i class="fas fa-user-check"></i>Rental Verification</a></li>
                <li><a href="carlist.php"><i class="fas fa-car"></i>Add/Remove Car</a></li>
                <li><a href="customerlist.php"><i class="fas fa-users"></i>Customer Account</a></li>
                <li><a href="adminlist.php"><i class="fas fa-user-cog"></i>Admin List</a></li>
                <li><a href="dashboard.php?logout='1'"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
            </ul> 
      </div>
</body>
</html>
