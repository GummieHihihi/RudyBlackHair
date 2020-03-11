<?php
include("../Controller/controllerAdmin.php"); 
/**
 * 
 */
class Home_Controller extends controllerAdmin
{

	public function indexAction(){
		if(isset($_POST['displayAll'])){
			$controller->displayall("product", $dbname);
		}
	}
}
?>