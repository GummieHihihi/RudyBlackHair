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
	function getUrl(){
		$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		var_dump(parse_url($url, PHP_URL_QUERY));
		return $url;
	}
	function getparam(){
		$module = $_GET['module'];
		$action = $_GET['action'];
		return "module = " . $module ." /". "action = " . $action;
	}

}
$homecontroller = new Home_Controller();
$homecontroller->toModule($_GET['module']);

?>