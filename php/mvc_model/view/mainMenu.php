
<?php 
include "../Controller/controllerAdmin.php";
include "../model/model.php";
include "../block/block.php";

require_once('../model/config.php');
$config = new config();
$dbhost = $config->dbhost;
$dbport = $config->dbport;
$dbuser = $config->dbuser;
$dbpassword = $config->dbpassword;
$dbname = $config->dbname;
$model = new Model($dbhost, $dbport, $dbuser, $dbpassword);
$model->createDatabase($dbname);
$model->createTable("product", "productID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                productName VARCHAR(50),
                productStatus VARCHAR(50),
                productimg VARCHAR(50)
                ",$dbname);
require_once('../view/productManager.php');
?>