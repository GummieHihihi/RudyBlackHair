<?php 
$dbhost = "localhost";
$dbport = 3306;
$dbuser = "root";
$dbpassword = "";

$con = new mysqli($dbhost, $dbuser, $dbpassword, "duongDb", $dbport);
if(isset($_POST['name'])){
	$name = $_POST['name'];
	$status = $_POST['status'];

	$con -> query("INSERT INTO demo(name, status) VALUES ('$name', '$status')") or 
	die($con -> error);
}
 ?>
