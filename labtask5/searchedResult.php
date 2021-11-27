
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
		th, td {
  	padding: 15px;
	}
	</style>
</head>
<body>
	<h2 style="background-color: rgb(149, 165, 166);color:black;border: 2px solid black; border-radius: 20px;font-size: 200%; text-align: center;">Search Results </h2>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Profit</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedProducts as $i => $product): ?>
			<?php if($product['display']=='Yes'){ ?>
			<tr>
				<td><?php echo $product['id'] ?></td>
				<td><?php echo $product['Name'] ?></td>
				<td><?php echo $product['SellingPrice']-$product['BuyingPrice'] ?></td>
				<td><a href="editProduct.php?id=<?php echo $product['id'] ?>">Edit</a>&nbsp&nbsp<a href="delete.php?id=<?php echo $product['id'] ?>">Delete</a></td>
			</tr>
		<?php } ?>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>