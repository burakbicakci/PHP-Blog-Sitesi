<?php
include("bilgiler.php");
session_start();
ob_start();
if(($_POST["username"]==$user) and ($_POST["password"]==$pass)){
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
header("Location:adminpage.php");
}else{
echo "Kullancı Adı veya Şifre Yanlış.<br>";
echo "Giriş sayfasına yönlendiriliyorsunuz.";
header("Refresh: 2; url=login.php");
}
ob_end_flush();
?> 