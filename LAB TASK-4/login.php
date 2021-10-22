<?php

session_start();
if(isset($_COOKIE['checkRemember']))
{	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="logcheck.php" method="POST">
		<fieldset>
			<legend>LOGNIN</legend>
		<table>
			<tr>
				<td>User Name :</td>
				<td><input type="text" name="username" value ="<?php echo $_COOKIE['uname']; ?>"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="password" value ="<?php echo $_COOKIE['password']; ?>"></td>
			
			</tr>
		
		</table>
		
		<hr>
			<input type="checkbox" name="checkRemember" autocomplete="on" checked>Remember Me
			<br><br>
			<input type="submit" name="submit" value="Submit"> <a href="forgotpass.html">Forgot Paswword?</a>
			
	
		</fieldset>
	</form>
</body>
</html>
                
<?php
}
else{
	?>
	<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="logcheck.php" method="POST">
		<fieldset>
			<legend>SIGNIN</legend>
		<table>
			<tr>
				<td>User Name :</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password :</td>
                <td><input type="password" name="password"></td>
               
            </tr>
           
		</table>
           
        <hr>
              <input type="checkbox" name="checkRemember">Remember Me
               <br><br>
              <input type="submit" name="submit" value="Submit"> <a href="forgotpass.html">Forgot Paswword?</a>
			
	
		</fieldset>
	</form>
</body>
</html>
<?php
}
?>

