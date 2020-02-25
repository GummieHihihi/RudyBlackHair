<?php 
require_once("mainMenu.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add a Product</title>
</head>
<body>
	<center>
		<form method="POST" enctype="multipart/form-data" action="addProductFunction.php">
			<label for="fname">Product Name :</label><br>
			<input type="text" id="name" name="name" value=""><br>
			<label for="lname">Product status:</label><br>
			<input type="number" id="status" name="status" value=""><br><br>
			<label for="lname">Product image:</label><br>
			<input type="file" name="image" value=""><br><br>
			<button type="submit" value="Add this Product" class="btn btn-primary" name="save">ADD a product</button> 
		</form>
	</center>
</body>
</html>