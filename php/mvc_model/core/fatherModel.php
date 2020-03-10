<?php
abstract class fatherModel{
	public $dbhost;
	public $dbport;
	public $dbuser;
	public $dbpassword;

	public  function __construct($dbhost, $dbport, $dbuser, $dbpassword){
		$this->dbhost = $dbhost;
		$this->dbport = $dbport;
		$this->dbuser = $dbuser;
		$this->dbpassword = $dbpassword;
	}


	public function getdbhost(){
		return $this->dbhost;
	}
	public function getdbport(){
		return $this->dbport;
	}
	public function getdbuser(){
		return $this->dbuser;
	}
	public function getdbpassword(){
		return $this->dbpassword;
	}

	public function setdbhost($dbhost){
		$this->dbhost = $dbhost;
	}
	public function setdbport($dbport){
		$this->dbport = $dbport;
	}
	public function setdbuser($dbuser){
		$this->dbuser = $dbuser;
	}
	public function setdbpassword($dbpassword){
		$this->dbpassword = $dbpassword;
	}

	public function connecttoserver(){
		try {
			$connection =  mysqli_connect($this->dbhost, $this->dbuser, $this->dbpassword);
		}
		catch (Exception $e) {
			echo 'Not Working since database already existed ',  $e->getMessage(), "\n";
		}
		return $connection;
		//this
	}

	protected function queryMysql_on_server($query)
	{
    $connection = $this->connecttoserver(); // bien sieu toan cuc
    $result = $connection->query($query);
    if(!$result)
    {
    	die($connection->error);
    }
    else{
    	
    }
    $connection->close();
    return $result;
}

abstract protected function createDatabase($name);

protected function connecttodb($dbname){
	$conn =  mysqli_connect($this->dbhost, $this->dbuser, $this->dbpassword, $dbname,$this->dbport);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	else{
		
	}
	return $conn;
}

protected function query_on_db($query, $dbname){
	$connection = $this->connecttodb($dbname);
	$result = $connection->query($query);
	if(!$result)
	{
		echo "<br>";
		die($connection->error);
	}
	else{

	}
	$connection->close();
	return $result;
}

abstract protected function createTable($name, $body,$dbname);

abstract protected function insertInto($name, $body,$dbname);

abstract protected function delete($name, $body, $dbname);
abstract protected function deletedadtabase($name);

}

?>