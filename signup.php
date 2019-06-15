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
<div class="register-area" style="background-color: rgb(249, 249, 249);">
            <div class="container">

                <div class="col-md-6">
                    <div class="box-for overflow">
                        <div class="col-md-12 col-xs-12 register-blocks">
                            <h2>New account : </h2> 
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success">Register</button>
                                </div><br>
                                <div class="text-center">
                                	<p> Existing User: <a href="login.php">Login</a></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</body>
</html>
