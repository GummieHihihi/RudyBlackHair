<?php
include("../Controller/controllerAdmin.php"); 
/**
 * 
 */
class Home_Controller
{

	public function toModule($module){
		if($module == 'product'){
			require_once('../Controller/controllerReal.php');
		}
		else{
			echo "not right";
		}
	}
}
$homecontroller = new Home_Controller();
$homecontroller->toModule($_GET['module']);
?>