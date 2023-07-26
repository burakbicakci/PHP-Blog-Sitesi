<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    
    <link rel="shortcut icon" href="assets/img/icon/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
    
    <link rel="stylesheet" href="css/style.css">
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
                        <ul>
                        <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="blog.php">Blog</a>
                            </li>
                            <li>
                                <a href="about.php">About</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact</a>
                            </li>
                            <li>
                                <a href="login.php">Admin Login</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!--  -->
    <div class="blog-post-wrapper">
        <div class="container mt-4">
            <div class="blog-post-container">
                <div class="blog-post-top-title">
                    Blog
                </div>
                <div class="blog-post-row">
                    <div class="row">
                             
                            <?php
                            $pdo = new PDO('sqlite:blog.db');
                            $sql = "SELECT * FROM blog";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute();
                            $blog = $stmt->fetchAll(PDO::FETCH_ASSOC);
                           
                           
                         foreach ($blog as $blog) {
                                echo "<a href='blogpost.php' class='blog-a'>";
                                echo "<div class='blog-post'>";
                                echo "<div class='blog-post-thumbnail'>";
                                echo "<img src='assets/img/thumbnail.png' alt='' srcset=''>";
                                echo "</div>";
                                echo "<div class='blog-post-text'>";
                                echo "<div class='blog-post-title'>";
                                echo $blog['subject'];
                                echo "</div>";
                                echo "<div class='blog-post-description'>";
                                echo $blog['postadmin'];
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</a>";
                            }    
                            


                            ?>
                            

                    </div>
                </div>
            </div>
        </div>
    </div>-


</body>

</html>


