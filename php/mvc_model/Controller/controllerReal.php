<?php 
require_once ('../Controller/controllerAdmin.php');
require_once ('../model/model.php');
require_once ('../block/block.php');
require_once('../model/config.php');

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

	function actionhandler($action){
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
		else if($action =='editordelete'){
			if(isset($_POST['editThis'])){
				$productId = $_POST['productid'];
				$this->controller->displayedit($productId);
			}
			else if(isset($_POST['deleteThis'])){
				$deleteid = $_POST['productid'];
				$this->controller->delete( "product", " productID = $deleteid", $this->dbname);
				$this->controller->displayAll("product", $this->dbname);
			}
		}
		else if($action =='editthis'){
			if(isset($_POST['saveEdit'])){
				$name = $_POST['newname'];
				$status = $_POST['newstatus'];
				$img = $_FILES['newimage']['name'];
				$editid = $_POST['editid'];

				$this->controller->saveAfterEdit("product", "productName = '$name', productStatus = '$status', productimg = '$img'", "productID = $editid", $this->dbname);
				$this->controller->displayAll("product", $this->dbname);
			}
		}
		else if(isset($_POST['searchRequest'])){
			$this->block->render_layout_search();
		}
		else if(isset($_POST['searchProduct'])){
			$searchname = $_POST['namesearch'];
			$result = $controller->search($searchname, "productName", "product", $this->dbname);
			echo "result found :" . $result;
		}
		else if($_GET['action']=='display_frontend'){
			if(isset($_POST['displayfrontend'])){
				$this->controller->display_frontend("product", $this->dbname);
			}
		}
	}
}
$config = new config();
$dbhost = $config->dbhost;
$dbport = $config->dbport;
$dbuser = $config->dbuser;
$dbpassword = $config->dbpassword;
$dbname = $config->dbname;
$model = new Model($dbhost, $dbport, $dbuser, $dbpassword);
$block = new Block($model);
$controller = new controllerAdmin($block);
$controllerReal = new controllerReal($model, $block,$controller,$dbname);
$controllerReal->actionhandler($_GET['action']);

?>