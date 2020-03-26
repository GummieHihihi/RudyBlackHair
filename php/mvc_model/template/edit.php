<?php 
require_once('../model/config.php');
include('../helper/helper.php');
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
$helper = new helper();
$imagepath = $helper->getPath();
$filepath = $helper->getPathImgTofolder();
?>
<!DOCTYPE html>
<html>
<head>
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<title></title>
</head>
<body>
	<center>
		<form action="" id="form_input" method="post" enctype="multipart/form-data">

			<br>
			<label for="fname">Product Name :</label><br>
			<input type="text" id="name" name="productName" >
			<br><br>
			<label for="lname">Product Price:</label><br>
			<input type='number' id="price" name="productStatus" ><br><br>
			<br>
			<label for="lname">Product image:</label><br>
      <img src="" id="currenimage" style="height: 300px; widows: 300px" alt="">
      <input type="file" id="image" name="image" value="" accept="image/x-png,image/gif,image/jpeg"><br><br>
      <input type="hidden" id="hiddenid" name="editid" value="<?php echo $id; ?>">
      <div id="content"></div>
      <button type="submit" style="margin-bottom: 20px;" value="Add this Product" class="btn btn-primary" id="editbutton" name="saveEdit">Edit this product</button>
      <button type="submit" value="Add this Product" class="btn btn-primary" id="addbutton" name="add">Add this product</button>
      <br>
    </form>
    <label id="status"></label>
  </center>

</body>
</html>

<?php

//truong hop edit, khi thong tin san pham khac rong
if($productinfo != ""){
 foreach($productinfo as $value) {
  $productId = $value[0];
  $productName = $value[1];
  $productprice = $value[2];
  $Image = $value[3];
  //che di cac thuoc
  ?>
  <script type="text/javascript">
    document.getElementById("addbutton").style.display = "none";
    document.getElementById("editbutton").style.display = "block";
    document.getElementById("name").style.display = "block";
    document.getElementById("name").value = "<?php echo $productName; ?>";
    document.getElementById("price").value = "<?php echo $productprice; ?>";
    document.getElementById("currenimage").src = "<?php echo $imagepath ?>" + "<?php echo $Image; ?>";
  </script>

  <script type="text/javascript">
  //chi edit, khong qua add
  $(document).ready(function()
  {
      //khai báo biến submit form lấy đối tượng nút submit
      var edit = $("button[id='editbutton']");
      //khi nút submit được click

      edit.click(function()
      {
        //khai báo các biến dữ liệu gửi lên server
        var file_data = $('#image').prop('files')[0];
        var form_data = new FormData();
        var name = $("input[name='productName']").val(); //lấy giá trị trong input user
        var price = $("input[name='productStatus']").val();
        var editid = $("input[name='editid']").val();
        var filepath = "<?php echo $filepath; ?>";
        form_data.append('filepath', filepath);
        form_data.append('id', editid);
        form_data.append("productName",name);
        form_data.append("productStatus",price);
        form_data.append('file', file_data);
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
        //Sử dụng phương thức Ajax.
        $.ajax({
              type : 'POST', //Sử dụng kiểu gửi dữ liệu POST
              url : 'controller_Module.html_product_editthis', //gửi dữ liệu sang trang data.php
              dataType: 'json',
              cache: false,
              contentType: false,
              processData: false,
              data: form_data,
              success : function(response)  // Hàm thực thi khi nhận dữ liệu được từ server
              {
              	if(response == 'false') 
              	{
              		alert('sai gif ddos');
              	}else{
              		console.log("result : " + response);
                  var status = document.getElementById("status");
                  var len = response.length;
                  for(var i=0; i<len; i++){
                    var id = response[i].id;
                    var name = response[i].name;
                    var price = response[i].price;
                    var image = response[i].image;
                    document.getElementById("hiddenid").value = id;
                    document.getElementById("price").value = price;
                    document.getElementById("name").value = name;
                    document.getElementById("currenimage").src = "<?php echo $imagepath ?>" + image;

                    document.getElementById("addbutton").style.display = "none";
                    document.getElementById("editbutton").style.display = "block";
                    alert("đã sua sản phẩm :" + " " + name);
                  }
                }
              }
            });
        return false;
      });
    });
  </script>
<?php }
} ?>

<?php 

//truong hop add, khi khong co thong tin cua san pham nao duoc chon
if($productinfo ==""){
	?>
	<script type="text/javascript">
		document.getElementById("editbutton").style.display = "none";
		document.getElementById("addbutton").style.display = "block";
    //code phan nut add
    $(document).ready(function()
    {
      //khai báo biến submit form lấy đối tượng nút submit
      var add = $("button[id='addbutton']");
      //khi nút submit được click

      add.click(function()
      {
        //khai báo các biến dữ liệu gửi lên server
        var file_data = $('#image').prop('files')[0];
        var form_data = new FormData();
        var name = $("input[name='productName']").val(); //lấy giá trị trong input user
        var price = $("input[name='productStatus']").val();
        var editid = $("input[name='editid']").val();
        var filepath = "<?php echo $filepath; ?>";
        form_data.append('filepath', filepath);
        form_data.append('id', editid);
        form_data.append("productName",name);
        form_data.append("productStatus",price);
        form_data.append('file', file_data);
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
        

        //Sử dụng phương thức Ajax.
        $.ajax({
              type : 'POST', //Sử dụng kiểu gửi dữ liệu POST
              url : 'controller_Module.html_product_add', //gửi dữ liệu sang trang data.php
              dataType: 'json',
              cache: false,
              contentType: false,
              processData: false,
              data: form_data,
              success : function(response)  // Hàm thực thi khi nhận dữ liệu được từ server
              {
                if(response == 'false') 
                {
                  alert('sai gif ddos');
                }else{
                  console.log("result : " + response);
                  var len = response.length;
                  for(var i=0; i<len; i++){
                    var id = response[i].id;
                    var name = response[i].name;
                    var price = response[i].price;
                    var image = response[i].image;
                    document.getElementById("hiddenid").value = id;
                    document.getElementById("name").value = name;
                    document.getElementById("price").value = price;
                    document.getElementById("name").value = name;
                    document.getElementById("currenimage").src = "<?php echo $imagepath ?>" + image;

                    document.getElementById("addbutton").style.display = "none";
                    document.getElementById("editbutton").style.display = "block";
                    alert("đã thêm sản phẩm :" + " " + name);
                  }
                }
              }
            });
        return false;
      });
    });

    //code phan nut edit hien len sau khi add
    $(document).ready(function()
    {
      //khai báo biến submit form lấy đối tượng nút submit
      var edit = $("button[id='editbutton']");
      //khi nút submit được click

      edit.click(function()
      {
        //khai báo các biến dữ liệu gửi lên server
        var file_data = $('#image').prop('files')[0];
        var form_data = new FormData();
        var name = $("input[name='productName']").val(); //lấy giá trị trong input user
        var price = $("input[name='productStatus']").val();
        var editid = $("input[name='editid']").val();
        var filepath = "<?php echo $filepath; ?>";
        form_data.append('filepath', filepath);
        form_data.append('id', editid);
        form_data.append("productName",name);
        form_data.append("productStatus",price);
        form_data.append('file', file_data);
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

        //Sử dụng phương thức Ajax.
        $.ajax({
              type : 'POST', //Sử dụng kiểu gửi dữ liệu POST
              url : 'controller_Module.html_product_add', //gửi dữ liệu sang trang data.php
              dataType: 'json',
              cache: false,
              contentType: false,
              processData: false,
              data: form_data,
              success : function(response)  // Hàm thực thi khi nhận dữ liệu được từ server
              {
                if(response == 'false') 
                {
                  alert('sai gif ddos');
                }else{
                  console.log("result : " + response);
                  var len = response.length;
                  for(var i=0; i<len; i++){
                    console.log(response);
                    alert("ok day");
                    document.getElementById("addbutton").style.display = "none";
                    document.getElementById("editbutton").style.display = "block";
                    var len = response.length;
                    for(var i=0; i<len; i++){
                      var id = response[i].id;
                      var name = response[i].name;
                      var price = response[i].price;
                      var image = response[i].image;
                      document.getElementById("hiddenid").value = id;
                    document.getElementById("name").value = name;
                    document.getElementById("price").value = price;
                    document.getElementById("name").value = name;
                    document.getElementById("currenimage").src = "<?php echo $imagepath ?>" + image;
                    }
                  }
                }
              }
            });
        return false;
      });
    });

  </script>
  <?php
}
?>

