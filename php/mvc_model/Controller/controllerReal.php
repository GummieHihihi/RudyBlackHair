<?php 
require_once ('../Controller/controllerAdmin.php');
require_once ('../model/model.php');
require_once ('../block/block.php');

/**
 * 
 */
class controllerReal
{
	public $model;
	public $block;
	public $controller;
	public $dbname;
	function __construct($model, $block,$controller,$dbname){
		$this->model = $model;
		$this->block = $block;
		$this->controller = $controller;
		$this->dbname = $dbname;
	}

	function actionhandler($action,$id){
		if($action =='addrequest'){

			$this->block->render_layout_add();
		}
		else if($action =='add' || $action =='editthis'){
			$productName = $_POST['productName'];
			$productStatus = $_POST['productStatus'];
			$img = $_FILES['image']['name'];
			$img_temp = $_FILES['image']['tmp_name'];
			$file_destination = 'C:/xampp/htdocs/duong/php/mvc_model/picture/' . $img;
			move_uploaded_file($img_temp, $file_destination);

			if(isset($_POST['saveEdit'])){
				$editid = $id;
				$this->controller->saveAfterEdit("product", "productName = '$productName', productStatus = '$productStatus', productimg = '$img'", "productID = $editid", $this->dbname);
				$this->controller->displayAll("product", $this->dbname);
			}
			else
			if($id ==""){
				$this->controller->add("product(productName, productStatus, productimg)","'$productName', '$productStatus', '$img'",$this->dbname);
				$this->controller->displayAll("product", $this->dbname);
			}
		}

		else if($action =='display'){
			if(isset($_POST['displayAll'])){
				$this->controller->displayall("product", $this->dbname);
			}
		}
		else if($action =='editrequest'){
			if(isset($_POST['editThis'])){
				$productId = $id;
				$this->controller->displayedit($productId);
			}
		}
		else if ($action =='delete'){
			if(isset($_POST['deleteThis'])){

				$deleteid = $id;
				$this->controller->delete( "product", " productID = $deleteid", $this->dbname);
				$this->controller->displayAll("product", $this->dbname);
			}
		}
		else if($action=='displayfrontend'){
			if(isset($_POST['displayfrontend'])){

				$this->controller->display_frontend("product", $this->dbname);
			}
		}
	}
}

?>