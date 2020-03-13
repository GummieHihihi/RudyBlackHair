<?php 
/**
 * 
 */
class display
{
	public $controller;
	function __construct($controller)
	{
		$this->controller = $controller;
	}
	function displayList($tablename, $dbname){
		$this->controller->displayall($tablename, $dbname);
	}
}

 ?>