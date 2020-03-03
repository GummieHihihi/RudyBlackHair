<?php 

/**
 * 
 */
require_once ('../core/fatherBlock.php');

class block extends fatherBlock
{
	
	function __construct() 
	{
		# code...
	}
	function render_layout_main_menu(){
		require_once("../view/mainMenu.php");
	}

	function render_layout_add(){
		require_once('../view/productManager.php');
		echo"<center>";
		echo"<form method='POST' enctype='multipart/form-data' action='../Controller/controllerReal.php'>";
		echo"<label for='fname'>Product Name :</label><br>";
		echo"<input type='text' id='name' name='productName' value=''><br>";
		echo"<label for='lname'>Product status:</label><br>";
		echo"<input type='number' id='status' name='productStatus' value=''><br><br>";
		echo"<label for='lname'>Product image:</label><br>";
		echo"<input type='file' name='image' value=''><br><br>";
		echo"<button type='submit' value='Add this Product' class='btn btn-primary' name='addProduct'>ADD a product</button>";
		echo"</form>";
		echo"</center>";
	}

	function render_layout_edit($id){
		require_once('../view/productManager.php');
		echo"<center>";
		echo"<form action='../Controller/controllerReal.php' method='post' enctype='multipart/form-data'>";
		echo"<label for='fname'>Product New Name :</label><br>";
		echo"<input type='text' id='name' name='newname' value=''><br>";
		echo"<label for='lname'>Product New status:</label><br>";
		echo"<input type='number' id='status' name='newstatus' value=''><br><br>";
		echo"<label for='lname'>Product New image:</label><br>";
		echo"<input type='file' name='newimage' value=''><br><br>";
		echo"<input type='hidden' name='editid' value='$id' ?>'";
		echo"<button type='submit' value='Add this Product' class='btn btn-primary' name='saveEdit'>Edit this product</button>"; 
		echo"</form>";
		echo"</center>";
	}

	

	function render_layout_update(){
		
	}

	function render_layout_search(){
		alert("search successfully");
	}
	function displayAll($row){
		include('../view/productManager.php');
		echo"<center>";
		echo"<table class='table' style='margin: auto' >";
		echo"<thead>";
		echo"<tr>";
		echo"<th class='col'>ID</th>";
		echo"<th class='col'>Name</th>";
		echo"<th class='col'>status</th>";
		echo"<th class='col'>image</th>";
		echo"</tr>";
		echo"</thead>";

		foreach($row as $value) {
			$productId = $value[0];
			$productName = $value[1];
			$productStatus = $value[2];
			$Image = $value[3];
			echo "<tbody>";
			echo "<tr>";
			echo "<td>$productId</td>";
			echo "<td>$productName</td>";
			echo "<td>$productStatus</td>";
			echo "<td><img class = 'img-respondsive ' src='../picture/$Image'></td>";
			echo "<form method = 'post' action= '../controller/controllerReal.php'>";
			echo"<td><input type='hidden'  name='productid' value='$productId'></td>";
			echo "<td><button class='btn btn-primary' name = 'editThis' > Edit </button></td>";
			echo "<td><button class='btn btn-primary' name = 'deleteThis' >Delete</button></td>";
			echo "</form>";
			echo "</tr>";
			echo "</tbody>";
		}
		echo"</table>";
		echo"</center>";
	}
}

?>