<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
     <form>
		<br/>
		<table border ='1' cellpadding="0" cellspacing="0" >
			<tr>
				<td colspan='2'>Xcompany
					Logged in as <a href = "dashboard.php" name="username" > </a>
				<a href = "logout.php" name="logout">Logout</a>
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
						<legend><b>PROFILE</b></legend>
						<table>
                            <tr>
								<td>Name</td>
								<td>:</td>
								
								<td rowspan="7" align="center">	
									<?php
									session_start();
									if(isset($_COOKIE['updated']))
									{
									?>
										<img width="128" src="<?php echo $_COOKIE['pic'];?>"/>
										
									<?php 
									}
									else
									{
									?>
				                 	   <img width="128" src="image/profile.png"/>
									<?php 
									}
									?>
									<br/>
									<a href="picture.html">Change</a>
								</td>
							</tr>		
							<tr><td colspan="3"><hr/></td></tr>
							<tr>
								<td>Email</td>
								<td>:</td>
								
							</tr>		
							<tr><td colspan="3"><hr/></td></tr>			
							<tr>
								<td>Gender</td>
								<td>:</td>
								
							</tr>
							<tr><td colspan="3"><hr/></td></tr>
							<tr>
								<td>Date of Birth</td>
								<td>:</td>
								
							</tr>
						</table>	
						<hr/>
						<a href="edit_profile.php">Edit Profile</a>	
					
				</fieldset>
			</table>
				
    </form>		
</body>
</html>