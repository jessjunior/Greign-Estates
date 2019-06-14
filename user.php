<?php
include "Crud.php";
include "authenticator.php";
include_once 'DBConnector.php';

class User implements Crud, Authenticator{
  private $user_id;
  private $con;
  private $city;
  private $title;
  private $beds;
  private $baths;
  private $price;
  private $filetoUpload;

//Using class constructor to initialize values member variables cant be instantiated from elsewhere; They are private
function __construct($city="",$title="",$beds="",$baths="",$price="",$filetoUpload=""){
$this->city = $city;
$this->title = $title;
$this->beds = $beds;
$this->baths = $baths;
$this->price = $price;
$this->filetoUpload=$filetoUpload;

}

public static function create(){
	$instance= new self ();
	return $instance;
}

//username setter
public function setCity ($city) {
	$this->username = $city;
}

//username getter
public function getCity(){
	return $this->city;
}

//password setter
public function setTitle($title){
	$this->password= $title;
}

//password getter
public function getTitle(){
	return $this->title;
}

//user id setter
public function setBeds($beds){
$this->beds= $beds;
}

//user id getter
public function getBeds(){
return $this->beds;
}
public function setBaths($baths){
$this->baths= $baths;
}

//user id getter
public function getBaths(){
return $this->baths;
}

public function setPrice($price){
$this->price= $price;
}

//user id getter
public function getPrice(){
return $this->price;
}

public function save($con){
$city= $this->city;
$title= $this->title;
$beds= $this->beds;
$baths= $this->baths;
$price= $this->price;

$file=$this->filetoUpload;
$fileln= new FileUploader();
$fileln->uploadFile();



$res= mysqli_query($con, "INSERT INTO properties (city,title,email,beds,baths,price,image) VALUES ('$city','$title','$beds','$baths','$price','$file')") or die ("Error " . mysqli_error($con));
return $res;
}

public function readAll(){
  $res=mysqli_query($con,"SELECT * FROM properties");
  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
/*public function readUserApiKey($user){
	$this->DBConnect();
	$res=mysqli_query($this->con->conn, "SELECT api_key FROM api_keys WHERE user_id=$user") or die ("Error " . mysqli_error($this->con->conn));
	$this->DBClose();
	
	if(mysqli_num_rows($res)){
		return mysqli_fetch_array($res)['api_key'];
	}
	return false;
	
}
*/
public function readUnique(){
return null;
}

public function search(){
return null;
}

public function update(){
return null;
}

public function removeOne(){
return null;
}

public function removeAll(){
return null;
}

public function validateForm(){
	//Return true if the values are not empty
	
	$city = $this->city;
	$title = $this->title;
	$beds = $this->beds;
	$baths=$this->baths;
	$price=$this->price;
}

public function createFormErrorSessions(){
	session_start();
	$_SESSION['form_errors'] = "All fields are required";
}

public function hashPassword(){
	//inbuilt function hashes out password
	$this->password= password_hash($this->password, PASSWORD_DEFAULT);
}



public function createUserSession(){
	session_start();
	$_SESSION['username'] = $this->getTitle();
	$_SESSION['id']=$this->getBeds();
}

public function logout(){
	session_start();
	unset($_SESSION['username']);
	session_destroy();
	header("Location:index.php");
}

public function isUserExist(){
	$con = new DBConnector;
	$found = false;
	$res = mysqli_query($con->conn,"SELECT * FROM properties") or die("Error". mysqli_error($con->conn));

	while ($row = mysqli_fetch_array($res) ) {
		if ($this->getUsername() == $row['id']) {
			$found = true;
		}
	}
	$con->closeDatabase();
	return $found;
}
public function DBConnect() {
	$this->con = new DBConnector;
}

public function DBClose() {
	$this->con->closeDatabase();
}
public function isPasswordCorrect(){
	$con= new DBConnector;
	$username = $this->getUsername();
	$found= false;
	$res= mysqli_query($con->conn, "SELECT * FROM user where username='$username'") or die ("Error" . mysqli_error($con));
	
	while ($row=mysqli_fetch_array($res)){
		if (password_verify($this->getPassword(), $row ['password']) && $this->getUsername() == $row['username']){
			$this->setUserId($row['id']);
			$found= true;
		}
	}
	
	//close the database connection 
	$con->closeDatabase();
	return $found;
	//return true
}
public function login(){
	if ($this->isPasswordCorrect()){
		//password is correct, so we load the protected page
		header("Location:private_page.php");
	}
}

}

?>