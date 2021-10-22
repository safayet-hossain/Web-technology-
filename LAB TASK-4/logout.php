<?php
 
 session_start();
 if($_COOKIE['status']=="OK")
 {
    setcookie('status', "OK", time()-36000, '/');
    header("location:login.php");
 }
 else
 {
    header("location:login.php");
 }

?>