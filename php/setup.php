<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Seetting up....</h1>
	<?php 
		require_once '../php/function.php';
		//set up database

		createTable("shopByCategories", "productbyCategoriesID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                productName VARCHAR(50),
                productSaleImg blob
                ");
        echo "<br/>";

		createTable("onSaleProduct", "productSaleID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                productName VARCHAR(50),
                productDescription VARCHAR(50),
                price float,
                productSaleImg blob
                ");
        echo "<br/>";

		createTable("Product", "productID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                productName VARCHAR(50),
                productStatus VARCHAR(50),
                productimg blob
                ");
        echo "<br/>";
        
	 ?>

</body>
</html>