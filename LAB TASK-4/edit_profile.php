<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
     <form action="checkEditprof.php" method="POST">
		<br/>
		<table border ='1' cellpadding="0" cellspacing="0" >
			<tr>
				<td colspan='2'>Xcompany
					Logged in  <a href = "dashboard.php" name="username" > 
				<li><a href = "logout.php" name="logout">Logout</a></li>
			</td>
			</tr>
			<tr>		
				<td>
				<p><b>Account</b></p>
				<hr>
					<ul>
					<li><a href="dashboard.php">Dashboard</a></li>    
					<li><a href="profile.php">View Profile</a></li>                             
					<li><a href="edit_profile.php">Edit Profile</a></li>
					<li><a href="picture.html">Change Profile Picture</a></li>
					<li><a href="change_password.php">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
					</ul>
				</td>
				<td> 
					<fieldset>
						<legend><b>EDIT PROFILE</b></legend>
						<table>
                            <tr>
								<td>Name</td>
								<td>:</td>
								<td><input name="name" type="text"></td>
							</tr>		
							<tr><td colspan="3"><hr/></td></tr>
							<tr>
								<td>Email</td>
								<td>:</td>
								<td><input name="email" type="text">
						        <abbr title="hint: sample@example.com"><b>i</b></abbr></td>
							</tr>		
							<tr><td colspan="3"><hr/></td></tr>			
							<tr>
								<td>Gender</td>
								<td>:</td>
								<td>	 
									<input name="gender" type="radio" value="Male">Male
									<input name="gender" type="radio" value="Female">Female
									<input name="gender" type="radio" value="Other">Other
								
								</td>
							</tr>
							<tr><td colspan="3"><hr/></td></tr>
							<tr>
								<td>Date of Birth</td>
								<td>:</td>
								<td>	   
									<input type="text" size="2" name="date" />/
									<input type="text" size="2" name ="month" />/
									<input type="text" size="4" name = "year"/>
									<font size="2"><i>(dd/mm/yyyy)</i></font>
								</td>
							</tr>
						</table>	
						<hr/>
						
					<input type="submit" name= "submit" value="Submit">
					
				</fieldset>
				</tr>			
            <tr style="text-align: center;">
                <td colspan='2'>Copyright&copy 2017</td>
            </tr>
			</table>
				
    </form>		
</body>
</html>



