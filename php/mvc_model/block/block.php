<?php 

/**
 * 
 */
require_once ('../core/fatherBlock.php');
require_once('../model/model.php');
require_once('../template/template.php');

class block extends fatherBlock
{
	public $template;
	public $model;
	function __construct($model)
	{
		$this->model = $model;
		$this->template = new Template();
	}
	function render_layout_main_menu(){
		require_once("../view/mainMenu.php");
	}

	function render_layout_add(){
		require_once('../view/productManager.php');
		$this->template->add_layout();
	}

	function render_layout_edit($id){
		require_once('../view/productManager.php');
		$this->template->editform_layout($id);
	}

	function render_layout_search(){
		require_once('../view/productManager.phpp');
		$this->template->search_layout();
	}
	function displayAll($table, $dbname){
		$model = $this->model;
		$selectall = $model->selectAll($table, $dbname);
		$row = $selectall -> fetch_all(MYSQLI_NUM);
		include('../view/productManager.php');
		$template = $this->template;
		$template->display($row);
	}


	function delete($table,$condition,$dbname){
		$this->model->delete($table,$condition,$dbname);
	}

	function addoredit($tablename, $body, $condition, $dbname){
		if($condition != ""){
			$this->model-> update($tablename, $body, $condition, $dbname);
		}
		else{
			$this->model->insertInto($tablename, $body, $dbname);
		}
	}
	function display_Frontend($table, $dbname){
		$selectall = $this->model->selectAll($table, $dbname);
		$row = $selectall -> fetch_all(MYSQLI_NUM);
		$this->template->display_Frontend($row);
	}
	function selectlatest($table, $orderBy, $dbname){
		$select =  $this->model->selectlatest($table,$orderBy,$dbname);
		return $select;
	}
}

?>