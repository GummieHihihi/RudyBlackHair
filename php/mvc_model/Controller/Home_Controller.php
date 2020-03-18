<?php
include("../Controller/controllerAdmin.php"); 
/**
 * 
 */
class Home_Controller
{
	public $action;
	public function toModule($module){
		if($module == "product"){
			require_once('../Controller/controllerReal.php');
			require_once('../model/model.php');
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
			$controllerReal = new controllerReal($model, $block,$controller,$dbname);
			$controllerReal->actionhandler($this->getAction(),$this->getID());
		}
		else{
			echo "not right, the module is now :  " .$module;
		}
	}
	function getModule(){
		$data = $_SERVER['REQUEST_URI'];
		$mesage = explode('/duong/php/mvc_model/Controller/Home_Controller.php/', $data, 2)[1];
		$module = explode('/',$mesage,2)[0];
		return $module;
	}
	function getAction(){
		$data = $_SERVER['REQUEST_URI'];
		$mesage = explode('/duong/php/mvc_model/Controller/Home_Controller.php/', $data, 2)[1];
		$secondpart = explode('/',$mesage,2)[1];
		if(strpos($secondpart,'_') !== FALSE){
			$action = explode('_',$secondpart)[0];
		} else{
			$action = $secondpart;
		}
		return $action;
	}
	function getID(){
		$data = $_SERVER['REQUEST_URI'];
		$mesage = explode('/duong/php/mvc_model/Controller/Home_Controller.php/', $data, 2)[1];
		$secondpart = explode('/',$mesage,2)[1];
		if(strpos($secondpart,'_') !== FALSE){
			$id = explode('_',$secondpart)[1];
		} else{
			$id = "";
		}
		return $id;
	}


}
$homecontroller = new Home_Controller();
$module = $homecontroller->getModule();
$action = $homecontroller->getAction();

$homecontroller->toModule($homecontroller->getModule());

?>