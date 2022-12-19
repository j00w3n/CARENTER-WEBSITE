<?php
    include "config.php";

    $id = $_GET['id'];
    $sql = "UPDATE rental SET status='DECLINED' WHERE rentalID='$id'";
    if(mysqli_query($conn,$sql)){
        echo "<h1>DECLINE SUCCESSFULLY</h1>";
        header("Refresh:1; url=verification.php");
    }
    else{
        echo "<h1>DECLINE ERROR</h1>";
        header("Refresh:3; url=verification.php");
    }
?>