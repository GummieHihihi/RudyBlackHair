<?php 
$id = $_SESSION['editID'];
?>
<center>
	<form action="../Controller/controllerReal.php" method="post" enctype="multipart/form-data">
		<label for="fname">Product New Name :</label><br>
		<input type="text" id="name" name="newname" value=""><br>
		<label for="lname">Product New Price:</label><br>
		<input type='number' id="status" name='newstatus' value=''><br><br>
		<label for="lname">Product New image:</label><br>
		<input type="file" name="newimage" value=""><br><br>
		<input type="hidden" name="editid" value="<?php echo $id; ?>">
		<button type="submit" value="Add this Product" class="btn btn-primary" name="saveEdit">Edit this product</button>
	</form>
</center>