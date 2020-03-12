<?php 
/**
 * 
 */
class config
{
	public $dbhost;
	public $dbport;
	public $dbuser;
	public $dbpassword;
	public $dbname;
	
	function __construct()
	{
		$this->dbhost = "localhost";
		$this->dbport = 3306;
		$this->dbuser = "root";
		$this->dbpassword = "";
		$this->dbname = "admin";
	}
}


?>