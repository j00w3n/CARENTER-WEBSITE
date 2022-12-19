<?php
    include_once "config.php";
    echo ("test");
    $sql = "SELECT v.vehicleID, rv.vehicleID, rv.rentailID, r.rentalID, v.vehicleModel, r.rentalStartDate, r.rentalReturnDate, r.status, r.customerID
            from  vehicle AS v
            INNER JOIN  rentVehicle AS rv ON v.vehicleID=rv.vehicleID
            INNER JOIN rental AS r ON rv.rentalID = r.rentalID
            ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    echo ($row['rentalID']);
?>