<?php 
require_once('productManager.php');
?>
<?php
$dbhost = "localhost";
$dbport = 3306;
$dbuser = "root";
$dbpassword = "";

$con = new mysqli($dbhost, $dbuser, $dbpassword, "duongDb", $dbport);
$selectall = $con -> query("SELECT * FROM product ") or
die($con -> error);

$con -> close();


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<table class="table" style="margin: auto" >
			<thead>
				<tr>
					<th class="col">ID</th>
					<th class="col">Name</th>
					<th class="col">status</th>
					<th class="col">image</th>
				</tr>
			</thead>
			<?php
			while ($row = mysqli_fetch_array($selectall)) {
				$productId = $row[0];
				$productName = $row[1];
				$productStatus = $row[2];
				$Image=$row[3];
				echo "<tbody>";
				echo "<tr>";
				echo "<td>$productId</td>";
				echo "<td>$productName</td>";
				echo "<td>$productStatus</td>";
				echo "<td><img class = 'img-respondsive' src='../picture/$Image'></td>";
				echo "</tr>";
				echo "</tbody>";
			}
			?>

		</table>
	</center>
	
</body>
</html>
