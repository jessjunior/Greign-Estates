<?php
define('DB_SERVER', 'localhost'); //we use the local machine
define('DB_USER', 'root'); //user is root. However you can create another user
define('DB_PASS' , ''); //data has not been set
define('DB_NAME', 'btc3205'); //The database name.

class DBConnector{

public $conn;
//Connection to DB is inside the class constructor

function __construct(){
$this->conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS, DB_NAME) or die("Error:" .mysqli_error());
//mysqli_select_db($this->conn, DB_NAME);
}
public function closeDatabase(){
mysqli_close($this->conn);
}
}
?>