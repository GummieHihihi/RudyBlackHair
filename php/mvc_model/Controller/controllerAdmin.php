<?php 
/**
 * 
 */
require_once('../core/fatherController.php');
class controllerAdmin extends fatherController
{
	function __construct($model, $block)
	{
		$this->model = $model;
		$this->block = $block;
	}
	function start(){
		require_once('../model/setupAdmin.php');
		$block = $this->block;
		$block->render_layout_main_menu();
	}

	function displayMainMenu(){
		$block = $this->block;
		$block->render_layout_main_menu();
	}

	function add($tablename, $body, $dbname){
		$model = $this->model;
		$block = $this->block;
		$model->insertInto($tablename, $body, $dbname);
	}
	function displayall($table, $dbname){
		$model = $this->model;
		$selectall = $model->selectall($table, $dbname);
		$row = $selectall -> fetch_all(MYSQLI_NUM);
		$block = $this->block;
		$block->displayall($row);
	}

	function displayedit($id){
		$block = $this->block;
		$block->render_layout_edit($id);
	}

	function delete($table,$condition,$dbname){
		$model = $this->model;
		$model->delete($table,$condition,$dbname);
	}
	function saveAfterEdit($name, $body, $condition, $dbname){
		$model = $this->model;
		$model->update($name, $body, $condition, $dbname);
	}
}

?>