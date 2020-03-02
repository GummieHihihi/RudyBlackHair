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
		alert("add successfully");
	}

	function render_layout_edit(){
		alert("edit successfully");
	}

	function render_layout_delete(){
		alert("add successfully");
	}

	function render_layout_update(){
		alert("update successfully");
	}

	function render_layout_search(){
		alert("search successfully");
	}
	function displayAll($row){
		echo "<br>da vao dc block";
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
			while ($row) {
				$productId = $row[0];
				$productName = $row[1];
				$productStatus = $row[2];
				$Image=$row[3];
				echo "<tbody>";
				echo "<tr>";
				echo "<td>$productId</td>";
				echo "<td>$productName</td>";
				echo "<td>$productStatus</td>";
				echo "<td><img class = 'img-respondsive ' src='../picture/$Image'></td>";
				echo "</tr>";
				echo "</tbody>";
			}
		echo"</table>";
	echo"</center>";
	}
}

?>