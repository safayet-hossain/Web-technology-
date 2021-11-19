<!DOCTYPE html>
<html>
  <body>
  	<h2 style="background-color: rgb(149, 165, 166);color:black;border: 2px solid black; border-radius: 20px;font-size: 200%; text-align: center;">Search Product </h2>
  	<fieldset>
<!-- 	<legend><B>Search Product</B></legend>   -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      <input type="text" name="Name" value="<?php if (!empty($_POST['Name'])) {echo $_POST['Name'];} ?>" required/>
      <input type="submit" name="findProduct" value="Search By Name"/>
    </form><br>
<?php require_once 'controller/searchProductController.php'; ?>
</fieldset>
  </body>
</html>