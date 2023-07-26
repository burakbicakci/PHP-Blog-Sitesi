<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/loginstyle.css">
</head>
<body>
 
        <form action="adminlogin.php" method="POST" class="login-box">
            <div class="login-box">
                <h1>Admin Panel Giriş</h1>
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required class="texta">
                <br>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required class="texta">
                <br>
                <div class="info" style="color: rgb(101, 111, 118); text-align: center;">Username:admin Password:admin</div>
                <br>
                <button type="submit" class="loginbotton" value="Giris">Login</button>
                <label>
                <a href="index.php">Anasayfa</a>

                  
                </label>
              </div>
        </form>

</body>
</html>     