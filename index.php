<?php
session_start();
if(!isset($_SESSION['email']))
{
  header("location: login.php");
}
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
<link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/fontello.css">
        <link href="fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/icheck.min_all.css">
        <link rel="stylesheet" href="css/price-range.css">
        <link rel="stylesheet" href="css/owl.carousel.css">  
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
<header>
<!-- Top navigation -->
	
   <div style="display:inline; float:left"><a href="index.php"><img src="img/logo.jpg" width="150px" height="50px" ></a>
        </div> 
    <div class="topnav">

	
        <div class="topnav-centered">
			<a href="index.php" class="active">Home</a>
			<a href="search.php">Search</a>
			<a href="news.php">News</a>
			<a href="about.php">About</a>
			<a href="contact.php">Contact</a>
            <a href="login.php">Login</a>
		</div>
        </div>
</header>

        
        
        <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
      	<img src="img/slide1.jpg" class="d-block w-100" title="One-stop Property Agency" alt="One-stop Property Agency" width="1170px" height="400px" />
        
        <div class="carousel-caption d-none d-md-block">
          <h5>One-stop Property Agency</h5>
          <p>Welcome to Greign Estates Ltd... </p>
        </div>
      </div>
      <div class="carousel-item">
      <img src="img/slide2.jpg" class="d-block w-100" title="Luxurious Houses" alt="Luxurious Houses" width="1170px" height="400px" />
        
        <div class="carousel-caption d-none d-md-block">
          <h5>Luxurious Houses</h5>
          <p>We have among the most luxurious properties located around Nairobi.</p>
        </div>
      </div>
      <div class="carousel-item">
      	<img src="img/slide3.jpg" class="d-block w-100" title="Easy to use website" alt="Easy to use website" width="1170px" height="400px" />
        
        <div class="carousel-caption d-none d-md-block">
          <h5>Easy to use website</h5>
          <p>We have made it extremely easy for you to search for your preferred property.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<footer></footer>

</body>
</html>
