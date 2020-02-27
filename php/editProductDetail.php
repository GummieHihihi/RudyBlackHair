<?php 
$id = $_POST['productname'];
session_start();
$editid = $_POST['productid'];
$_SESSION['productid'] = $editid;
require_once('productManager.php');
?>
<?php
$dbhost = "localhost";
$dbport = 3306;
$dbuser = "root";
$dbpassword = "";

$con = new mysqli($dbhost, $dbuser, $dbpassword, "duongDb", $dbport);

$selectall = $con -> query("SELECT * FROM product where productID = $id") or
$selectall = $con -> query("SELECT * FROM product where productID = $editid") or
die($con -> error);

$con -> close();


?>


<?php echo $id; ?>

<?php echo $editid; ?>

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
				echo "<td><img class = 'img-respondsive ' src='picture/$Image'></td>";
				echo "</tr>";
				echo "</tbody>";
			}
			?>

		</table>
		<center>

			<form action="">
				<label for="fname">Product New Name :</label><br>
				<input type="text" id="name" name="name" value=""><br>
				<label for="lname">Product New status:</label><br>
				<input type="number" id="status" name="status" value=""><br><br>
				<label for="lname">Product New image:</label><br>
				<input type="file" name="image" value=""><br><br>
				<input type="hidden" name="editid" value="<?php echo $id; ?>">

			<form action="editFuntion.php" method="post" enctype="multipart/form-data">
				<label for="fname">Product New Name :</label><br>
				<input type="text" id="name" name="newname" value=""><br>
				<label for="lname">Product New status:</label><br>
				<input type="number" id="status" name="newstatus" value=""><br><br>
				<label for="lname">Product New image:</label><br>
				<input type="file" name="newimage" value=""><br><br>
				<input type="hidden" name="editid" value="<?php echo $editid; ?>">
				<button type="submit" value="Add this Product" class="btn btn-primary" name="save">Edit this product</button> 
			</form>
		</center>
	</center>
	
</body>
</html>