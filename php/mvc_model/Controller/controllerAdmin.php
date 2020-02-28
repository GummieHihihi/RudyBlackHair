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
	}

	function displayMainMenu(){
		$block = $this->block;
		$block->render_layout_main_menu();
	}

	function add($name, $body, $dbname){
		$model = $this->model;
		$block = $this->block;
		$model->insertInto($name, $body, $dbname);
		$block->displayall($name, $dbaname);
	}
	function displayall($model, $table, $block){

	}

	function edit($model, $block, $body, $table, $condition){

	}

	function delete($model,$block,$id,$table){
		
	}

	}

 ?>