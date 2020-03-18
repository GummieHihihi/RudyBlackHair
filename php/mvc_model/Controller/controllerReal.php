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
		echo "in action handler" . $action;
		if($action =='addrequest'){

			$this->block->render_layout_add();
		}
		else if($action =='add'){
			$productName = $_POST['productName'];
			$productStatus = $_POST['productStatus'];
			$img = $_FILES['image']['name'];
			$img_temp = $_FILES['image']['tmp_name'];
			$file_destination = 'C:/xampp/htdocs/duong/php/mvc_model/picture/' . $img;
			move_uploaded_file($img_temp, $file_destination);
			$this->controller->add("product(productName, productStatus, productimg)","'$productName', '$productStatus', '$img'",$this->dbname);
			$this->controller->displayAll("product", $this->dbname);
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
			echo "in delete function";
			if(isset($_POST['deleteThis'])){

				$deleteid = $id;
				$this->controller->delete( "product", " productID = $deleteid", $this->dbname);
				$this->controller->displayAll("product", $this->dbname);
			}
		}
		else if($action =='editthis'){
			if(isset($_POST['saveEdit'])){
				$name = $_POST['newname'];
				$status = $_POST['newstatus'];
				$img = $_FILES['newimage']['name'];
				$editid = $id;

				$this->controller->saveAfterEdit("product", "productName = '$name', productStatus = '$status', productimg = '$img'", "productID = $editid", $this->dbname);
				$this->controller->displayAll("product", $this->dbname);
			}
		}
		else if($action=='display_frontend'){
			if(isset($_POST['displayfrontend'])){
				$this->controller->display_frontend("product", $this->dbname);
			}
		}
	}
}

?>