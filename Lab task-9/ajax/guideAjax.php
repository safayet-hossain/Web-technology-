    <?php
include '../Model/dbguideD.php';
 
$guideid = $fullname = $gender = $dob = $religion = $Praddress = $Peaddress  =$phone = $email = $country = $region = $type = $timee = "";  
$flag = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {  


//String Validation  
    if (empty($_POST["guideid"])) 
    {  
       echo " Field Cannot be empty ";
       $flag = True;  
    } 
    if (empty($_POST["fullname"])) 
    {  
        echo " Field Cannot be empty ";
        $flag = True;  
    } 
    if (empty($_POST["gender"])) 
    {  
        echo " Field Cannot be empty ";
        $flag = True;  
    }      

    if (empty($_POST["dob"])) 
    {  
        echo " Field Cannot be empty ";
        $flag = True;  
    }  

    if (empty($_POST["religion"])) 
    {  
        echo " Field Cannot be empty ";
        $flag = True;  
    } 
    if (empty($_POST["Praddress"])) 
    {  
        echo " Field Cannot be empty ";
        $flag = True;  
    } 
        if (empty($_POST["Peaddress"])) 
    {  
        echo " Field Cannot be empty ";
        $flag = True;  
    } 
        if (empty($_POST["phone"])) 
    {  
        echo " Field Cannot be empty ";
        $flag = True;  
    } 

    if (empty($_POST["email"])) 
    {  
       echo " Field Cannot be empty ";
       $flag = True;  
    } 

    if (empty($_POST["country"])) 
    {  
       echo " Field Cannot be empty ";
       $flag = True;  
    } 

    if (empty($_POST["region"])) 
    {  
       echo " Field Cannot be empty ";
       $flag = True;  
    } 
    if (empty($_POST["type"])) 
    {  
       echo " Field Cannot be empty ";
       $flag = True;  
    } 

    if (empty($_POST["time"])) 
    {  
       echo " Field Cannot be empty ";
       $flag = True;  
    } 


    
    if(!$flag) 
    {
      $guideid = input_data($_POST["guideid"]);
      $fullname = input_data($_POST["fullname"]);
      $gender = input_data($_POST["gender"]);
      $dob = input_data($_POST["dob"]);
      $religion = input_data($_POST["religion"]);
      $Praddress = input_data($_POST["Praddress"]);
      $Peaddress = input_data($_POST["Peaddress"]);
      $phone = input_data($_POST["phone"]);
      $email = input_data($_POST["email"]);
      $country = input_data($_POST["country"]);
      $region = input_data($_POST["region"]);
      $type = input_data($_POST["type"]);
      $timee = input_data($_POST["time"]);
      

        $res = reg($guideid, $fullname, $gender, $dob, $religion, $Praddress, $Peaddress, $email,  $phone, $country, $region, $type, $timee);
        if($res) {
        echo "Successfully done....";
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