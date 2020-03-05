<?php 
/**
 * 
 */
require_once('../core/fatherController.php');
include "../Other/algorithm.php";
class controllerAdmin extends fatherController
{
	public $algorithm;
	function __construct($model, $block)
	{
		$this->model = $model;
		$this->block = $block;
		$this->algorithm = new Algorithm();
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
		$block = $this->block;
		$block->displayall($table,$dbname);
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
	function search($string1, $column,$table,$dbname){
		$select = $this->model->selectColumn($column, $table,$dbname);
		$row = $select -> fetch_all(MYSQLI_NUM);
		foreach($row as $smallerRow){
			$result = $this->algorithm->compare($smallerRow[0], $string1);
			if($result == 0){
				return $string1;
			}
			else{
				return " no result";
			}
		}
	}
}

?>