<?php 
require_once('../model/config.php');
$config = new config();
$dbhost = $config->dbhost;
$dbport = $config->dbport;
$dbuser = $config->dbuser;
$dbpassword = $config->dbpassword;
$dbname = $config->dbname;
$model = new Model($dbhost, $dbport, $dbuser, $dbpassword);
if($id != ""){
	$productinfoquery = $model->selectallfrom("product","productID = $id", $dbname);
	$productinfo = $productinfoquery->fetch_all();
}
else{
	$productinfo = "";
}
echo "id now is :" . $id;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Horny</title>
</head>
<body>
	<center>
		<form action="" id="form_input" method="post" enctype="multipart/form-data">
			<br>
			<label for="fname">Product New Name :</label><br>
			<input type="text" id="name" name="productName" value="">
			<br><br>
			<label for="lname">Product New Price:</label><br>
			<input type='number' id="status" name="productStatus" value=''><br><br>
			<br>
			<label for="lname">Product New image:</label><br>
			<input type="file" id="image" name="image" value=""><br><br>
			<input type="" id="hiddenid" name="editid" value="<?php echo $id; ?>">
			<div id="content"></div>
			<button type="submit" style="margin-bottom: 20px;" value="Add this Product" class="btn btn-primary" id="editbutton" name="saveEdit">Edit this product</button>
			<button type="submit" value="Add this Product" class="btn btn-primary" id="addbutton" name="add">Add this product</button>
			<label id="afteradd"></label>
		</form>
	</center>
</body>
</html>

<?php
if($productinfo != ""){
	foreach($productinfo as $value) {
		$productId = $value[0];
		$productName = $value[1];
		$productprice = $value[2];
		$Image = $value[3];
		?>
		<center>
			<label id="demoname">Product Old name : <?php echo $productName; ?><br>
				Product Old price : <?php echo $productprice; ?>
				<br>
				Product Old img : <img class = "img-respondsive" style="width:300px;height:300px;" src="../picture/<?php echo $Image; ?>">
			</label>
		</center>
		<script type="text/javascript">
			document.getElementById("addbutton").style.display = "none";
		</script>

		<script type="text/javascript">
			$(document).ready(function()
			{
	      //khai báo biến submit form lấy đối tượng nút submit
	      var edit = $("button[id='editbutton']");
	      //khi nút submit được click

	      edit.click(function()
	      {
	      	alert("in save edit");
	        //khai báo các biến dữ liệu gửi lên server
	        var name = $("input[name='productName']").val(); //lấy giá trị trong input user
	        var price = $("input[name='productStatus']").val();
	        var image = $('input[type="file"]').val();
	        var filename = image.replace(/C:\\fakepath\\/, '');
	        var editid = $("input[name='editid']").val();
	        //Kiểm tra xem trường đã được nhập hay chưa
	        if(name ==""){
	        	alert('please input name of the product');
	        	return false;
	        }
	        else if(price ==""){
	        	alert('please input price of the product');
	        	return false;
	        }
	        else if(image ==""){
	        	alert('please input image of the product');
	        	return false;
	        }
	        //Lấy toàn bộ dữ liệu trong Form
	        var data2 = "productName="+name+"&"+"productStatus="+price+"&"+"image="+filename+"&"+"id="+editid;
	        console.log(data2);
	        //Sử dụng phương thức Ajax.
	        $.ajax({
	              type : 'POST', //Sử dụng kiểu gửi dữ liệu POST
	              url : '../Controller/controller_Module.html_product_editthis', //gửi dữ liệu sang trang data.php
	              data : data2, //dữ liệu sẽ được gửi
	              
	              success : function(data)  // Hàm thực thi khi nhận dữ liệu được từ server
	              {
	              	if(data == 'false') 
	              	{
	              		alert('sai gif ddos');
	              	}else{
	              		
	              		console.log(data);
	              	}
	              }
	          });
	        return false;
	    });
	  });
	</script>
	<?php
}
}
?>
<?php if($productinfo ==""){
	?>
	<script type="text/javascript">
		document.getElementById("editbutton").style.display = "none";
		document.getElementById("addbutton").style.display = "block";
		document.getElementById("afteradd").style.display = "none";

	</script>
	<?php
}
?>
