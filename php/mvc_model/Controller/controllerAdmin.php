<?php 
/**
 * 
 */
require_once('../core/fatherController.php');
class controllerAdmin extends fatherController
{
	public $algorithm;
	function __construct($block)
	{

		$this->block = $block;
	}
	//h
	function start(){
	}
	function displayMainMenu(){
		$block = $this->block;
		$block->render_layout_main_menu();
	}
	function display_frontend($table, $dbname){
		$this->block->display_Frontend($table, $dbname);
	}
	function addoredit($name,$body,$condition,$dbname){
		$this->block->addoredit($name, $body,$condition,$dbname);
	}
	function displayall($table, $dbname){
		$block = $this->block;
		$block->displayall($table,$dbname);
	}

	function displayedit($id){
		$block = $this->block;
		$block->render_layout_edit($id);
	}

	function delete($table,$condition,$dbname){
		$block = $this->block;
		$block->delete($table,$condition,$dbname);
	}
	function selectlatest($table,$orderBy,$dbname){
		$select = $this->block->selectlatest($table,$orderBy,$dbname);
		return $select;
	}
	
}

?>