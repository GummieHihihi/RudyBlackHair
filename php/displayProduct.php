<?php 
require_once('productManager.php');
?>
<?php
$dbhost = "localhost";
$dbport = 3306;
$dbuser = "root";
$dbpassword = "";

$con = new mysqli($dbhost, $dbuser, $dbpassword, "duongDb", $dbport);
$selectall = $con -> query("SELECT * FROM product WHERE productID = 2") or
die($con -> error);
if ($selectall) {
	echo "<script>alert('select all from product table')</script>";
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table class="table" >
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>status</th>
			<th>image</th>

			<?php
			while ($row = mysqli_fetch_array($selectall)) {
				$productId = $row[0];
				$productName = $row[1];
				$productStatus = $row[2];
				$productimg = $row[3]->fetch_assoc();

				echo "<tr>";
				echo "<td>$productId</td>";
				echo "<td>$productName</td>";
				echo "<td>$productStatus</td>";
				echo "<td>$productimg</td>";
			}
			?>
		</tr>
	</table>
</body>
</html>
