<?php
session_start();
if(isset($_POST['submit']))
{
	   $name = $_POST['name'];
	   $email = $_POST['email'];
	   $date =$_POST['date'];
	   $month = $_POST['month'];
	   $year = $_POST['year'];
	   
	   
	   if(empty($name)||empty($email)||!isset($_POST['gender'])||empty($date)||empty($month)||empty($year))
	   {
		   echo "null submission";
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

		elseif($_POST['gender']=='Female'){
		  $gender = 'Other';
		}
		
  
		setcookie('name', $name, time()+36000, '/');
		setcookie('email', $email, time()+36000, '/');
		setcookie('date', $date, time()+36000, '/');
		setcookie('month', $month, time()+36000, '/');
		setcookie('year', $year, time()+36000, '/');
		setcookie('gender', $gender, time()+36000, '/');
  
		header('location:dashboard.php');
	  }
  
	}
	else{
	  header("location: dashboard.php");
	}
?>