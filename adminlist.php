<?php 
    require_once "config.php"; 
    if (!isset($_SESSION['username'])) {
        $_SESSION['error'] = "You must log in first";
        header('location: login-admin.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin List</title>
    <style>
        <?php
            include "adminlist.css";
            include "sidebar.css"
        ?>
    </style>
    
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
    <?php
        //select $query
        $sql = "SELECT * FROM admin ORDER BY adminID DESC";

        //Execute $query
        $records = mysqli_query($conn, $sql);
    ?>
<div class="wrapper">
            <?php
                  include "sidebar.php"
            ?>
            <div class="main_content">

                <div class="container">
                    <div class="title">
                        <h1>Admin List <i class="fas fa-user-cog"></i></h1>
                    </div>
                    <caption>There are the list of admin of this system</caption>
                    <table>
                        <thead>
                            <th>ID</th>
                            <th>NAME</th>
                        </thead>
                        <?php while($row = mysqli_fetch_array($records)):?>
                        <tbody>
                          <tr>
                            <td><?php echo $row['adminID'];?></td>
                            <td><?php echo $row['adminName'];?></td>
                      </tr>
                        </tbody>
                          <?php endwhile;?>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>