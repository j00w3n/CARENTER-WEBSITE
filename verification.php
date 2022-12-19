<?php 
    require_once "config.php"; 
    if (!isset($_SESSION['username'])) {
        $_SESSION['error'] = "You must log in first";
        header('location: login-admin.php');
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include "verification.css";?>
        a{
            text-decoration: none;
            color: white;
        }
        a:hover{
            color: black;
        }
    </style>

</head>
    <body><script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

        <div class="wrapper">
            <?php
                  include "sidebar.php"
            ?>
            <div class="main_content">
                    <?php
                        $sql1 = "SELECT * from rental WHERE status='PENDING'";
                        $result1 = mysqli_query($conn,$sql1);
                        $count = mysqli_num_rows($result1);

                        $sql2 = "SELECT 
                                 r.rentalID,
                                 r.customerID,
                                 r.vehicleID, 
                                 r.rentalDate,
                                 r.rentalStartTime,
                                 r.rentalReturnTime,
                                 r.status, 
                                 c.customerID, 
                                 c.customerName, 
                                 c.customerPhoneNumber, 
                                 v.vehicleID, 
                                 v.vehicleBrand, 
                                 v.vehicleModel
                                 FROM rental AS r JOIN customers AS c ON r.customerID = c.customerID
                                 JOIN vehicle AS v ON r.vehicleID = v.vehicleID
                                 ORDER BY
                                    CASE r.status
                                        WHEN 'PENDING' THEN 1
                                        WHEN 'ACCEPTED' THEN 2
                                        ELSE 3
                                    END";
                        $result2 = mysqli_query($conn,$sql2);
                        
                    ?>
                <div class="title">
                    <h1>Rental Verification <i class="fas fa-user-check"></i></h1>
                    Total Request : <?php echo $count;?>
                </div>
                <div class="container container1">
                    <table>
                        <caption>Pending Requests</caption>
                        <thead>
                            <!--<th>Rental ID</th>-->
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Rental Details</th>
                            <th>Status</th>
                        </thead>
                        <?php while($row2 = mysqli_fetch_assoc($result2)):?>
                            <tr class="rental-pending">
                                <!--<td><?php echo $row2['rentalID'];?></td>-->
                                <td><?php echo $row2['customerName'].'('.$row2['customerID'].')';?></td>
                                <td><?php echo $row2['customerPhoneNumber'];?></td>
                                <td>
                                    <?php echo $row2['vehicleBrand'].' '.$row2['vehicleModel'];?><br><br>
                                    <?php echo "Date: ".$row2['rentalDate'];?><br>
                                    <?php echo "From: ".$row2['rentalStartTime']." until ".$row2['rentalReturnTime'];?>
                                </td>
                                <?php if($row2['status']=='PENDING'):?>
                                <td>
                                    <div id="status1">Rental Request Accepted</div>
                                    <div id="status2">Rental Request Declined</div>
                                    <div id="buttons">
                                        <button onclick="myFunc()" class="accept" name="accept"type="submit"><a href=<?php echo "accept.php?id=".$row2['rentalID'];?>>ACCEPT</a></button>
                                        <button onclick="myFunc1()" class="decline" name="decline" type="submit"><a href=<?php echo "decline.php?id=".$row2['rentalID'];?>>DECLINE</a></button>
                                    </div>
                                </td>
                                <?php endif;?>
                                <?php if($row2['status']=='ACCEPTED' || $row2['status']=='DECLINED'):?>
                                    <td><?php echo $row2['status'];?></td>
                                <?php endif;?>
                            </tr>
                        <?php endwhile;?>    
                    </table>
                </div>
            </div>
        </div>
        <script>
            function myFunc(){
                document.getElementById("buttons").style.display="none";
                document.getElementById("status1").style.display="inline";
            }
            function myFunc1(){
                document.getElementById("buttons").style.display="none";
                document.getElementById("status2").style.display="inline";
            }
        </script>
    </body>
</html>