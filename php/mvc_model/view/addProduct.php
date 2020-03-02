<?php 
require_once('mainMenu.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add a Product</title>
</head>
<body>
	<center>
		<form method="POST" enctype="multipart/form-data" action="../Controller/addController.php">
			<label for="fname">Product Name :</label><br>
			<input type="text" id="name" name="productName" value=""><br>
			<label for="lname">Product status:</label><br>
			<input type="number" id="status" name="productStatus" value=""><br><br>
			<label for="lname">Product image:</label><br>
			<input type="file" name="image" value=""><br><br>
			<button type="submit" value="Add this Product" class="btn btn-primary" name="addProduct">ADD a product</button> 
		</form>
	</center>
</body>
</html>