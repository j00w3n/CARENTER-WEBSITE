<?php 
    include_once "config.php";
    if(isset($_SESSION['error'])){
        $error = $_SESSION['error'];
        echo "<script>alert('$error')</script>";
        unset($_SESSION['error']);
        unset($error);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include "login.css";?></style>
    
</head>
<body>
    <div class="wrapper">
        <div class="login login-reg4">
            <div class="title">
                <p>Welcome to</p>
                <h2>CAR<span>ENTER</span></h2>
            </div>
            <div class="user"><p>User Registration</p></div>
            <form action="registering.php" method="post">
                <div class="input-user">
                <input type="text" name="username" value="" placeholder="Username" Required>
            <input type="password" name="password" value="" placeholder="Password" Required> 
            <input type="password" name="confirm_password" value="" placeholder="Confirm Password" Required> 
            <input type="text" name="name" value="" placeholder="Full Name" Required> 
            <input type="text" name="house" placeholder="House No" Required>
            <input type="text" name="postal" placeholder="Postal Code" Required>
            <input type="text" name="city" placeholder="City" Required>
            <!--
                <label for="city">City:</label>
            <select name="city" id="city">
                <option value="Bukit Bintang">Bukit Bintang</option>
                <option value="Titiwangsa">Titiwangsa</option>
                <option value="Setiawangsa">Setiawangsa</option>
                <option value="Wangsa Maju">Wangsa Maju</option>
                <option value="Batu">Batu</option>
                <option value="Kepong">Kepong</option>
                <option value="Segambut">Segambut</option>
                <option value="Lembah Pantai">Lembah Pantai</option>
                <option value="Seputeh">Seputeh</option>
                <option value="Bandar Tun Razak">Bandar Tun Razak</option>
                <option value="Cheras">Cheras</option>
            </select>
            -->
            <input type="tel" name="phone" value="" placeholder="Phone number (0123456789)" Required> 
            <input type="submit" name="commit" value="Register">
                    <a href="login-user.php"> <-Back to Login</a>
                </div>
            </form>
            <div class="foot">
                <p>Designed by AJAL</p>
            </div>
            <div class="back">
                <a href="index.php">Back</a>
            </div>
        </div>
    </div>
</body>
</html>