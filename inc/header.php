<!DOCTYPE html>
<html lang="en">

<head>
	<title>RA Furniture | Home</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />

	<!-- javascript -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/script.js"></script>
	<script src="action/action.js"></script>

	
	
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<!-- banner slider -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="header d-md-flex align-items-center py-sm-3 py-2 px-sm-2 px-1">
					<!-- logo -->
					<div id="logo">
						<h1><a href="index.php">RA Furniture</a></h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls ml-5">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About Us</a></li>
								<li><a href="#gallery">Gallery</a></li>
								<li>
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle toogle-2">More <span class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="#">More <span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
										<li><a href="#new" class="drop-text">New Collections</a></li>
										<li><a href="blog.php" class="drop-text">Blog</a></li>
										<li><a href="#newsletter" class="drop-text">Newsletter</a></li>
									</ul>
								</li>
								<li><a href="contact.php">Contact Us</a></li>
							</ul>
							<ul class="lspage">
								<!-- <li><a href="Login.php">Login</a></li>
									<li><a href="Signup.php">SignUp</a></li> -->
								<?php 
								session_start();
									if(isset($_GET['action'])){

									 $unset = session_unset();
									if ($unset) {
										header("location:index.php");	
									}
								}
									
									if(isset($_SESSION['id'])){	?>
									<li><a href="?action=$_SESSION['id']">logout</a></li>
									<li><a href="Signup.php">SignUp</a></li>

									<?php }else{	?>


									<li><a href="Login.php">Login</a></li>
									<li><a href="Signup.php">SignUp</a></li>
									
							<?php	}
									?>

									

								
								
							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</header>
		<!-- //header -->

		<!-- banner -->
		
		<!-- //banner -->
	</div>
	<!-- //main banner -->