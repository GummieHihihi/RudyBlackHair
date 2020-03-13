<?php 
require_once('../model/model.php');
$config = new config();
$dbhost = $config->dbhost;
$dbport = $config->dbport;
$dbuser = $config->dbuser;
$dbpassword = $config->dbpassword;
$dbname = $config->dbname;
$model = new Model($dbhost, $dbport, $dbuser, $dbpassword);
$productinfoquery = $model->selectallfrom("product","productID = $id", $dbname);
$productinfo = $productinfoquery->fetch_all();
?>
<center>
	<?php
	foreach($productinfo as $value) {
		$productId = $value[0];
		$productName = $value[1];
		$productprice = $value[2];
		$Image = $value[3];
		?>
		<form action="../Controller/Home_Controller.php?module=product&action=editthis&id=<?php echo $productId;?>" method="post" enctype="multipart/form-data">
			<label>Product Old name : <?php echo $productName; ?></label>
			<br>
			<label for="fname">Product New Name :</label><br>
			<input type="text" id="name" name="newname" value="">
			<br><br>
			<label>Product Old price : <?php echo $productprice; ?></label>
			<br>
			<label for="lname">Product New Price:</label><br>
			<input type='number' id="status" name='newstatus' value=''><br><br>
			
			<label>Product Old img : <img class = "img-respondsive" src="../picture/<?php echo $Image; ?>"></label>
			<br>
			<br>
			<label for="lname">Product New image:</label><br>
			<input type="file" name="newimage" value=""><br><br>
			<input type="hidden" name="editid" value="<?php echo $id; ?>">
			<button type="submit" value="Add this Product" class="btn btn-primary" name="saveEdit">Edit this product</button>
		</form>
	<?php  }?>
</center>