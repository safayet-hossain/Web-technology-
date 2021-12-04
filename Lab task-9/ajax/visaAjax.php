<?php
include '../Model/dbvisaD.php';
// define variables to empty values   
$visaid = $countryname = $visatype = $personaldocument = $professionaldocuments = $financialdocument = $overseasdocument  =$protime = $fess = $phone = "";  
$flag = false;
$successfulMessage = $errorMessage = "";
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] === "POST") {  


//String Validation  
    if (empty($_POST["visaid"])) 
    {  
       echo " Visa Id is required";
       $flag = True;  
    } 
    if (empty($_POST["countryname"])) 
    {  
        echo " Country Name is required";
        $flag = True;  
    } 
    if (empty($_POST["visatype"])) 
    {  
        echo " Visa Type is required";
        $flag = True;  
    }      

    if (empty($_POST["personaldocument"])) 
    {  
        echo " Personal Document is required";
        $flag = True;  
    }  

    if (empty($_POST["professionaldocuments"])) 
    {  
        echo " Professional Document is required";
        $flag = True;  
    } 
    if (empty($_POST["financialdocument"])) 
    {  
        echo " Financial Document is required";
        $flag = True;  
    } 
        if (empty($_POST["overseasdocument"])) 
    {  
        echo " Overseas Document is required";
        $flag = True;  
    } 
        if (empty($_POST["protime"])) 
    {  
        echo " Processing time is required";
        $flag = True;  
    } 

    if (empty($_POST["fess"])) 
    {  
       echo " fess is required";
       $flag = True;  
    } 

    if (empty($_POST["phone"])) 
    {  
       echo " Phone number is required";
       $flag = True;  
    } 

    
    if(!$flag) 
    {
      $visaid = input_data($_POST["visaid"]);
      $countryname = input_data($_POST["countryname"]);
      $visatype = input_data($_POST["visatype"]);
      $personaldocument = input_data($_POST["personaldocument"]);
      $professionaldocuments = input_data($_POST["professionaldocuments"]);
      $financialdocument = input_data($_POST["financialdocument"]);
      $overseasdocument = input_data($_POST["overseasdocument"]);
      $protime = input_data($_POST["protime"]);
      $fess = input_data($_POST["fess"]);
      $phone = input_data($_POST["phone"]);

      

        $res = reg($visaid, $countryname, $visatype, $personaldocument, $professionaldocuments, $financialdocument, $overseasdocument, $protime,  $fess, $phone);
        if($res) {
        echo "<span style='color: green;'>Successfully added</span>";
        }
        else {
        echo "<span style='color: red;'>Error while saving</span>";
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