<?php 
/**
 * 
 */
require_once ('../core/fatherModel.php');


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
		try {
			$query = $this->query_on_db("CREATE TABLE IF NOT EXISTS $name ($body)", $dbname);
		} catch (Exception $e) {
			echo 'Not Working since database already existed ',  $e->getMessage(), "\n";
		}
	}

	function insertInto($name, $body, $dbname)
	{
		try {
			$query = $this->query_on_db("INSERT INTO $name values ($body)", $dbname);
		} catch (Exception $e) {
			echo 'Not Working since database already existed ',  $e->getMessage(), "\n";
		}
	}

	function update($name, $body,$condition, $dbname){
		try {
			$query = $this->query_on_db("UPDATE $name set $body Where $condition", $dbname);
		} catch (Exception $e) {
			echo 'Not Working since database already existed ',  $e->getMessage(), "\n";
		}
	}

	function delete($name, $body, $dbname){
		try {
			$query = $this-> query_on_db("DELETE FROM $name  Where $body", $dbname);
		} catch (Exception $e) {
			echo 'Not Working since database already existed ',  $e->getMessage(), "\n";
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
		try {
			$query = $this-> queryMysql_on_server("drop database $name");
		} catch (Exception $e) {
			echo 'Not Working since database already existed ',  $e->getMessage(), "\n";
		}

	}
	function deleteTable($name, $dbname){
		try {
			$query = $this->query_on_db("drop table $name", $dbname);
		} catch (Exception $e) {
			echo 'Not Working since database already existed ',  $e->getMessage(), "\n";
		}

	}
	function deleterow($tablename, $body, $dbname){
		try {
			$query = $this->query_on_db("DELETE FROM $tablename WHERE $body", $dbname);
		} catch (Exception $e) {
			echo 'Not Working since database already existed ',  $e->getMessage(), "\n";
		}

	}
	function selectAll($table, $dbname){
		try {
			$query = $this->query_on_db("SELECT * from $table",$dbname);
		} catch (Exception $e) {
			echo 'Not Working since database already existed ',  $e->getMessage(), "\n";
		}
		return $query;

	}
	function selectColumn($column, $table, $dbname){
		try {
			$query = $this->query_on_db("SELECT $column from $table",$dbname);
		} catch (Exception $e) {
			echo 'Not Working since database already existed ',  $e->getMessage(), "\n";
		}
		return $query;
	}
}


?>