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
			$editid = $id;
			$productName = $_POST['productName'];
			$productStatus = $_POST['productStatus'];
			
			if($id !=""){
				$imagename = $_POST['image'];
				echo "product old name  : " . $productName;
				echo "<br>";
				echo "product old price : " . $productStatus;
				echo "<br>";
				echo "product old image : " . "<img class = 'img-respondsive' style='width:300px;height:300px;'src='../picture/$imagename'>";
				$this->controller->saveAfterEdit("product", "productName = '$productName', productStatus = '$productStatus', productimg = '$imagename'", "productID = $editid", $this->dbname);
				
			}
			else
				if($id ==""){
					$img = $_FILES['image']['name'];
					$img_temp = $_FILES['image']['tmp_name'];
					$file_destination = 'C:/xampp/htdocs/duong/php/mvc_model/picture/' . $img;
					move_uploaded_file($img_temp, $file_destination);
					$this->controller->add("product(productName, productStatus, productimg)","'$productName', '$productStatus', '$img'",$this->dbname);
					$this->controller->displayAll("product", $this->dbname);
				}
			}

			else if($action =='display'){
				$this->controller->displayall("product", $this->dbname);
			}
			else if($action =='editrequest'){
				$productId = $id;
				$this->controller->displayedit($productId);
			}
			else if ($action =='delete'){
				$deleteid = $id;
				$this->controller->delete( "product", " productID = $deleteid", $this->dbname);
				$this->controller->displayAll("product", $this->dbname);
			}
			else if ($action =='demo'){

			}
			else if($action=='displayFrontend'){
				if(isset($_POST['displayFrontend'])){
					$this->controller->display_frontend("product", $this->dbname);
				}
				else{
					echo "not right";
				}
			}
		}
	}

	?>