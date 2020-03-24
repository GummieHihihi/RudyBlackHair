<?php
include("../Controller/controllerAdmin.php"); 
/**
 * 
 */
class controller_Module
{
	public $action;
	public function toModule($module){
		if($module == "product"){
			require_once('controller_Action.php');
			require_once('../model/model.php');
			require_once('../model/config.php');
			require_once('../block/block.php');
			$config = new config();
			$dbhost = $config->dbhost;
			$dbport = $config->dbport;
			$dbuser = $config->dbuser;
			$dbpassword = $config->dbpassword;
			$dbname = $config->dbname;
			$model = new Model($dbhost, $dbport, $dbuser, $dbpassword);
			$block = new Block($model);
			$controller = new controllerAdmin($block);
			$controlleraction = new controllerAction($model, $block,$controller,$dbname);
			$controlleraction->actionhandler($this->getAction());
		}
		else{
			echo "not right, the module is now :  " .$module;
		}
	}
	function getModule(){

		$data = $_SERVER['REQUEST_URI'];
		$mesage = explode('/duong/php/mvc_model/Controller/controller_Module.html_', $data, 2)[1];
		$module = explode('_',$mesage,2)[0];
		return $module;
	}
	function getAction(){
		$data = $_SERVER['REQUEST_URI'];
		$mesage = explode('/duong/php/mvc_model/Controller/controller_Module.html_', $data, 2)[1];
		$secondpart = explode('_',$mesage,2)[1];
		if(strpos($secondpart,'_') !== FALSE){
			$action = explode('_',$secondpart)[0];
		} else{
			$action = $secondpart;
		}
		return $action;
	}
}
$homecontroller = new controller_Module();
$module = $homecontroller->getModule();
$homecontroller->toModule($module);


?>