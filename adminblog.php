<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $db = new PDO('sqlite:blog.db');


    $subject = $_POST['subject'];
    $postadmin = $_POST['postadmin'];

    $db->exec("INSERT INTO blog (subject, postadmin) VALUES ('$subject','$postadmin' );") ;


}



?>



<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    
    <link rel="shortcut icon" href="assets/img/icon/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
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
                                <a href="adminmessage.php">Message</a>
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

    <div class="contact-wrapper">
        <div class="container mt-4">
            <div class="contact-container">
                <div class="contact-top-title">
                    Share Blog
                </div>
                <div class="contact-form">
                    <form action="adminblog.php" method="post">
                                    <div class="subject-input">
                                        <input type="text" name="subject" id="subject" placeholder="Subject" style="color: black;" >
                                    </div>
                                    
                                    <div class="post-input">
                                        <textarea name="postadmin" id="postadmin" cols="60" rows="5" placeholder="Post" style="color: black;"></textarea>
                                    </div>
                                    <div class="button-input">
                                        <button type="submit">Share Blog</button>
                                </div>           
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid mt-5"></div>
        <hr>
        </div>
        <div class="container text-center mt-5 mb-5">

        </div>

    </footer>

</body>

</html>