<?php 

$deleteid = $_POST['productid'];
$dbhost = "localhost";
$dbport = 3306;
$dbuser = "root";
$dbpassword = "";

$con = new mysqli($dbhost, $dbuser, $dbpassword, "duongDb", $dbport);
if(isset($_POST['delete'])){

	$insert = $con -> query("DELETE FROM product  Where productID ='$deleteid'")  or
	die($con -> error);
	echo "<script>alert('deleted')</script>";
	require_once('mainMenu.php');

}
else{
	echo "not working";
}

?>