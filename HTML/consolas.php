<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>EndGam - Gaming Magazine Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
<header class="header-section">
		<div class="header-warp">
			<div class="header-social d-flex justify-content-end">
				<p>Síguenos:</p>
				<a href="#"><i class="fa fa-facebook"></i></a>
			</div>
			<div class="header-bar-warp d-flex">
				<!-- site logo -->
				<a href="home.html" class="site-logo">
					<img src="./img/RGC4.png" style="width:150px; padding-bottom: 25px;" alt="">
				</a>
				<nav class="top-nav-area w-100">
					<div class="user-panel">
						<a href="">Iniciar Sesion</a> / <a href="">Registrarse</a>
					</div>
					<!-- Menu -->
					<br>
					<br>
					<ul class="main-menu primary-menu">
						<li><a href="home.html">Inicio</a></li>
						<li><a href="games.html">Juegos</a></li>	
						<li><a href="consolas.php">Consolas Disponibles</a></li>
						<li><a href="contact.html">Contacto</a></li>
					</ul>
				</nav>
			</div>
		</div>
</header>
	<!-- Header section end -->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg">
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="img/control.png">
			<h2>Juegos</h2>
			<div class="site-breadcrumb">
				<a href="home.html">Home</a>  /
				<span>Juegos</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->




	<!-- Games section -->
	<section class="games-section">
		<div class="container">
			<!--<ul class="game-filter">
				<li><a href="">A</a></li>
				<li><a href="">B</a></li>
				<li><a href="">C</a></li>
				<li><a href="">D</a></li>
				<li><a href="">E</a></li>
				<li><a href="">F</a></li>
				<li><a href="">G</a></li>
				<li><a href="">H</a></li>
				<li><a href="">I</a></li>
				<li><a href="">J</a></li>
				<li><a href="">K</a></li>
				<li><a href="">L</a></li>
				<li><a href="">M</a></li>
				<li><a href="">N</a></li>
				<li><a href="">O</a></li>
				<li><a href="">P</a></li>
				<li><a href="">Q</a></li>
				<li><a href="">R</a></li>
				<li><a href="">S</a></li>
				<li><a href="">T</a></li>
				<li><a href="">U</a></li>
				<li><a href="">V</a></li>
				<li><a href="">W</a></li>
				<li><a href="">X</a></li>
				<li><a href="">Y</a></li>
				<li><a href="">Z</a></li>
			</ul>-->
		<div class="row">
				<div class="col-xl-7 col-lg-8 col-md-7">
					<div class="row" id="listarConsolas">

                    <div class="col-xl-3 col-md-6 mb-4">
        				<div class="card" style="width: 18rem;">
            <img  src="consola.png" alt="Card image cap"
                	 style="height: 40%; width: 40%; margin-left: auto; margin-right: auto; margin-top: auto; margin-bottom: auto; padding-top: 10%;">
            <div class="card-body" style="text-align: center">
                <h5 class="card-title">#<? echo $row[1] ?></h5>
                <p class="card-text" style="text-align: center"><strong><?php echo $resultP[1] ?></strong></p>
            </div>
		            <ul class="list-group list-group-flush" style="text-align: center">
		                <li class="list-group-item">$<?php echo $resultP[2] ?> <small>/ hora de juego</small></li>
		                <li class="list-group-item"><strong><? echo $row[2] ?></strong></li>
		            </ul>
       			 </div>
    		</div>
						<!--<div class="col-lg-4 col-md-6">
							<div class="game-item">
								<img src="img/games/1.jpg" alt="#">
								<h5>Zombie Appocalipse 2</h5>
								<a href="game-single.html" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="game-item">
								<img src="img/games/2.jpg" alt="#">
								<h5>Dooms Day</h5>
								<a href="game-single.html" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="game-item">
								<img src="img/games/3.jpg" alt="#">
								<h5>The Huricane</h5>
								<a href="game-single.html" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
							</div>
						</div>-->
					</div>
				</div>

				<div class="col-xl-3 col-lg-4 col-md-5 sidebar game-page-sideber">
					<div id="stickySidebar">
						<div class="widget-item">
							<div class="categories-widget">
								<h4 class="widget-title">categories</h4>
								<ul>
									<li><a href="">Games</a></li>
									<li><a href="">Gaming Tips & Tricks</a></li>
									<li><a href="">Online Games</a></li>
									<li><a href="">Team Games</a></li>
									<li><a href="">Community</a></li>
									<li><a href="">Uncategorized</a></li>
								</ul>
							</div>
						</div>
						<!--<div class="widget-item">
							<div class="categories-widget">
								<h4 class="widget-title">platform</h4>
								<ul>
									<li><a href="">Xbox</a></li>
									<li><a href="">X box 360</a></li>
									<li><a href="">Play Station</a></li>
									<li><a href="">Play Station VR</a></li>
									<li><a href="">Nintendo Wii</a></li>
									<li><a href="">Nintendo Wii U</a></li>
								</ul>
							</div>
						</div>-->
						<!--<div class="widget-item">
							<div class="categories-widget">
								<h4 class="widget-title">Genre</h4>
								<ul>
									<li><a href="">Online</a></li>
									<li><a href="">Adventure</a></li>
									<li><a href="">S.F.</a></li>
									<li><a href="">Strategy</a></li>
									<li><a href="">Racing</a></li>
									<li><a href="">Shooter</a></li>
								</ul>
							</div>
						</div>-->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Games end-->


	<!-- Featured section -->
	<!--<section class="featured-section">
		<div class="featured-bg set-bg" data-setbg="img/featured-bg.jpg"></div>
		<div class="featured-box">
			<div class="text-box">
				<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
				<h3>The game you’ve been waiting  for is out now</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vestibulum posuere porttitor justo id pellentesque. Proin id lacus feugiat, posuere erat sit amet, commodo ipsum. Donec pellentesque vestibulum metus...</p>
				<a href="#" class="read-more">Read More <img src="img/icons/double-arrow.png" alt="#"/></a>
			</div>
		</div>
	</section>-->
	<!-- Featured section end-->


	<!-- Newsletter section -->
	<!--<section class="newsletter-section">
		<div class="container">
			<h2>Subscribe to our newsletter</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="ENTER YOUR E-MAIL">
				<button class="site-btn">subscribe  <img src="img/icons/double-arrow.png" alt="#"/></button>
			</form>
		</div>
	</section>-->
	<!-- Newsletter section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="footer-left-pic">
				<img src="img/F1.png" style="width: 175px" alt="">
			</div>
			<div class="footer-right-pic">
				<img src="img/F2.png" style="width: 150px" alt="">
			</div>
			<a href="#" class="footer-logo">
				<img src="./img/RGC4.png" style="width: 300px" alt="">
			</a>
			<ul class="main-menu footer-menu">
				<li><a href="home.html">Inicio</a></li>
				<li><a href="games.html">Juegos</a></li>	
				<li><a href="consolas.php">Consolas Disponibles</a></li>
				<li><a href="contact.html">Contacto</a></li>
			</ul>
			<div class="footer-social d-flex justify-content-center">
				
				<a href="#"><i class="fa fa-facebook"></i></a>
				
			</div>
			<div class="copyright"><a href=""></a> 2020 @ All rights reserved</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky-sidebar.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
    <script src="functions_e.js"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {

            loadListPlataformas(); // carga lista de consolas

        }, false);
    </script>
    </script>
	</body>
</html>
