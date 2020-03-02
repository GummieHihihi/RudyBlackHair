<?php 
include "../Controller/controllerAdmin.php";
include "../model/model.php";
include "../block/block.php";

$block = new block();
$dbhost = "localhost";
$dbport = 3306;
$dbuser = "root";
$dbpassword = "";
$model = new Model($dbhost,$dbport,$dbuser,$dbpassword);

$controller = new controllerAdmin($model, $block);
if(isset($_POST['addProduct'])){
	echo "dung roi";
	$productName = $_POST['productName'];
	$productStatus = $_POST['productStatus'];
	$img = $_FILES['image']['name'];
	$controller->add("product(productName, productStatus, productimg)","'$productName', '$productStatus', '$img'", "admin");
}
?>