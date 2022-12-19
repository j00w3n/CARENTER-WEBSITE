<?php
    require_once "config.php";

    if (!isset($_SESSION['username'])) {
        header('location: login_admin.php');
        $_SESSION['error'] = "You must log in first";
    }
?>
<!DOCTYPE html>
<html lang="en">
<style><?php include 'form.css'?></style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carenter||RENT FORM</title>
  <style><?php include 'form.css';?></style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
  .navbar {
    margin-bottom: 0;
    border-radius: 0;
  }

.carousel-inner img {
    width: 100%; /* Set width to 100% */
    margin: auto;
    min-height:200px;
}

/* Hide the carousel text when the screen is less than 600 pixels wide */
@media (max-width: 600px) {
  .carousel-caption {
    display: none;
  }
}
</style>
<body>
    <div class="wrapper">
    <?php include 'nav.php'?>
    <img class="image" src="HOWTORENT.png" alt="banner">
    <div class="container">
      <?php
        $vehicleID = $_GET['vehicleID'];
        if($vehicleID=='V01'){
          $carName="HONDA-CRV";
        }
        if($vehicleID=='V02'){
          $carName="HONDA-CIVIC";
        }
        if($vehicleID=='V03'){
          $carName="PERODUA-MYVI";
        }
        if($vehicleID=='V04'){
          $carName="PERODUA-ALZA";
        }
        if($vehicleID=='V05'){
          $carName="PROTON-IRIZ";
        }
        if($vehicleID=='V06'){
          $carName="PROTON-SAGA";
        }
      ?>
        <h2>START YOUR <span>RENT NOW</span></h2>
        <p>Fill the form below</p>
        <form action="formsubmit.php" method="post">
         <table style="margin-top:35px;">
        <tr>
            <td><label for="customerID"></label>Customer ID</td>
            <td><input type="text" name="customerID" value=<?php echo $_SESSION['username'];?> disabled></td>
            <td><input type="text" name="customerID" value=<?php echo $_SESSION['username'];?> hidden></td>
        </tr>
        <tr>
            <td><label for="rentalDate"></label>Date</td>
            <td><input type="date" name="rentalDate" placeholder="Rental Date"></td>
        </tr>
        <tr>
            <td><label for="rentalStartTime"></label>Start</td>
            <td><input type="time" name="rentalStartTime" placeholder="From"></td>
        </tr>
        <tr>
            <td><label for="rentalReturnTime"></label>End</td>
            <td><input type="time" name="rentalReturnTime" placeholder="Until"></td>
        </tr>
        <tr>
            <td><label for="vehicleID"></label>Rent</td>
            <td><input type="text" name="vehicleName" value=<?php echo $carName;?> disabled></td>
            <td><input type="text" name="vehicleID" value=<?php echo $vehicleID;?> hidden></td>
        </tr>
		<tr>
			<td><input type="submit" value="submit" id="submit" ></td>
		</tr>
    </table>
    </form>
    </div>
    </div>
</body>

</html>
