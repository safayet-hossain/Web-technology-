<?php
 
 session_start();
 if(isset($_POST['submit']))
 {

 
        $name = $_POST['name'];
        $uname = $_POST['userName'];
	    	$email = $_POST['email'];
        $password = $_POST['password'];
        $conpassword = $_POST['confirmPassword'];
        $date =$_POST['date'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        
        
        if(empty($name)||empty($uname)||empty($email)||empty($password))
        {
            echo "null submission";
        }
        else if(empty($conpassword)||!isset($_POST['gender'])||empty($date)||empty($month)||empty($year))
        {
          echo "null submission";

        }
        
        
        elseif($password != $conpassword)
        {
          echo "Warrning: Password and Confirm Password are not matched!";
          echo "Please, do registration again!";
        }

       

        else {

          if($_POST['gender']=='Male')
          {
            $gender = 'Male';
               
          }
          elseif($_POST['gender']=='Female')
          {
            $gender = 'Female';
          }

          elseif($_POST['gender']=='Other'){
            $gender = 'Other';
          }

          if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'email'          =>     $_POST["email"],  
                     'username'     =>     $_POST["username"],
                     'password'          =>     $_POST["password"],
                     'confirmPassword'          =>     $_POST["confirmPassword"],  
                     'gender'     =>     $_POST["gender"],  
                     
                     'date'               =>     $_POST['date'],
                     'month'               =>     $_POST['month'],
                     'year'               =>     $_POST['year'],  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File does not exist';  
           }
          
          $user = [
                
                'name'=>$name,
                'uname'=>$uname,
                'email'=>$email,
                'password'=>$password,
                'conpassword'=>$conpassword,
                'date'=>$date,
                'month'=>$month,
                'year'=>$year,
                'gender'=>$gender
              ];
    
          setcookie('name', $name, time()+3600000, '/');
          setcookie('uname', $uname, time()+3600000, '/');
          setcookie('email', $email, time()+3600000, '/');
          setcookie('password', $password, time()+3600000, '/');
          setcookie('date', $date, time()+3600000, '/');
          setcookie('month', $month, time()+3600000, '/');
          setcookie('year', $year, time()+3600000, '/');
          setcookie('gender', $gender, time()+3600000, '/');
    
          header('location:login.php');
        }
    
      }
      else{
        header("location: login.php");
      }
?>