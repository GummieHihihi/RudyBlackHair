<?php 
/**
 * 
 */
class Template
{
	
	function __construct(argument)
	{
	}
	public function render_layout_edit($id){
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
}
 ?>