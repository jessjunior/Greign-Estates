<?php
    require 'common/init.php';
	if(isset($_POST['btn-login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = $db->query("SELECT * from users  WHERE email = '$email' AND password = '$password' ");

	if($query->rowCount() > 0){
		$result = $query->fetchAll(PDO::FETCH_OBJ);
		foreach($result as $data){
           $id = $data->id;
           $email = $data->email;

           $_SESSION['email'] = $email;
           
		}
        echo 'true';
		header("location: index.php");
	}else{
        echo 'false';
	}}
	?>
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
			<a href="contact.php" >Contact</a>
            <a href="login.php" class="active">Login</a>
		</div>
        </div>
</header>

                         <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Home New account / Sign in </h1>               
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
                            <h2>Login : </h2> 
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success"> Log in</button>
                                </div>
                                <br>
                                <div class="text-center">
                                	<p> New User: <a href="signup.php">Register</a></div>
                            </form>
                            <br>
                            
                           
                        </div>
                        
                    </div>
                </div>
                
                
                
                    </div>
            
        </div>
</body>

<script>
$(document).ready(function(){
$("#login_form1").submit(function(e){
		e.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "login.php",
			data: formData,
			success: function(html){
			if(html=='true')
			{

				$.jGrowl("Loading Files Please Wait...", { sticky: true });
				$.jGrowl("Welcome Administrator", { header: 'Access Granted' });
				var delay = 1000;
					setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
			}else
			{
			    $.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
			}
			}
		});
		return false;
	});
});
</script>
</html>
