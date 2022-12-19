<?php
include_once "config.php";

  $customerID = $_POST['customerID'];
  $customerPhoneNumber = $_POST['customerPhoneNumber'];
  $customerPass = md5($_POST['customerPass']);


  if(!empty($customerID)){
     if(!empty($customerPhoneNumber)){
           if(!empty($customerPass)){

              if(mysqli_connect_error())
              {
                die('Connect Error('.mysqli_connect_errno().')' .mysqli_connect_error());
              }
              else
              {
                $sql = ("UPDATE customers SET customerPhoneNumber='$customerPhoneNumber', customerPass='$customerPass' WHERE customerID='$customerID'");
                if($conn ->query($sql))
                {
                  header("Refresh: 0; url=profile.php");
                  echo '<script>alert("The Record Sucessfully Updated"); </script>';
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
    echo "Customer Password should not be empty";
    die();
    }
  }
  else{
  echo "Customer Phone Number should not be empty";
  die();
  }
}
else{
echo "Customer ID should not be empty";
die();
}

?>
