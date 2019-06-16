<?php
//ini_set('display_errors',1);
include_once 'DBConnector.php';
include_once 'user.php';
include_once 'fileUploader.php';
$con= new DBConnector; //DB connection is made
//Data insert code starts here

if(isset($_POST['btn-save'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	$city= $_POST['city'];
	$title= $_POST['title'];
	$beds= $_POST['beds'];
	$baths=$_POST['baths'];
	$price=$_POST['price'];
	$file=$_FILES["fileToUpload"]["tmp_name"];
	
	//Creating a user object
	$user= new User ($email,$password,$city,$title,$beds,$baths,$price,$file);
	
	//create object for file uploading
	$uploader=new FileUploader;
	
	
	if (!$user->validateForm($con->conn)){
		$user->createFormErrorSessions($con->conn);
		header("Refresh:0");
		die();
	}
	$res= $user->save($con->conn);
	//call uploadFile(), which returns
	$file_upload_response= $uploader->uploadFile();
	
	//check if save works successfully
	
	if($res){
		echo "Your property details have been uploaded successfully";
	}
	else {
		echo "User details couldn't be saved!";
	}
	/*
	if(file_upload_response){
		echo "Save operation of image was successful";
	}
	
	else {
		echo "Couldn't save image!";
	}
	*/
}?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="jquery/jquery-3.4.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
  
<title>Enrol your property for sale</title>
		<script type="text/javascript" src="validate.js"></script>
		<link rel="stylesheet" type="text/css" href="validate.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
<header>
<!-- Top navigation -->
	<div style="display:inline; float:left"><a href="index.php"><img src="img/logo.jpg" width="150px" height="50px"></a>
        
    </div>
    
    <div class="topnav">

	<!-- Centered link -->
		
        
        <div class="topnav-centered">
			<a href="index.php" >Home</a>
			<a href="news.php">News</a>
			<a href="about.php">About</a>
			<a href="contact.php" >Contact</a>
            <a href="login.php">Login</a>
		</div>
        </div>
</header>
<form method="post" name="user_details" id="user_details">
<table align="center">
<tr>
<td>
<div id="form-errors">
<?php
session_start();
if(!empty($_SESSION['form_errors'])){
	echo " " . $_SESSION['form_errors'];
	unset($_SESSION['form_errors']);
}
?>
</div>
</td>
</tr>
</table>
</form>


                         <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Sell Property / Fill the required details </h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->
        <!-- register-area -->
        <div class="register-area" style="">
           
           <div class="container">

                <div class="col-md-6">
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>Property Information : </h2> 
                           <form method="post" name="user_details" id="user_details" onsubmit="return validateForm()" enctype="multipart/form-data" action="<?=$_SERVER['PHP_SELF']?>">
								<div class="form-group">
                                    <label for="city">Email</label>
                                    <input type="text" class="form-control" name="email" />
                                </div>
								<div class="form-group">
                                    <label for="city">Password</label>
                                    <input type="password" class="form-control" name="password" />
                                </div>
                                <div class="form-group">
                                    <label for="password">City</label>
                                    <input type="text" class="form-control" name="city" />
                                </div>
                                <div class="form-group">
                                    <label for="title">Property Description</label>
                                    <input type="text" class="form-control" name="title" />
                                </div>
								<div class="form-group">
                                    <label for="beds">No of rooms</label>
                                    <input type="text" class="form-control" name="beds"  />
                                </div>
								<div class="form-group">
                                    <label for="baths">No of bathrooms</label>
                                    <input type="text" class="form-control" name="baths" />
                                </div>
								<div class="form-group">
                                    <label for="price">Quoting price</label>
                                    <input type="text" class="form-control" name="price"  />
                                </div>
								<div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" name="fileToUpload" id="fileToUpload"/>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="btn-save" class="btn btn-success"> Upload</button>
                                </div>
                            </form>
                            <br>
                            
                           
                        </div>
                        
                    </div>
                </div>
                
                
                
                    </div>
            
        </div>
</body>
</html>
