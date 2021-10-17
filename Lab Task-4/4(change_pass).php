<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php


   
   $cpassword=$npassword=$rnpassword="";
   $cpasswordErr=$npasswordErr=$rnpasswordErr="";

   

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
     if (empty($_POST["cpassword"])) {
       $cpasswordErr = "Current Password is required";
     }
     else {
      $cpassword = $_POST["cpassword"];

       if (strcmp($cpassword,$_SESSION['password'])) {
          $cpasswordErr = "Incorrent Password";
        }

        }

        if (empty($_POST["npassword"])) {
          $npasswordErr = "New Password is required";
        }
        else {
         $npassword = $_POST["npassword"];

          if (!strcmp($npassword,$_SESSION['password'])) {
             $npasswordErr = "Current and New Password can not be same.";
           }

           }

           if (empty($_POST["rnpassword"])) {
             $rnpasswordErr = "Retype New Password is required";
           }
           else {
            $rnpassword = $_POST["rnpassword"];

             if (strcmp($npassword,$rnpassword)) {
                $rnpasswordErr = "Retype password and New Password need to be same.";
              }

              }

     





   function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
   }
 }


   



    ?>

   


 
    
    <form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Current Password: <input type="text" name="cpassword" value="<?php echo $cpassword;?>">
        <span class="error">* <?php echo $cpasswordErr;?></span>
        <br><br>
        <span style="color:green">New Password:</span>
        <input type="text" name="npassword" value="<?php echo $npassword;?>">
        <span class="error">* <?php echo $npasswordErr;?></span>
        <br><br>
        <span style="color:Red">Retype New Password:</span>
        <input type="text" name="rnpassword" value="<?php echo $rnpassword;?>">
        <span class="error">* <?php echo $rnpasswordErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br>



    </form>

    <?php
    include('foot.php');
     ?>
  </body>
</html>