<?php
  $con = mysqli_connect("localhost","root","") or die(mysql_error());
  mysqli_select_db($con,'greign_estates');
 

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GREIGN ESTATES | Search Page</title>
        <meta name="description" content="GARO is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/fontello.css">
        <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="assets/css/price-range.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body>
	<header>
<!-- Top navigation -->

<div style="display:inline; float:left"><a href="index.php"><img src="img/logo.jpg" width="150px" height="50px"></a>
        
    </div>
	<!-- Centered link -->

		    <div class="topnav">
        
        <div class="topnav-centered" >
			<a href="index.php">Home</a>
			<a href="search.php" class="active">Search</a>
			<a href="news.php">News</a>
			<a href="about.php">About</a>
			<a href="contact.php">Contact</a>
            <a href="login.php">Login</a>
		</div>
        </div>
</header>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->

        <!--End top header -->

       

        <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">

                    <div class="item"><img src="assets/img/slide1/slider-image-1.jpg" ></div>
                    <div class="item"><img src="assets/img/slide1/slider-image-2.jpg" ></div>
                    <div class="item"><img src="assets/img/slide1/slider-image-3.jpg" ></div>
					<div class="item"><img src="assets/img/slide1/slider-image-4.jpg"></div>

                </div>
            </div>
            <div class="slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2>Property Searching Just Got So Easy</h2>
                        <p>Start to type for a specific category inside the search bar to "filter" the search options.</p>
                        <div class="search-form wow pulse" data-wow-delay="0.8s">

                            <form action=<?php echo $_SERVER['PHP_SELF'];?> method="post" class=" form-inline">
                                <button class="btn  toggle-btn" type="button"><i class="fa fa-bars"></i></button>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="search" placeholder="Key word">
                                </div>
                                <div class="form-group">                                   
                                    <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select your city">

                                        <option>Nairobi</option>
                                        <option>Mombasa</option>
                                        <option>Kisumu</option>
                                        <option>Nakuru</option>
                                        <option>Eldoret</option>
										
                                    </select>
                                </div>
                                <div class="form-group">                                     
                                    <select id="basic" class="selectpicker show-tick form-control">
                                        <option> -Status- </option>
                                        <option>Rental </option>
                                        <option>For Sale</option>
                                        <option>Used</option>  

                                    </select>
                                </div>
                                <button class="btn search-btn" name="submit" type="submit"><i class="fa fa-search"></i></button>

                                <div style="display: none;" class="search-toggle">

                                    <div class="search-row">   

                                        <div class="form-group mar-r-20">
                                            <label for="price-range">Price range (Ksh):</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="600" data-slider-step="5" 
                                                   data-slider-value="[0,450]" id="price-range" ><br />
                                            <b class="pull-left color">Ksh 2,000-</b> 
                                            <b class="pull-right color">Ksh 100,000</b>
                                        </div>
                                        <!-- End of  -->  

                                        <div class="form-group mar-l-20">
                                            <label for="property-geo">Property geo (m2) :</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="600" data-slider-step="5" 
                                                   data-slider-value="[50,450]" id="property-geo" ><br />
                                            <b class="pull-left color">40m</b> 
                                            <b class="pull-right color">12000m</b>
                                        </div>
                                        <!-- End of  --> 
                                    </div>

                                    <div class="search-row">

                                        <div class="form-group mar-r-20">
                                            <label for="price-range">Min baths :</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="600" data-slider-step="5" 
                                                   data-slider-value="[250,450]" id="min-baths" ><br />
                                            <b class="pull-left color">1</b> 
                                            <b class="pull-right color">120</b>
                                        </div>
                                        <!-- End of  --> 

                                        <div class="form-group mar-l-20">
                                            <label for="property-geo">Min bed :</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="600" data-slider-step="5" 
                                                   data-slider-value="[250,450]" id="min-bed" ><br />
                                            <b class="pull-left color">1</b> 
                                            <b class="pull-right color">120</b>
                                        </div>
                                        <!-- End of  --> 

                                    </div>
                                    <br>
                                    <div class="search-row">  

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Fire Place(3100)
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  -->  

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Dual Sinks(500)
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  --> 

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Hurricane Shutters(99)
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  --> 
                                    </div>

                                    <div class="search-row">  

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Swimming Pool(1190)
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  -->  

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 2 Stories(4600)
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  --> 

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Emergency Exit(200)
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  --> 
                                    </div>                                    

                                    <div class="search-row">  

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Laundry Room(10073)
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  -->  

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Jog Path(1503)
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  --> 

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 26' Ceilings(1200)
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  --> 
                                        <br>
                                        <hr>
                                    </div>                             
                                    <button class="btn search-btn prop-btm-sheaerch" type="submit"><i class="fa fa-search"></i></button>  
                                </div>                    

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- property area -->
        <div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>Top submitted property</h2>
                        <p>Check out the best and latest property around . </p>
                    </div>
                </div>

                <div class="row">
                    <div class="proerty-th">
                        <div id="property1" class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.php" ><img src="assets/img/demo/property-1.jpg"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html" >New Stylish villa  </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b>Area :</b> 200m </span>
                                    <span class="proerty-price pull-right">Kshs 300,000</span>
                                </div>
                            </div>
                        </div>
                       

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-2.html" ><img src="assets/img/demo/property-2.jpg"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="property-2.html" >Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b>Area :</b> 150m </span>
                                    <span class="proerty-price pull-right">Kshs 275,000</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-3.html" ><img src="assets/img/demo/property-3.jpg"></a>

                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="property-3.html" >Modern Self-Contained House </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b>Area :</b> 120m </span>
                                    <span class="proerty-price pull-right">Kshs 97,000</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="assets/img/demo/property-4.jpg"></a>

                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html" >Holiday gorgeous villa near beach </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b>Area :</b> 500m </span>
                                    <span class="proerty-price pull-right">Kshs 750,000</span>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-3.html" ><img src="assets/img/demo/property-2.jpg"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="property-3.html" >Old school unique villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b>Area :</b> 127m </span>
                                    <span class="proerty-price pull-right">Kshs 320,000</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-2.html" ><img src="assets/img/demo/property-4.jpg"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="property-2.html" >2-storey house in town </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b>Area :</b> 110m </span>
                                    <span class="proerty-price pull-right">Kshs 220,000</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="assets/img/demo/property-3.jpg"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html" >Large beautiful four-bedroomed house</a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b>Area :</b> 330m </span>
                                    <span class="proerty-price pull-right">Kshs 500,000</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-tree more-proerty text-center">
                                <div class="item-tree-icon">
                                    <i class="fa fa-th"></i>
                                </div>
                                <div class="more-entry overflow">
                                    <h5><a href="property-1.html" >CAN'T DECIDE ? </a></h5>
                                    <h5 class="tree-sub-ttl">Show all properties</h5>
                                    <button class="btn border-btn more-black" value="All properties">All properties</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

       

        <!--TESTIMONIALS -->
        <div class="testimonial-area recent-property" style="background-color: #FCFCFC; padding-bottom: 15px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>Our Customers Said  </h2> 
                    </div>
                </div>

                <div class="row">
                    <div class="row testimonial">
                        <div class="col-md-12">
                            <div id="testimonial-slider">
                                <div class="item">
                                    <div class="client-text">                                
                                        <p>Great website! Easy to use and convenient for business</p>
                                        <h4><strong>Mombasa, Kenya </strong><i>Investor</i></h4>
                                    </div>
                                    <div class="client-face wow fadeInRight" data-wow-delay=".9s"> 
                                        <img src="assets/img/client-face1.png" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-text">                                
                                        <p>Nice design and appearance! I love the look and feel</p>
                                        <h4><strong>Nairobi, Kenya </strong><i>Web Designer</i></h4>
                                    </div>
                                    <div class="client-face">
                                        <img src="assets/img/client-face2.png" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-text">                                
                                        <p>I can access property from whichever side of the country</p>
                                        <h4><strong>Nakuru, Kenya </strong><i>Business Owner</i></h4>
                                    </div>
                                    <div class="client-face">
                                        <img src="assets/img/client-face1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Count area -->
        <div class="count-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>You can trust Us </h2> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12 percent-blocks m-main" data-waypoint-scroll="true">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-users"></span>
                                    </div>
                                    <div class="chart" data-percent="5000">
                                        <h2 class="percent" id="counter">0</h2>
                                        <h5>HAPPY CUSTOMER </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-home"></span>
                                    </div>
                                    <div class="chart" data-percent="12000">
                                        <h2 class="percent" id="counter1">0</h2>
                                        <h5>Properties in stock</h5>
                                    </div>
                                </div> 
                            </div> 
                            <div class="col-sm-3 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-flag"></span>
                                    </div>
                                    <div class="chart" data-percent="120">
                                        <h2 class="percent" id="counter2">0</h2>
                                        <h5>Locations registered </h5>
                                    </div>
                                </div> 
                            </div> 
                            <div class="col-sm-3 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-graph2"></span>
                                    </div>
                                    <div class="chart" data-percent="5000">
                                        <h2 class="percent"  id="counter3">5000</h2>
                                        <h5>DEALER BRANCHES</h5>
                                    </div>
                                </div> 

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- boy-sale area -->
        <div class="boy-sale-area">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0 col-xs-12">
                        <div class="asks-first">
                            <div class="asks-first-circle">
                                <span class="fa fa-search"></span>
                            </div>
                            <div class="asks-first-info">
                                <h2>ARE YOU LOOKING FOR A Property?</h2>
                                <p> Get the best deals and newest houses on our site!</p>                                        
                            </div>
                            <div class="asks-first-arrow">
                                <a href="properties.html"><span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-10 col-sm-offset-1 col-xs-12 col-md-offset-0">
                        <div  class="asks-first">
                            <div class="asks-first-circle">
                                <span class="fa fa-usd"></span>
                            </div>
							<a href="sell.php"
                            <div class="asks-first-info">
                                <h2>DO YOU WANT TO SELL A Property?</h2>
                                <p> Are you interested in renting or selling your property?</p>
                            </div>
							</a>
                            <div class="asks-first-arrow">
                                <a href="properties.html"><span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <p  class="asks-call">QUESTIONS? CALL US  : <span class="strong"> + 254-722- 123-456</span></p>
                    </div>
                </div>
            </div>
        </div>
		 <div class="footer-area">

            <div class="footer-copy text-center">
                <div class="container">
                    <div class="row">
                        <div class="pull-left">
                            <span> (C) <a href="http://www.KimaroTec.com">GreignEstates</a> , All rights reserved 2019  </span> 
                        </div> 
                        <div class="bottom-menu pull-right"> 
                            <ul> 
                                <li><a class="wow fadeInUp animated" href="index.php" data-wow-delay="0.2s">Home</a></li>
                                <li><a class="wow fadeInUp animated" href="news.php" data-wow-delay="0.3s">News</a></li>
                                <li><a class="wow fadeInUp animated" href="about.php" data-wow-delay="0.4s">About</a></li>
                                <li><a class="wow fadeInUp animated" href="contact" data-wow-delay="0.6s">Contact</a></li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>

        </div>

                   <?php 
                 $output = '';
                 $search;
  if (isset($_POST['submit'])) {
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);

    $query = mysqli_query($con,"SELECT * FROM properties WHERE (title LIKE '%$searchq%') or (city LIKE '%$searchq%') or (baths LIKE '%$searchq%') or (beds LIKE '%$searchq%')") or die("results not found");
    $count = mysqli_num_rows($query);
    if ($count==0) {
      $output='There was no such result';
    }else{
      while ($row = mysqli_fetch_array($query)) {
        $city = $row['city'];
        $title = $row['title'];
        $baths = $row['baths'];
        $beds = $row['beds'];
        $id = $row['id'];

        $output.='<div>'.$city.' '.$title.' '.$baths.' '.$beds.'</div>';
        echo "$output";
      }
    }
}
              ?>
        <script src="assets/js/modernizr-2.6.2.min.js"></script>

        <script src="assets/js/jquery-1.10.2.min.js"></script> 
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.js"></script>

        <script src="assets/js/easypiechart.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>

        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.js"></script>

        <script src="assets/js/icheck.min.js"></script>
        <script src="assets/js/price-range.js"></script>

        <script src="assets/js/main.js"></script>

    </body>
</html>