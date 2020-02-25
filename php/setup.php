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
                productSaleImg longblob
                ");
        echo "<br/>";

		createTable("onSaleProduct", "productSaleID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                productName VARCHAR(50),
                productDescription VARCHAR(50),
                price float,
                productSaleImg longblob
                ");
        echo "<br/>";

		createTable("Product", "productID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                productName VARCHAR(50),
                productStatus VARCHAR(50),
                productimg longblob
                ");
        echo "<br/>";
        header("Location : mainMenu.php");
        createTable("demo", "productID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, demoName VARCHAR(50) , demoNumber int , img longblob");
	 ?>

</body>
</html>