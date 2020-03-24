<?php 
class config
{
	public $dbhost;
	public $dbport;
	public $dbuser;
	public $dbpassword;
	public $dbname;
	public $adminModel;
	
	function __construct()
	{
		$this->dbhost = "localhost";
		$this->dbport = 8889;
		$this->dbuser = "root";
		$this->dbpassword = "root";
		$this->dbname = "admin";
	}
	function start(){
		require_once('../model/model.php');
		$this->adminmodel = new Model($this->dbhost, $this->dbport, $this->dbuser, $this->dbpassword);
		$this->adminmodel->createDatabase($this->dbname);
		$this->adminmodel->createTable("product", "productID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			productName VARCHAR(50),
			productStatus VARCHAR(50),
			productimg VARCHAR(50)
			",$this->dbname);
	}
}
?>