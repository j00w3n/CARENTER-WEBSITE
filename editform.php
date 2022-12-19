<?php 
    require_once "config.php"; 
    if (!isset($_SESSION['username'])) {
        $_SESSION['error'] = "You must log in first";
        header('location: login-admin.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include "carform.css";?>
    </style>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
<div class="wrapper">
            <?php
                include "sidebar.php";
                $id = $_GET['id'];
                $sql = "SELECT * from vehicle where vehicleId = '$id'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
            ?>
            <div class="main_content">
                <div class="container">
                    <div class="title">
                        <h1>Edit Car Details <i class="fas fa-car"></i></h1>
                    </div>
                    <form action=<?php echo "editcar.php?id=".$id?> method="POST">
                        <label for="id">Car ID</label>
                        <input type="text" name="id" placeholder=<?php echo $row['vehicleID'] ?> DISABLED>
                        <label for="brand">Car Brand</label>
                        <input type="text" name="brand" placeholder=<?php echo $row['vehicleBrand'] ?> REQUIRED>
                        <label for="model">Car Model</label>
                        <input type="text" name="model" placeholder=<?php echo $row['vehicleModel'] ?> REQUIRED>
                        <label for="quantity">Quantity</label>
                        <input type="number" name="quantity" placeholder=<?php echo $row['quantity'] ?> REQUIRED>
                        <input type="submit" value="SAVE">
                    </form>
                </div>
            </div>
        </div>
</body>
</html>