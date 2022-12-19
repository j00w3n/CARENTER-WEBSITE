<?php
    include_once "config.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM vehicle WHERE  vehicleID='$id'";
    if(mysqli_query($conn,$sql))
        $_SESSION['success'] = "Record updated succesfully.";
    else
        $_SESSION['failed'] = "Error updating record!";
        
    header('location: carlist.php');    
?>