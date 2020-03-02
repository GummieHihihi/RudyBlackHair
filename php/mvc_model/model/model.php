<?php 
/**
 * 
 */
require_once ('../core/fatherModel.php');
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
	function createTable($name, $body,$dbname)
	{
		$this->query_on_db("CREATE TABLE IF NOT EXISTS $name ($body)", $dbname);
		echo "created table $name";
	}

	function insertInto($name, $body, $dbname)
	{
		
		$query = $this->query_on_db("INSERT INTO $name values ($body)", $dbname);
		if($query){
			echo "inserted into the table $name";
		}
		else{
			echo "cannot insert into the table $name";
		}
	}

	function update($name, $body,$condition, $dbname){
		$query = $this->query_on_db("UPDATE $name set $body Where $condition", $dbname);
		if($query){
			echo "table $name has been updated";
		}
		else{
			echo "not working";
		}
	}

	function delete($name, $body, $dbname){
		$query = $this-> query_on_db("DELETE FROM $name  Where $body", $dbname);
		if($query){
			echo "table $name has been updated";
		}
		else{
			echo "not working";
		}
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
		if($query){
			echo "database $name has been deleted";
		}
		else{
			echo "not working";
		}
	}
	function deleteTable($name, $dbname){
		$query = $this->query_on_db("drop table $name", $dbname);
		if($query){
			echo "table $name has been deleted";
		}
		else{
			echo "not working";
		}
	}
	function deleterow($tablename, $body, $dbname){
		$query = $this->query_on_db("DELETE FROM $tablename WHERE $body", $dbname);
		if($query){
			echo "this row has been deleted";
		}
		else{
			echo "not working";
		}
	}
	function selectAll($table, $dbname){
		$query = $this->query_on_db("SELECT * From $table",$dbname);
		if($query){
			echo "select all from $table";
		}
		else{
			echo "not working";
		}
		return $query;
	}
}


?>