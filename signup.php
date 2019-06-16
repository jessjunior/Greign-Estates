<?php
//ini_set('display_errors',1);
include_once 'DBConnector.php';
include_once 'newuser.php';

$con= new DBConnector; //DB connection is made
//Data insert code starts here

if(isset($_POST['btn-save'])){
	$firstname= $_POST['firstname'];
	$lastname= $_POST['lastname'];
	$email=$_POST['email'];
	$password=$_POST['password'];


	//Creating a user object
	$user= new User ($firstname,$lastname,$email,$password);
	
	
	if (!$user->validateForm($con->conn)){
		$user->createFormErrorSessions($con->conn);
		header("Refresh:0");
		die();
	}
	$res= $user->save($con->conn);
	//call uploadFile(), which returns
	
	//check if save works successfully
	
	if($res){
		echo "Your details have been uploaded successfully";
	}
	else {
		echo "User details couldn't be saved!";
	}

}?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery/jquery-3.4.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<title>Home</title>

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
			<a href="search.php">Search</a>
			<a href="news.php">News</a>
			<a href="about.php">About</a>
			<a href="contact.php">Contact</a>
            <a href="login.php" class="active">Login</a>
		</div>
    </div>
</header>
<div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">New account / Sign up </h1>               
                    </div>
                </div>
            </div>
        </div>
<div class="register-area" style="background-color: rgb(249, 249, 249);">
            <div class="container">

                <div class="col-md-6">
                    <div class="box-for overflow">
                        <div class="col-md-12 col-xs-12 register-blocks">
                            <h2>New account : </h2> 
                             <form method="post" name="user_details" id="user_details" onsubmit="return validateForm()" enctype="multipart/form-data" action="<?=$_SERVER['PHP_SELF']?>">
                                <div class="form-group">
                                    <label for="name">First Name</label>
                                    <input type="text" class="form-control" name="firstname">
                                </div>
								<div class="form-group">
                                    <label for="name"> Last Name</label>
                                    <input type="text" class="form-control" name="lastname">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="btn-save" class="btn btn-success">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</body>
</html>
