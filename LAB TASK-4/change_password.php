<!DOCTYPE html>
<html>
<head>
	<title>change_password</title>
</head>
<body>
     <form action="chekChangePass.php" method="POST">
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
                        <legend><b>CHANGE PASSWORD</b></legend>
                        <form>
                            <table>
                                <tr>
                                    <td><font size="3">Current Password</font></td>
                                    <td>:</td>
                                    <td><input type="password" name ="curPass" /></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><font size="3" color="green">New Password</font></td>
                                    <td>:</td>
                                    <td><input type="password" name="newPass" /></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><font size="3" color="red">Retype New Password</font></td>
                                    <td>:</td>
                                    <td><input type="password" name="confPass" /></td>
                                    <td></td>
                                </tr>
                            </table>
                            <hr />
                            <input type="submit" name="submit" value="Submit"  />
                        </form>
                    </fieldset>
                </td>
				</tr>			
            
			</table>		
    </form>		
</body>
</html>



