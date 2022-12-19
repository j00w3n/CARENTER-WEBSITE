<?php
include_once "config.php";
$vehicleID = $_POST['vehicleID'];
$fname = $_POST['firstname'];
$lname =  $_POST['lastname'];
$quantity = $_POST['quantity'];

if(!empty($vehicleID)){
   if(!empty($fname)){
         if(!empty($lname)){
             if(!empty($quantity)){

            if(mysqli_connect_error())
            {
              die('Connect Error('.mysqli_connect_errno().')' .mysqli_connect_error());
            }
            else
            {
              $sql = "INSERT INTO vehicle(vehicleID, vehicleBrand, vehicleModel, quantity)
              values ('$vehicleID','$fname','$lname','$quantity')";
              if($conn ->query($sql))
              {
                header("Refresh: 0; url=carlist.php");
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
echo "Car quantity should not be empty";
die();
}
  }
else{
  echo "Car Model should not be empty";
  die();
}
  }
else{
echo "Car Brand should not be empty";
die();
}
}
else{
echo "Car ID should not be empty";
die();
}
?>
