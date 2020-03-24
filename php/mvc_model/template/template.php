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
		include_once('../template/display.php');
	}
	public function editform_layout($id){
		include('../template/edit.php');
	}
	public function search_layout(){
		include('../template/search.php');
	}
	public function add_layout(){
		include('../template/add.php');
	}
	public function display_Frontend($row){
		header('Location: ../front_end/demo_withProperties.php');
	}
}

?>