<?php
    include_once "config.php";

    $id = $_GET['id'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $quantity = (int) $_POST['quantity'];

    $sql = "UPDATE vehicle SET vehicleBrand='$brand',vehicleModel='$model', quantity='$quantity' WHERE  vehicleID='$id'";
    if(mysqli_query($conn,$sql))
        $_SESSION['success'] = "Record updated succesfully.";
    else
        $_SESSION['failed'] = "Error updating record!";
        
    header('location: carlist.php');    
?>