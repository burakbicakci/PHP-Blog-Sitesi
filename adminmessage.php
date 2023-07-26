

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="shortcut icon" href="assets/img/icon/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
    <link rel="stylesheet" href="assets/css/styleadmin.css">
</head>

<body>

    <header>
        <div class="container">
            <div class="header-wrapper mt-5">
                <div class="row header-content">
                    <div class="header-title col-md-8">
                    <a href="index.php">Blog Title</a>
                    </div>
                    <div class="header-menu col-md-4">
                        <ul style="margin-right: 150px;">
                            
                            <li>
                                <a href="adminpage.php">Home</a>
                            </li>
                            <li>
                                <a href="adminblog.php">Blog</a>
                            </li
                            <li>
                                <a href="index.php">Logout</a>
                            </li>
                        </ul>
                    
                    </div>
                </div>
            </div>
        </div>
    </header> 

<?php


$pdo = new PDO('sqlite:messages.db');

 $sql = "SELECT * FROM messages";
 
 $stmt = $pdo->prepare($sql);
 $stmt->execute();
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo "<br>";
        echo "<br>";
        echo "<hr>";
         echo "<h3>Messages Table</h3>";

          foreach ($messages as $message) {
        
        echo "<li>"."Name: "  .$message['name'] . "<br>" ;
        echo "<li>"."Email: " . $message['email'] . "<br>";
        echo "<li>"."Subject: " . $message['subject'] . "<br>";
        echo "<li>"."Message: " . $message['message'] . "<br><br>";

    }

?> 