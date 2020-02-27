<?php 
$dbhost = "localhost";
$dbport = 3306;
$dbuser = "root";
$dbpassword = "";

 

//connection to the DB

// Create connection
$connection =  mysqli_connect($dbhost, $dbuser, $dbpassword);

// Check connection
if ($connection -> connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

function queryMysql($query){
    global $connection; // bien sieu toan cuc
    $result = $connection->query($query);
    if(!$result){
        die($connection->error);
    }
    return $result;
}
function createDatabase($name){
	$str = "CREATE DATABASE IF NOT EXISTS $name";
	queryMysql($str);
	echo("database $name is created");
}
createDatabase("duongDb");


$conn = new mysqli($dbhost, $dbuser, $dbpassword, "duongDb",$dbport);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected 2 successfully";

function queryMysql2($query){
    global $conn; // bien sieu toan cuc
    $result = $conn->query($query);
    if(!$result){
        die($conn->error);
    }
    return $result;
}


function createTable($name, $body){
	// sql to create table
$sql = "CREATE TABLE $name ($body)";
queryMysql2($sql);
echo "Table $name is created";
}

function insertInto($name, $body){
    $sql = " INSERT INTO $name  $body";
    echo "data is inserted";
}

?>