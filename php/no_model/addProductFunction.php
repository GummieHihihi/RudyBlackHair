<?php 
$dbhost = "localhost";
$dbport = 3306;
$dbuser = "root";
$dbpassword = "";

$con = new mysqli($dbhost, $dbuser, $dbpassword, "duongDb", $dbport);
if(isset($_POST['save'])){
	$name = $_POST['name'];
	$status = $_POST['status'];
	$img = $_FILES['image']['name'];

	$insert = $con -> query("INSERT INTO product(productName, productStatus , productimg) VALUES ('$name', '$status', '$img')") or
	die($con -> error);
	echo "<script>alert('image has been uploaded to database')</script>";

}
require_once("mainMenu.php");
?>
