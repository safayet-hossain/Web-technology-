<?php if(!empty($_GET['id'])){ ?>
<?php 

require_once 'controller/displayControler.php';
$tableName = 'product';
$product = fetchProduct($tableName, $_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Product</title>
</head>
<body>
<h2 style="background-color: rgb(149, 165, 166);color:black;border: 2px solid black; border-radius: 20px;font-size: 200%; text-align: center;"> Edit Product </h2>
<form action="controller/editProductController.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
  <fieldset>
<!-- <legend><B>Edit Product</B></legend> <br>
 -->  <div style="float: left; text-align: right;">  
  Name: <input type="text" name="name" value="<?php echo $product['Name']; ?>">
  <br><hr>
  Buying Price: <input type="text" name="bprice" value="<?php echo $product['BuyingPrice']; ?>">
  <br><hr>
  Selling Price: <input type="text" name="sprice" value="<?php echo $product['SellingPrice']; ?>">
  <br><hr>
  <input type="checkbox" name="display" value="Yes" <?php if($product['display']=='Yes'){echo 'checked';} ?>>
  <label for="display">Display</label>
  <br><hr>
  <input type="submit" name="submit" value="Save"></div>
</form>
</fieldset>
</body>
</html>
<?php }
else{
  echo "You are not allowed to visit this page";
} ?>