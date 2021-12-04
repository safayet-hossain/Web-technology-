<?php
include '../Model/dbhntD.php';
$hotelname = $roomtype = $roomf = $htype = $comp = $hloc = $hprice  =$vehiclemodel = $vehiclearea = $vehicleseat =$vehicledur = $vehiclefee   = $vehicleid = "";   
$flag = false;
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  


//String Validation  
    if (empty($_POST["hotelname"])) 
    {  
       echo " Field Cannot be empty ";
       $flag = True;  
    } 
    if (empty($_POST["roomtype"])) 
    {  
        echo " Field Cannot be empty ";
        $flag = True;  
    } 
    if (empty($_POST["roomf"])) 
    {  
        echo " Field Cannot be empty ";
        $flag = True;  
    }      

    if (empty($_POST["htype"])) 
    {  
        echo " Field Cannot be empty ";
        $flag = True;  
    }  

    if (empty($_POST["comp"])) 
    {  
        echo " Field Cannot be empty ";
        $flag = True;  
    } 
    if (empty($_POST["hloc"])) 
    {  
        echo " Field Cannot be empty ";
        $flag = True;  
    } 
        if (empty($_POST["hprice"])) 
    {  
        echo " Field Cannot be empty ";
        $flag = True;  
    } 
    
    if (empty($_POST["vehicleid"])) 
    {  
        echo " Field Cannot be empty ";
        $flag = True;  
    } 

        if (empty($_POST["vehiclemodel"])) 
    {  
        echo " Field Cannot be empty ";
        $flag = True;  
    } 

    if (empty($_POST["vehiclearea"])) 
    {  
       echo " Field Cannot be empty ";
       $flag = True;  
    } 

    if (empty($_POST["vehicleseat"])) 
    {  
       echo " Field Cannot be empty ";
       $flag = True;  
    } 
    if (empty($_POST["vehicledur"])) 
    {  
       echo " Field Cannot be empty ";
       $flag = True;  
    } 

    if (empty($_POST["vehiclefee"])) 
    {  
       echo " Field Cannot be empty ";
       $flag = True;  
    } 

    
    if(!$flag) 
    {
      $hotelname = input_data($_POST["hotelname"]);
      $roomtype = input_data($_POST["roomtype"]);
      $roomf = input_data($_POST["roomf"]);
      $htype = input_data($_POST["htype"]);
      $comp = input_data($_POST["comp"]);
      $hloc = input_data($_POST["hloc"]);
      $hprice = input_data($_POST["hprice"]);

      $vehicleid = input_data($_POST["vehicleid"]);
      $vehiclemodel = input_data($_POST["vehiclemodel"]);
      $vehiclearea = input_data($_POST["vehiclearea"]);
      $vehicleseat = input_data($_POST["vehicleseat"]);
      $vehicledur = input_data($_POST["vehicledur"]);
      $vehiclefee = input_data($_POST["vehiclefee"]);


        $res = updateH($roomtype,$roomf, $htype, $comp, $hloc, $hprice,$hotelname);
        if($res) {
        echo "<span style='color: green;'>Successfully Updated Hotel Info....</span><br>";
        }
        else {
        echo "<span style='color: red;'>Error while Updated Hotel Info...</span><br>";
        }
        $ress = updateT($vehiclemodel,  $vehiclearea, $vehicleseat, $vehicledur, $vehiclefee, $vehicleid);
        if($ress) {
        echo "<span style='color: green;'>Successfully Updated Transportation Info....</span>";
        }
        else {
        echo "<span style='color: red;'>Error while Updated Transportation Info...</span><br>";
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