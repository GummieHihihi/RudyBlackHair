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
if(isset($_POST['displayAll'])){
	echo "working";
	$controller->displayall("product", "admin");
}
else{
	echo "not working";
}
?>