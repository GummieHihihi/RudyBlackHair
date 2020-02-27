<?php 
/**
 * 
 */
include "../core/fatherModel.php";
$dbhost = "localhost";
$dbport = 3306;
$dbuser = "root";
$dbpassword = "";

class Model extends fatherModel
{
	
  	function __construct($dbhost, $dbport, $dbuser, $dbpassword){
		$this->dbhost = $dbhost;
		$this->dbport = $dbport;
		$this->dbuser = $dbuser;
		$this->dbpassword = $dbpassword;
	}
	function createTabe($name, $body,$dbname)
	{
		$this->query_on_db("create $name(productSaleID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                productName VARCHAR(50),
                productDescription VARCHAR(50),
                price float,
                productSaleImg longblob)", 
                );
	}

	function insertInto($name, $body)
	{
		echo "string";
	}

	function add($name, $body)
	{
		echo "string";
	}

	function createDatabase($name)
	{
		$this->queryMysql_on_server("create database $name");
		echo "create Database $name";
	}
}

$model = new Model($dbhost, $dbport, $dbuser, $dbpassword);
$model->createDatabase("duongdb2");

?>