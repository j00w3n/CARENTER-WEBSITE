<?php 
    require_once "config.php"; 
    include "totalaccount.php";
    include "totalcar.php";

    if (!isset($_SESSION['username'])) {
        header('location: login_admin.php');
        $_SESSION['error'] = "You must log in first";
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login-admin.php");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        <?php include "dashboard.css";?>
    </style>
</head>
<body><script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
        <?php
              include "sidebar.php"
        ?>
        <div class="main_content">
                  <div class="title">
                      <h1>Dashboard <i class="fas fa-home"></i></h1>
                      <?php echo 'Welcome '.$_SESSION['username'];?>
                  </div>
                          <div class="container container1">
                              <div class="card card2">
                                  <div class="details">
                                      <div class="header"><h3><i class="fas fa-user-circle"></i> Total Account Created</h3></div>
                                      <p><?php echo $total_acc?></p>
                                   </div>
                              </div>
                              <div class="card card3">
                                  <div class="details">
                                      <div class="header"><h3><i class="fas fa-car"></i> Total Car Rented</h3></div>
                                      <p><?php echo $total_car?></p>
                                  </div>
                              </div>
                          </div>
                  <div class="container container2">
                    <div class="notification">
                      <div class="title">
                            <h3>Rental Verification <i class="fas fa-user-check"></i></h3><br>
                            <p>Click 'View' to view the rental request</p>
                            <a class="view" href="verification.php" type="submit">View</a>
                      </div>
                    </div>
                    <div class="notification">
                      <div class="title">
                            <h3>Car Update <i class="fas fa-car"></i></h3><br>
                            <p>Click 'Update' to update products</p>
                            <a class="view" href="carlist.php" type="submit">Update</a>
                      </div>
                    </div>
                  </div>
        </div>
    </div>
</body>
</html>