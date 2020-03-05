<?php 
/**
 * 
 */
class Template
{
	
	function __construct()
	{
	}
	public function display($row){
		$_SESSION['row'] = $row;
		include('../template/display.php');
	}
	public function editform_layout($id){
		$_SESSION['editID'] = $id;
		include('../template/edit.php');
	}
	public function search_layout(){
		include('../template/search.php');
	}
	public function add_layout(){
		include('../template/add.php');
	}
}

?>