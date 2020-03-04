<?php 
/**
 * 
 */
require_once ('../core/fatherModel.php');


class Model extends fatherModel
{
	function __construct(){
		$this->dbhost = "localhost";
		$this->dbport = 3306;
		$this->dbuser = "root";
		$this->dbpassword = "";
	}
	function createTable($name, $body,$dbname)
	{
		$this->query_on_db("CREATE TABLE IF NOT EXISTS $name ($body)", $dbname);
		echo "created table $name";
	}

	function insertInto($name, $body, $dbname)
	{
		$query = $this->query_on_db("INSERT INTO $name values ($body)", $dbname);
	}

	function update($name, $body,$condition, $dbname){
		$query = $this->query_on_db("UPDATE $name set $body Where $condition", $dbname);
	}

	function delete($name, $body, $dbname){
		$query = $this-> query_on_db("DELETE FROM $name  Where $body", $dbname);
	}

	function createDatabase($name)
	{

		try {
			$query = $this->queryMysql_on_server("create database IF NOT EXISTS $name ");
		} catch (Exception $e) {
			echo 'Not Working since database already existed ',  $e->getMessage(), "\n";
		}
	}
	function deletedadtabase($name){
		$query = $this-> queryMysql_on_server("drop database $name");
		
	}
	function deleteTable($name, $dbname){
		$query = $this->query_on_db("drop table $name", $dbname);
		
	}
	function deleterow($tablename, $body, $dbname){
		$query = $this->query_on_db("DELETE FROM $tablename WHERE $body", $dbname);
		
	}
	function selectAll($table, $dbname){
		$query = $this->query_on_db("SELECT * from $table",$dbname);
		
		return $query;
	}
}


?>