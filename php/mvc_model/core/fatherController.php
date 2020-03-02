<?php 
include('../core/fatherModel.php');
include('../core/fatherBlock.php');
abstract class fatherController{
	public $model;
	public $block;
	function __construct(){
		$this->model = new fatherModel();
		$this->block = new fatherBlock();
	}
	abstract protected function start();

	abstract protected function displayMainMenu();

	abstract protected function add($model, $block, $id);

	abstract protected function displayall($model, $table);

	abstract protected function edit($model, $block, $body, $table, $condition);

	abstract  protected function delete($model,$block,$id,$table);

}

 ?>
