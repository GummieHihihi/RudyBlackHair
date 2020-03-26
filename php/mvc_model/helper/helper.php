<?php 
/**
 * 
 */
class helper
{
	private $imagepath;
	private $imagetofolder;
	function __construct()
	{
		$this->imagepath = "http://localhost:81/duong/php/mvc_model/picture/";
		$this->imagetofolder = "C:/xampp/htdocs/duong/php/mvc_model/picture/";
	}
	function getPath(){
		return $this->imagepath;
	}
	function getPathImgTofolder(){
		return $this->imagetofolder;
	}
}
 ?>