<?php 
    require_once "config.php"; 

    if (!isset($_SESSION['username'])) {
        header('location: login_admin.php');
        $_SESSION['error'] = "You must log in first";
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
                  include "sidebar.php"
            ?>
            <div class="main_content">

                <div class="container">
                    <div class="title">
                        <h1>Add Car <i class="fas fa-car"></i></h1>
                    </div>
                    <form action="addsubmission.php" method="post">
                            <label for="vehicleID">Car ID</label>
                            <input type="text" id="vehicleID" name="vehicleID" placeholder="Car ID">
                            <label for="fname">Car Brand</label>
                            <input type="text" id="fname" name="firstname" placeholder="Car Brand eg. Proton, Perodua, Honda">
                            <label for="lname">Car Model</label>
                            <input type="text" id="lname" name="lastname" placeholder="Car Model eg. Myvi, Waja, Civic">
                            <label for="quantity">Quantity</label>
                            <input type="number" id="quantity" name="quantity" placeholder="Max. 10 unit">
                            <input type="submit" value="ADD CAR">
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
