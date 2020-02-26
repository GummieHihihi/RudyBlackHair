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
		<table class="table" style=" align : center ;margin: auto" >
			<thead>
				<tr>
					<th class="col">stt</th>
					<th class="col">ID</th>
					<th class="col">Name</th>
					<th class="col">status</th>
					<th class="col">image</th>
				</tr>
			</thead>
			<?php
			$round = 0;
			while ($row = mysqli_fetch_array($selectall)) {

				?>

				<tr>
					<?php 
					$round = $round + 1 ;
					$productName = $round;
					?>
					<input id="js-col-id" type="hidden" name="col-id" value="$round">
					<td><?php echo "this product : " + $round; ?></td>
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; ?></td>
					<td><?php echo "<img class = 'img-respondsive ' src='picture/$row[3]'>" ?></td>
					<form action="editProductDetail.php" method="POST">
						<td><input type="hidden" name="productname" value="<?php echo $row[0]; ?>">
						</td>
						<td><button type="submit" class="btn btn-primary">edit this product</button></td>
					</form>

				</tr>

				<?php
			}
			?>
		</table>
	</center>

</body>
</html>