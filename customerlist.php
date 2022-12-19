<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include 'customer.css'?></style><script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
  <?php
  if(isset($_POST['search']))
  {
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `customers` WHERE CONCAT(`customerID`, `customerName`, `customerPhoneNumber`, `houseLotNum`, `postalCode`, `city`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

  }
else {
   $query = "SELECT * FROM `customers`";
   $search_result = filterTable($query);
 }

  //connect with MySQL
  function filterTable($query)
  {
      $con = mysqli_connect("localhost", "root", "", "car_rental" );
      $filter_Result = mysqli_query($con, $query);
      return $filter_Result;
  }

  ?>
<div class="wrapper">
            <?php
                  include "sidebar.php"
            ?>
            <div class="main_content">

                <div class="container">
                    <div class="title">
                        <h1>Searching Customer Account <i class="fas fa-users"></i></h1><br><br>
                        <form action="customerlist.php" method="post">
                          <center>
                            <input type="text" name="valueToSearch" placeholder="ID/Name/PhoneNumber/HouseLot/Postcode/City"><br>
                            <input type="submit" name="search" value="search"><br>
                        </center>
                    </div>
                    <table>
                        <thead>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>PHONE NUMBER</th>
                            <th>HOUSE LOT</th>
                            <th>POSCODE</th>
                            <th>CITY</th>
                        </thead>
                        <?php while($row = mysqli_fetch_array($search_result)):?>
                        <tbody>
                          <tr>
                            <td><?php echo $row['customerID'];?></td>
                            <td><?php echo $row['customerName'];?></td>
                            <td><?php echo $row['customerPhoneNumber'];?></td>
                            <td><?php echo $row['houseLotNum'];?></td>
                            <td><?php echo $row['postalCode'];?></td>
                            <td><?php echo $row['city'];?></td>
                      </tr>
                        </tbody>
                        <?php endwhile;?>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>
