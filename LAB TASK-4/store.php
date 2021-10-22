<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["Name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }
      else if(empty($_POST["Email"]))  
      {  
           $error = "<label class='text-danger'>Enter an Email</label>";  
      }  
      else if(empty($_POST["Username"]))  
      {  
           $error = "<label class='text-danger'>Enter a Username</label>";  
      }  
      else if(empty($_POST["Password"]))  
      {  
           $error = "<label class='text-danger'>Enter a Password</label>";  
      }
      else if(empty($_POST["Confirm Password"]))  
      {  
           $error = "<label class='text-danger'>Confirm Password field cannot be empty</label>";  
      } 
      else if(empty($_POST["Gender"]))  
      {  
           $error = "<label class='text-danger'>Gender cannot be empty</label>";  
      } 
      else if(empty($_POST["Date of Birth"]))  
      {  
           $error = "<label class='text-danger'>Date of Birth cannot be empty</label>";  
      } 
       
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'Name'               =>     $_POST['Name'],  
                     'Email'          =>     $_POST["Email"],  
                     'Username'     =>     $_POST["Username"],
                     'Password'          =>     $_POST["Password"],
                     'Confirm Password'          =>     $_POST["Confirm Password"],  
                     'Gender'     =>     $_POST["Gender"],  
                     'Date of Birth'     =>     $_POST["Date of Birth"],  
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
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Append Data to JSON File using PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Append Data to JSON File</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="Name" class="form-control" /><br />  
                     <label>E-mail</label>
                     <input type="text" name = "Email" class="form-control" /><br />
                     <label>User Name</label>
                     <input type="text" name = "User Name" class="form-control" /><br />
                     <label>Password</label>
                     <input type="Password" name = "Password" class="form-control" /><br />
                     <label>Confirm Password</label>
                     <input type="password" name = "Confirm Password" class="form-control" /><br />

                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="Male" name="gender" value="Male">
                     <label for="Male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="Female">
                     <label for="Female">Female</label>
                     <input type="radio" id="other" name="gender" value="Other">
                     <label for="Other">Other</label><br>

                     <legend>Date of Birth:</legend>
                     <input type="date" name="Date of Birth"> <br><br>
                    </fieldset> 
                     
                     <input type="submit" name="submit" value="Append" class="btn btn-info" /><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  