<?php 
    include_once "config.php";
    if(isset($_SESSION['error'])){
        echo "<script>alert('Wrong username/password combination.')</script>";
        unset($_SESSION['error']);
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
        <div class="login login-reg2">
            <div class="title">
                <p>Welcome to</p>
                <h2>CAR<span>ENTER</span></h2>
            </div>
            <div class="user"><p>admin</p></div>
            <form action="login-ing-admin.php" method="post">
                <div class="input-user">
                    <input type="text" name="username" value="" placeholder="Username">
                    <input type="password" name="password" value="" placeholder="Password">
                    <input type="submit" name="commit" value="Login">
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