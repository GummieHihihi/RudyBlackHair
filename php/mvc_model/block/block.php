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
	function displayAll($tablename, $dbname){
		alert("display successfully");
	}
}

 ?>