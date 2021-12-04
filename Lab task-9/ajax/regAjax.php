<?php
include '../Model/dbmanager.php';
// define variables to empty values  
$fname = $lname = $fullname = $gender = $dob = $religion = $praddress = $peaddress  =$phone = $email = $username = $password = "";  
$flag = false;
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  


//String Validation  
    if (empty($_POST["fname"])) 
    {  
        echo " first Name is required"; 
        $flag = True;
    } 
  
    
    if (empty($_POST["lname"])) 
    {  
        echo " Last Name is required";
        $flag = True;  
    } 
     
    if (empty($_POST["fullname"])) 
    {  
        echo " Full Name is required";
        $flag = True;  
    } 
    if (empty($_POST["gender"])) 
    {  
        echo " Gender is required";
        $flag = True;  
    } 
      

    if (empty($_POST["dob"])) 
    {  
        echo " Date of birth is required";
        $flag = True;  
    }  

    if (empty($_POST["religion"])) 
    {  
        echo " Religion is required";
        $flag = True;  
    } 
    if (empty($_POST["Praddress"])) 
    {  
        echo " Present Address is required";
        $flag = True;  
    } 
        if (empty($_POST["Peaddress"])) 
    {  
        echo " Permanent Address is required";
        $flag = True;  
    } 
        if (empty($_POST["phone"])) 
    {  
        echo " Phone number is required";
        $flag = True;  
    } 

    if (empty($_POST["email"])) 
    {  
       echo " Email is required";
       $flag = True;  
    } 

    if (empty($_POST["username"])) 
    {  
       echo " Username is required";
       $flag = True;  
    } 

    if (empty($_POST["password"])) 
    {  
       echo " Password is required";
       $flag = True;  
    } 

    
    if(!$flag) 
    {
      $fname = input_data($_POST["fname"]);
      $lname = input_data($_POST["lname"]);
      $fullname = input_data($_POST["fullname"]);
      $gender = input_data($_POST["gender"]);
      $dob = input_data($_POST["dob"]);
      $religion = input_data($_POST["religion"]);
      $praddress = input_data($_POST["Praddress"]);
      $peaddress = input_data($_POST["Peaddress"]);
      $email = input_data($_POST["email"]);
      $phone = input_data($_POST["phone"]);
      $username = input_data($_POST["username"]);
      $password = input_data($_POST["password"]);

        $res = reg($fname, $lname, $fullname, $gender, $dob, $religion, $praddress, $peaddress,  $phone, $email, $username, $password);
        if($res) {
        header("Location: ../Controller/LoginNew.php");
        }
        else {
        echo "Error while saving.";
        }
    }
}
  function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

?> 