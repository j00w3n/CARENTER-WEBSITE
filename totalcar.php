<?php

include_once "config.php";
//adding new visitors
$total_account=$_SERVER['REMOTE_ADDR'];

//checking if visitor is unique
$query= "SELECT * FROM rental WHERE rentalID='$total_account'";
$result= mysqli_query($conn, $query);

//retriving existing visitors
$query= "SELECT * FROM rental";
$result= mysqli_query($conn, $query);

//checking query error
if(!$result){
  die("Retriving Query Error<br>".$query);
}
$total_car=mysqli_num_rows($result);
?>
