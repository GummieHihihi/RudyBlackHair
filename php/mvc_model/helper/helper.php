<?php 
/**
 * 
 */
class helper
{
	private $imagepath;
	function __construct()
	{
		$this->imagepath = "http://localhost:81/duong/php/mvc_model/picture/";
	}
	function getPath(){
		return $this->imagepath;
	}
}
 ?>