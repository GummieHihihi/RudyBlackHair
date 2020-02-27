<?php
abstract class fatherModel{
	private $dbhost;
	private $dbport;
	private $dbuser;
	private $dbpassword;

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
		$connection =  mysqli_connect($this->dbhost, $this->dbport, $this->dbuser, $this->dbpassword);
		if ($connection -> connect_error) {
			die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connected successfully";
		return $connection;
	}

	public function queryMysql_on_server($query)
	{
    $connection = connecttodb(); // bien sieu toan cuc
    $result = $connection->query($query);
    if(!$result)
    {
    	die($connection->error);
    }
    return $result;
}

abstract protected function createDatabase($name);

public function connecttodb($dbname){
	$conn = new mysqli($this->dbhost, $this->dbuser, $this->dbpassword, $dbname,$this->dbport);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected 2 successfully";
	return $conn;
}

abstract protected function createTabe($name, $body);

abstract protected function insertInto($name, $body);

abstract protected function add($name, $body);

}

?>