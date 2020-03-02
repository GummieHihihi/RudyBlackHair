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
		include('../view/mainMenu.php');
		
	}
	function displayall( $table, $dbname){
		$model = $this->model;
		$block = $this->block;
		$selectall = $model->selectAll($table, $dbname);
		$row =  mysqli_fetch_array($selectall);
		$block->displayall($row);
	}

	function edit($model, $block, $body, $table, $condition){

	}

	function delete($model,$block,$id,$table){
		header("Location : addController.php");
	}
	}

 ?>