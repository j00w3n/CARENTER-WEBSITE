<?php 
    require_once "config.php"; 
    if (!isset($_SESSION['username'])) {
        $_SESSION['error'] = "You must log in first";
        header('location: login-admin.php');
    }
    if(isset($_SESSION['success'])){
        echo "<script>alert('Record updated succesfully.')</script>";
        unset($_SESSION['success']);
    }
    if(isset($_SESSION['failed'])){
        echo "<script>alert('Error updating record!')</script>";
        unset($_SESSION['failed']);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include "carlist.css";?>
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
                        <h1>Car Management <i class="fas fa-car"></i></h1>
                    </div>
                    <caption>Click "Edit" to Update the car details</caption>
                    <table>
                        <thead>   
                            <th>Car ID</th>
                            <th>Car Brand</th>
                            <th>Car Model </th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </thead>
                        <?php 
                        $sql = "SELECT * from vehicle";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)):?>
                            <tbody>
                                <tr>
                                <td><?php echo $row['vehicleID'];?></td>
                                <td><?php echo $row['vehicleBrand'];?></td>
                                <td><?php echo $row['vehicleModel'];?></td>
                                <td><?php echo $row['quantity'];?></td>
                                <td><a href=<?php echo "editform.php?id=".$row['vehicleID']?>>EDIT</a><button><a href=<?php echo "deletecar.php?id=".$row['vehicleID']?>><i class="fas fa-trash" >Delete</a></button></td>
                            </tr>
                        </tbody>
                        <?php endwhile;?>
        
                    </table>
                    <a href="carform.php" class="addrow">Add Car <i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
</body>
</html>
