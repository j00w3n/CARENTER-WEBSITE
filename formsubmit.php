<?php
include_once "config.php";
$customerID = $_POST['customerID'];
$rentalDate = $_POST['rentalDate'];
$rentalStartTime = $_POST['rentalStartTime'];
$rentalReturnTime = $_POST['rentalReturnTime'];
$vehicleID = $_POST['vehicleID'];


if(!empty($customerID)){
  if(!empty($rentalDate)){
   if(!empty($rentalStartTime)){
         if(!empty($rentalReturnTime)){
             if(!empty($vehicleID)){
            if(mysqli_connect_error())
            {
              die('Connect Error('.mysqli_connect_errno().')' .mysqli_connect_error());
            }
            else
            {
              $sql = "INSERT INTO rental(customerID, rentalDate, rentalStartTime, rentalReturnTime, vehicleID, status)
              values ('$customerID','$rentalDate','$rentalStartTime','$rentalReturnTime','$vehicleID','PENDING')";
              if($conn ->query($sql))
              {
                header("Refresh: 0; url=home.php");
                  echo '<script>alert("New Record Sucessfully Inserted"); </script>';
              }
              else
              {
                echo "<font color='white'>Error: ". $sql. "<br>" .$conn -> error;
              }

            //close connection
            $conn -> close();
            }
          }
      else{
      echo "Vehicle ID should not be empty";
      die();
      }
      }
      else{
      echo "Rental Return Time should not be empty";
      die();
      }
      }
      else{
      echo "Rental Start Time should not be empty";
      die();
      }
      }
      else{
      echo "Rental Date should not be empty";
      die();
      }
      }
      else{
      echo "Customer ID should not be empty";
      die();
      }
?>
