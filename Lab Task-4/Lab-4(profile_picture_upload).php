<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
    input
  </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     
    <p><h2>Profile Picture</h2></p>

    <img src="pic/new.jpg" alt="" width="170" height="200">
    <br>
    <form class="" action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="fileToUpload" id="fileToUpload">
      <br><br>
      <input type="submit" value="Submit" name="submit">
    </form>
    <?php
    include('foot.php');
     ?>



  </body>
</html>