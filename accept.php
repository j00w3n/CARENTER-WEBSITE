<?php
    include "config.php";

    $id = $_GET['id'];
    $sql = "UPDATE rental SET status='ACCEPTED' WHERE rentalID='$id'";

    $sql2 = "SELECT r.rentalID, r.vehicleID, v.vehicleID
             FROM rental AS r JOIN vehicle as V ON r.vehicleID = v.vehicleID
             WHERE r.rentalID='$id'";
    $result2 = mysqli_query($conn,$sql2);
    $row = mysqli_fetch_assoc($result2);
    $vehicleID = $row['vehicleID'];

    $sql3 = "UPDATE vehicle SET quantity=quantity-1 WHERE vehicleID='$vehicleID'";
    if(mysqli_query($conn,$sql)){
        if(mysqli_query($conn,$sql3)){
          echo "<h1>ACCEPT SUCCESSFULLY</h1>";
            header("Refresh:1; url=verification.php");  
        }
}
    else{
        echo "<h1>ACCEPT ERROR</h1>";
        header("Refresh:3; url=verification.php");
    }
?>