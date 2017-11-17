<?php
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>

    <head>
         <!-- Add to home screen for Safari on iOS  -->
<!--  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="msapplication-TileImage" content="img/clear.png">
  <meta name="msapplication-TileColor" content="#2F3BA2">
  <meta name="theme-color" content="#fff">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Weather PWA">
  <link rel="apple-touch-icon" href="img/clear.png">  -->
  
		
		
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title> Meeting Management Websites </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/icomoon-social.css">
       <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'> 

        <link rel="stylesheet" href="css/leaflet.css" />
		
		<link rel="stylesheet" href="css/main.css">
		<link rel="manifest" href="manifest.json">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
       
        
<style>
  .logo-wrapper{
    width:550px;
	height:140px;
  }
		 
</style>
        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
	        <div class="container">
	        	<div class="menuextras">
					<div class="extras">
						<ul>
						
							<li>
								<div class="dropdown choose-country">
									<a class="#" data-toggle="dropdown" href="#"><img src="img/flags/in.png" alt="India"> India</a>
									<ul class="dropdown-menu" role="menu">
										<li role="menuitem"><a href="#"><img src="img/flags/us.png" alt="United States"> US</a></li>
										<li role="menuitem"><a href="#"><img src="img/flags/de.png" alt="Germany"> DE</a></li>
										<li role="menuitem"><a href="#"><img src="img/flags/es.png" alt="Spain"> ES</a></li>
									</ul>
								</div>
							</li>
							<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
							<a href="page-login.php">Logout</a>
			        	</ul>
					</div>
		        </div>
		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="index.html"><img src=""  alt="" ><h3 style=color:lightblue>Meeting Management System</h3></li>
						<li class="active">
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="eve.php">Events</a>
						</li>
						
										
						<li>
							<a href="Calenders.html">Calenders</a>
						</li>
						<li>
							<a href="Contact.html">Contact</a>
						
						</li>
					
						
						
					</ul>
				</nav>
			</div>
		</div>

        <!-- Homepage Slider -->
        <div class="homepage-slider">
        	<div id="sequence">
				<ul class="sequence-canvas">
					<!-- Slide 1 -->
					<li class="bg4">
						<!-- Slide Title -->
						<h2 class="title">Responsive</h2>
						<!-- Slide Text -->
						<h3 class="subtitle">Meeting Management Websites using LAMP</h3>
						<!-- Slide Image -->
						<img class="slide-img" src="img/homepage-slider/slide1.jpg" alt="Slide 1" />
					</li>
					<!-- End Slide 1 -->
					<!-- Slide 2 -->
					<li class="bg12">
						<!-- Slide Title -->
						<h2 class="title">Schemes</h2>
						<!-- Slide Text -->
						<h3 class="subtitle">Comes with creative Ideas</h3>
						<!-- Slide Image -->
						<img class="slide-img" src="img/homepage-slider/slide2.jpg" alt="Slide 2" />
					</li>
					<!-- End Slide 2 -->
					<!-- Slide 3 -->
					<li class="bg1">
						<!-- Slide Title -->
						<h2 class="title">Feature Rich</h2>
						<!-- Slide Text -->
						<h3 class="subtitle">Huge amount of components!</h3>
						<!-- Slide Image -->
						<img class="slide-img" src="img/homepage-slider/slide3.jpg" alt="Slide 3" />
					</li>
					<li class="bg12">
						<!-- Slide Title -->
						<h2 class="title"></h2>
						<!-- Slide Text -->
						<h3 class="subtitle"></h3>
						<!-- Slide Image -->
						<img class="slide-img" src="img/homepage-slider/meet9h.jpg" alt="Slide 4" />
					</li>
					<!-- End Slide 3 -->
				</ul>
				<div class="sequence-pagination-wrapper">
					<ul class="sequence-pagination">
						<li>1</li>
						<li>2</li>
						<li>3</li>
						<li>4</li>
					</ul>
				</div>
			</div>
        </div>
        <!-- End Homepage Slider -->

		<!-- Press Coverage -->
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="in-press press-wired">
							<a href="#">Meeting Invitation through e-mail</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="in-press press-mashable">
							<a href="#">Add Agenda Points to Meeting</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="in-press press-techcrunch">
							<a href="#">Minutes of Meeting</a>
						</div>
						
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Press Coverage -->

		<!-- Services -->
		<div style=background-color:hotpink>
        <div class="section">
	        <div class="container">
			<div style=background-color:hotpink>
	        	<div class="row">
				<div style=background-color:hotpink>
	        		<div class ="col-md-4 col-sm-6">
					
	        			<div class ="service-wrapper">
		        			<img src="img/service-icon/diamond.png" alt="Service 1">
		        			<h3>Current Running Events</h3>
		        			<p>No Events Today</p>
		        			<a href="#" class="btn">Read more</a>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="img/service-icon/ruler.png" alt="Service 2">
		        			<h3>Forums</h3>
		        			<p>Register Your Seat in comming Events</p>
		        			<a href="register.php" class="btn">Click Here!</a>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="img/service-icon/box.png" alt="Service 3">
		        			<h3>Events Over</h3>
		        			<p>Attainded Events</p>
		        			<a href="#" class="btn">Read more</a>
		        		</div>
	        		</div>
	        	</div>
	        </div>
	    </div>
	    <!-- End Services -->

		<!-- Call to Action Bar -->
		
	    <div class="section section-white">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="calltoaction-wrapper">
							<h3>Meeting Management </h3>   <!-- <a href="http://www.dragdropsite.com" class="btn btn-orange"></a>  -->
						</div>
					</div> 
				</div>
			</div>
		</div>
		
	    <div class="section">
	    	<div class="container">
	    	  	<h2>Our Clients</h2>
				<div class="clients-logo-wrapper text-center row">
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/canon.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/cisco.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/dell.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/ea.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/ebay.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/facebook.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/google.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/hp.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/microsoft.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/mysql.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/sony.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/yahoo.png" alt="Client Name"></a></div>
				</div>
			</div>
	    </div>
	   
        <!-- Javascripts -->
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script> 
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/jquery.sequence-min.js"></script>
        <script src="js/jquery.bxslider.js"></script>
        <script src="js/main-menu.js"></script>
        <script src="js/template.js"></script>

    </body>
	<script src=""> </script>
</html>