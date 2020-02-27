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
		$this->query_on_db("CREATE TABLE $name ($body)", $dbname);
		echo "created table $name";
		
	}

	function insertInto($name, $body, $dbname)
	{
		$this->query_on_db("INSERT INTO $name Values ($body)", $dbname);
		echo "inserted";
	}

	function update($name, $body, $dbname){
		$this->query_on_db("UPDATE $name Set $body", $dbname);
	}

	function delete($name, $body, $dbname){
		$this-> query_on_db("DELETE FROM $name  Where $body", $dbname);
	}

	function createDatabase($name)
	{
		$this->queryMysql_on_server("create database $name");
		echo "create Database $name";
	}
	function deletedadtabase($name){
		$this-> queryMysql_on_server("drop database $name");
	}
}

$model = new Model($dbhost, $dbport, $dbuser, $dbpassword);
$name = "haha";

$model->insertInto("demotable", "$name, $name, $name", "duongdemo");

?>