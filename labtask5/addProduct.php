<!DOCTYPE html>
<html style="box-sizing: border-box;">
<head>
	<title>Add Products</title>
</head>

<body>
<h2 style="background-color: rgb(149, 165, 166);color:black;border: 2px solid black; border-radius: 20px;font-size: 200%; text-align: center;">Add Product </h2>
<form action="controller/addProductControler.php" method="post" enctype="multipart/form-data">

  <div style="float: center; text-align: center;">  
        Name: <input type="text" name="name">
  <br><hr>
        Buying Price: <input type="text" name="bprice">
  <br><hr>
        Selling Price: <input type="text" name="sprice">
  <br><hr>
        <input type="checkbox" name="display" value="Yes">
        <label for="display">Display</label>
  <br><hr>
        <input type="submit" name="submit" value="Save"></div>
</form>

</body>
</html>