<?php
session_start();

    if(isset($_POST['submit'])){

        $uname 		= $_POST['username'];
        $password 	= $_POST['password'];
        if(empty($uname) || empty($password)){
            echo "null submission";

        }
        else if( isset($_COOKIE['uname']) && isset($_COOKIE['password'])){
            
            if($uname == $_COOKIE['uname'] && $password == $_COOKIE['password']){
                
                if(isset($_POST['checkRemember']))
                {
                  setcookie('checkRemember',$_POST['checkRemember'], time()+3600, '/');
                  setcookie('uname', $uname, time()+315360000, '/');
                  setcookie('password', $password, time()+315360000, '/');
                  setcookie('status', "always ok", time()+315360000, '/');
                  header('location: dashboard.php');
               }
               else
               {
                    setcookie('status', "OK", time()+3600, '/');
                    setcookie('checkRemember', $_POST['checkRemember'], time()-315360000, '/');
                    header('location: dashboard.php');

               }
            }
            else{
                echo "Invalid username/password";
            }
            
        }
        else{
            echo "Record not found!";
        }
}



else{
    header("location: login.php");
}

?>