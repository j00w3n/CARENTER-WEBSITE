<?php
    require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include 'profile.css'?></style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Profile</title>
</head>
<body>
<?php include 'nav.php' ?>
<div class="container ">
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs nav nav-pills nav-justified" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#profile">Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#rental">Rental History</a>
    </li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div id="profile" class="container tab-pane active"><br><br> <br><br>
      <h3>Your Profile</h3>
      <form action="update.php" method="post">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="customerID" id="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" name="customerPass" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="customerPhoneNumber" id="phoneNo" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <input type="submit" value="SAVE">
            </div>
        </form>

    </div>
    <br> <br>
    <div id="rental" class="container tab-pane fade"><br> <br><br><br>
      <h3>Rental History</h3>    <br>
    <main>

        <!--MDB Tables-->
        <div class="container">
            <div class="card mb-4">
                <div class="card-body">
                    <!--Table-->
                    <table class="table table-striped">
                        <!--Table head-->
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Rental Date</th>
                                <th>Start Time</th>
                                <th>Return Time</th>
                                <th>Vehicle ID</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <!--Table head-->
                        <!--Table body-->
                        <?php
                        $customerID = $_SESSION['username'];
                        $sql = "SELECT * from rental WHERE customerID='$customerID'";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)):?>
                            <tbody>
                                <tr>
                                  <td><?php echo $_SESSION['username'];?></td>
                                  <td><?php echo $row['rentalDate'];?></td>
                                  <td><?php echo $row['rentalStartTime'];?></td>
                                  <td><?php echo $row['rentalReturnTime'];?></td>
                                  <td><?php echo $row['vehicleID'];?></td>
                                  <td><?php echo $row['status'];?></td>
                            </tr>
                        </tbody>
                        <?php endwhile;?>
                        <!--Table body-->
                    </table>
                    <!--Table-->
                </div>
            </div>
        <!--MDB Tables-->
    </main>
    </div>
  </div>
</div>

<?php include 'footer.php' ?>
</body>
</html>
