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
					<td><img class = "img-respondsive" style="width:300px;height:300px;"src="../picture/<?php echo $Image; ?>"></td>
					<form method = "post" action= "../product/editrequest/<?php  echo $productId;?>">
						<td><button class="btn btn-primary" name = "editThis" > Edit </button></td>
					</form>
					<form method = "post" action= "../product/delete/<?php  echo $productId;?>">
						<td><button class="btn btn-primary" name = "deleteThis" >Delete</button></td>
					</form>
				</tr>
			</tbody>
		<?php } ?>
	</table>
</center>