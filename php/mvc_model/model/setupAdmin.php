<?php 
$dbhost = "localhost";
$dbport = 3306;
$dbuser = "root";
$dbpassword = "";
require_once "../model/model.php";
$model = new Model($dbhost,$dbport,$dbuser,$dbpassword);
$model->createDatabase("admin");
$model->createTable("product", "productID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                productName VARCHAR(50),
                productStatus VARCHAR(50),
                productimg VARCHAR(50)
                ","admin");
 ?>