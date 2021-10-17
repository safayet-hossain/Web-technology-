<?php



    

 include('head_dashboard.php');
 echo "<br><a href='dashboard.php'>Dashboard</a>";
 echo "<br><a href='edit_profil.php'>Edit profile</a>";
 echo "<br><a href='change_pass.php'>Change password</a>";
 echo "<br><a href='view_profile.php'>View profile</a>";
 echo "<br><a href='profile_picture_upload.php'>Profile picture upload</a>";
 echo "<br><a href='logout.php'>Logout</a>";
  echo "<h1 align='middle'> Welcome ".$_SESSION['name']."</h1>";



	 include('foot.php');
 ?>