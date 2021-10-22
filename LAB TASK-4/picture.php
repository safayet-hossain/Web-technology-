<?php
    
    session_start();

    if(isset($_REQUEST['submit']))
    {
        if(!isset($_REQUEST['picture']))
        {
            echo "No picture selected";
        }
        else
        {
            setcookie('picture',$_REQUEST['picture'], time()+36000,"/");
            setcookie('pic', "image/Pidgin.png", time()+36000,"/");
            setcookie('updated', "updated", time()+36000,"/");
            header("location:profile.php");
        }
    }
    else
    {
        header("location:profile.php");
    }


?>