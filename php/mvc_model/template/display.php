<?php 
$row = $_SESSION['row'];
?>

<center>
	<table class="table" style="margin: auto" >
		<thead>
			<tr>
				<th class="col">ID</th>
				<th class="col">Name</th>
				<th class="col">Price</th>
				<th class="col">image</th>
			</tr>
		</thead>
		<?php
		foreach($row as $value) {
			$productId = $value[0];
			$productName = $value[1];
			$productStatus = $value[2];
			$Image = $value[3];
			?>
			<tbody>
				<tr>
					<td><?php echo $productId; ?></td>
					<td><?php echo $productName; ?></td>
					<td><?php echo $productStatus; ?></td>
					<td><img class = "img-respondsive" src="../picture/<?php echo $Image; ?>"></td>
					<form method = "post" action= "../Controller/controllerReal.php">
						<td><input type="hidden"  name="productid" value="<?php echo $productId ?>"></td>
						<td><button class="btn btn-primary" name = "editThis" > Edit </button></td>
						<td><button class="btn btn-primary" name = "deleteThis" >Delete</button></td>
					</form>
				</tr>
			</tbody>
		<?php } ?>
	</table>
</center>