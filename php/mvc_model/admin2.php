<?php
if($_GET['action'] == 'add'){
	if(isset($_POST['addProduct'])){
		$productName = $_POST['productName'];
		$productStatus = $_POST['productStatus'];
		$img = $_FILES['image']['name'];

		var_dump($productName);
		var_dump($productStatus);
		die;

	}
	else{
		echo "not working";
	}
}
?>
