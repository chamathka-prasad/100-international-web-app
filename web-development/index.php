<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="100 International">
	<meta name="keywords" content="web development, app development, mobile apps, websites, software solutions, 100 international"/>

	<meta property="og:title" content="Web & Apps Development | 100 International"/>
	<meta property="og:description" content="Professional web and app development services. Creating innovative digital solutions for businesses worldwide."/>
	<meta property="og:image" content="../assets/images/Companyimages/logo.png"/>
	<meta property="og:site_name" content="100 International"/>

	<title>Web & Apps Development | 100 International</title>

	<link rel="icon" href="../assets/images/Companyimages/logo.png" type="image/x-icon">

	<!-- Bootstrap CSS -->
	<link href="../assets/vendor/bootstrap/5.1.3/bootstrap.min.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lato:wght@100;300;400;700;900&family=Poppins:wght@200;300;400;600;700;800&family=Syncopate:wght@400;700&display=swap" rel="stylesheet">
	<!-- Icon Fonts -->
	<link href="../assets/vendor/icomoon/icomoon.min.css" rel="stylesheet">
	
	<!-- Off Canvas Menu - Default Theme -->
	<link href="../assets/vendor/offcanvas-nav/hc-offcanvas-nav.css" rel="stylesheet" />

	<!-- Theme CSS -->
	<link href="../assets/css/theme.css" rel="stylesheet">
	<link href="../assets/css/theme-colors.css" rel="stylesheet">

	<!-- Theme Preview Only CSS -->
	<link href="../assets/css/theme-preview-color-styler.css" rel="stylesheet">

	<!-- jQuery -->
	<script src="../assets/vendor/jquery/jquery.min.js"></script>

	<!-- Slick (carousel) -->
	<link href="../assets/vendor/slick/1.8.1/slick.css" rel="stylesheet">
	<link href="../assets/vendor/slick/1.8.1/slick-theme-skilltech.css" rel="stylesheet">

	<link rel="stylesheet" href="../assets/custom/css/style.css" />

	<!-- Navigation and Page Specific Styles - Exact Academy Copy -->
	<style>
		/* Custom Navigation Styles (from your custom CSS) */
		.custom-header {
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			z-index: 1000;
			background: transparent;
			transition: all 0.3s ease;
		}

		.custom-nav-links {
			display: flex;
			align-items: center;
			justify-content: flex-end; /* Align to right corner */
			gap: 2rem;
			padding: 1rem 2rem; /* Add right padding */
		}

		.custom-link {
			color: #fff;
			text-decoration: none;
			font-weight: 500;
			padding: 0.5rem 1rem;
			border-radius: 8px;
			transition: all 0.3s ease;
			position: relative;
			overflow: hidden;
		}

		.custom-link:hover {
			color: #ff8f2a;
			transform: translateY(-2px);
		}

		.custom-link.gradiendColorAdd {
			background: linear-gradient(45deg, #ff8f2a, #FFEB3B);
			color: #000;
			font-weight: 600;
		}

		.text-hover-background-swipe::before {
			content: '';
			position: absolute;
			top: 0;
			left: -100%;
			width: 100%;
			height: 100%;
			background: linear-gradient(90deg, transparent, rgba(255, 143, 42, 0.1), transparent);
			transition: left 0.5s ease;
			z-index: -1;
		}

		.text-hover-background-swipe:hover::before {
			left: 100%;
		}

		.mirror-container {
			position: absolute;
			bottom: -1px;
			left: 0;
			right: 0;
			height: 1px;
			background: linear-gradient(90deg, transparent, rgba(255, 143, 42, 0.3), transparent);
		}

		/* Bootstrap Navbar Styles */
		.navbar-toggler {
			border: none;
			padding: 0.5rem;
		}

		.navbar-toggler:focus {
			box-shadow: none;
		}

		.navbar-collapse {
			border-radius: 8px;
			margin-top: 0.5rem;
			box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
		}

		.navbar-nav .nav-link {
			color: #fff !important;
			padding: 0.75rem 1rem;
			margin: 0.25rem 0;
			border-radius: 6px;
			transition: all 0.3s ease;
			position: relative;
		}

		.navbar-nav .nav-link:hover {
			background: rgba(255, 143, 42, 0.1);
			color: #ff8f2a !important;
			transform: translateX(5px);
		}

		.navbar-nav .nav-link.active {
			background: rgba(255, 143, 42, 0.2);
			color: #ff8f2a !important;
			font-weight: 600;
		}

		/* Hide desktop nav on mobile */
		@media (max-width: 991px) {
			.custom-header.d-none.d-md-none.d-lg-block {
				display: none !important;
			}
		}

		/* Project Cards - Clean Styles */
		.project-card {
			background: rgba(255, 255, 255, 0.05);
			border-radius: 15px;
			overflow: hidden;
			transition: transform 0.3s ease;
			border: 1px solid rgba(255, 143, 42, 0.2);
		}

		.project-card:hover {
			transform: translateY(-10px);
			border-color: #ff8f2a;
		}

		.project-image {
			height: 250px;
			background: linear-gradient(135deg, #ff8f2a, #FFEB3B);
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 3rem;
			color: #000;
			position: relative;
			overflow: hidden;
		}

		/* Pricing Cards - Clean Styles */
		.pricing-card {
			background: rgba(255, 255, 255, 0.05);
			border-radius: 15px;
			padding: 2rem;
			text-align: center;
			transition: all 0.3s ease;
			border: 2px solid transparent;
			position: relative;
			overflow: hidden;
		}

		.pricing-card:hover {
			transform: translateY(-10px);
			border-color: #ff8f2a;
		}

		.pricing-card.featured {
			border-color: #ff8f2a;
			transform: scale(1.05);
		}

		.pricing-card.featured::before {
			content: 'POPULAR';
			position: absolute;
			top: 20px;
			right: -30px;
			background: linear-gradient(45deg, #ff8f2a, #FFEB3B);
			color: #000;
			padding: 5px 40px;
			font-size: 0.8rem;
			font-weight: bold;
			transform: rotate(45deg);
		}

		.pricing-price {
			font-size: 3rem;
			font-weight: bold;
			color: #ff8f2a;
			margin: 1rem 0;
		}

		/* Tech Stack Grid - Enhanced Animations */
		.tech-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
			gap: 1.5rem;
			margin: 2rem 0;
		}

		.tech-item {
			background: rgba(255, 255, 255, 0.05);
			border-radius: 15px;
			padding: 2rem 1.5rem;
			text-align: center;
			transition: all 0.4s ease;
			position: relative;
			overflow: hidden;
			border: 1px solid rgba(255, 143, 42, 0.1);
		}

		.tech-item::before {
			content: '';
			position: absolute;
			top: 0;
			left: -100%;
			width: 100%;
			height: 100%;
			background: linear-gradient(90deg, transparent, rgba(255, 143, 42, 0.1), transparent);
			transition: left 0.6s ease;
		}

		.tech-item:hover::before {
			left: 100%;
		}

		.tech-item:hover {
			background: rgba(255, 143, 42, 0.15);
			transform: translateY(-10px) rotate(3deg) scale(1.05);
			box-shadow: 0 15px 35px rgba(255, 143, 42, 0.25);
			border-color: rgba(255, 143, 42, 0.4);
		}

		.tech-icon {
			font-size: 3rem;
			color: #ff8f2a;
			margin-bottom: 1rem;
			transition: all 0.4s ease;
			display: block;
		}

		.tech-item:hover .tech-icon {
			transform: scale(1.3) rotate(-5deg);
			color: #FFEB3B;
			text-shadow: 0 0 20px rgba(255, 143, 42, 0.6);
		}

		.tech-item h6 {
			transition: all 0.3s ease;
			margin-bottom: 0;
		}

		.tech-item:hover h6 {
			color: #ff8f2a;
			transform: translateY(-3px);
		}

		/* Responsive Design */
		@media (max-width: 768px) {
			.lecturer-image {
				width: 280px;
				height: 280px;
			}
			
			.lecturer-title {
				font-size: 2rem;
			}
			
			.lecturer-name {
				font-size: 1.5rem;
			}
			
			.lecturer-stats {
				grid-template-columns: 1fr;
				gap: 1rem;
			}
			
			.lecturer-content {
				padding: 2rem 1rem;
			}
		}

		@media (max-width: 576px) {
			.tech-grid {
				grid-template-columns: repeat(2, 1fr);
			}
			
			.pricing-card.featured {
				transform: scale(1);
			}
		}
	</style>

</head>

<body class="sk__homepage sk__home-parallax-half-screens dark-shade-1-bg">

	<main id="primary" class="site-main">

		<!-- Back to top button -->
		<div class="sk__back-to-top-wrap">
			<a class="sk__back-to-top" href="#smooth-content"><span class="sk__back-to-top"></span></a>
		</div>

		<!-- Navigation Menu (Desktop) -->
		<div class="sk__mobile-menu-bar headerBackkGround overflow-hidden customAnimation" style="z-index: 1;"></div>

		<!-- Dynamically controlled with JS! -->
		<a class="sk__mobile-main-logo" href="../"><img alt="Website logo." src="../assets/images/Companyimages/logo.png"></a>
		
		<!-- Desktop Navigation Bar (Large Screens) -->
		<div class="custom-header d-none d-md-none d-lg-block" style="z-index:3;">
			<div class="custom-nav-links me-5">
				<a class="custom-link text-hover-background-swipe" href="../">Home</a>
				<a class="custom-link text-hover-background-swipe gradiendColorAdd" href="../web-development/">Web/App/Software</a>
				<a class="custom-link text-hover-background-swipe" href="../academy/">Academy</a>
				<a class="custom-link text-hover-background-swipe" href="../about/">About</a>
				<a class="custom-link text-hover-background-swipe" href="../team/">Team</a>
				<a class="custom-link text-hover-background-swipe" href="../contact/">Contact</a>
			</div>
			<div class="mirror-container"></div>
		</div>

		<!-- Mobile Navigation -->
		<nav class="navbar navbar-expand-lg bg-body-tertiary d-lg-none d-md-block d-block custom-header">
			<div class="container-fluid">
				<a class="navbar-brand" href="../"></a>
				<button class="navbar-toggler text-white" style="z-index: 100;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fs-2">&equiv;</span>
				</button>
				<div class="collapse navbar-collapse bg-black" id="navbarNavDropdown">
					<ul class="navbar-nav p-3">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="../">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="../web-development/">Web/App/Software</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../academy/">Academy</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../about/">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../team/">Team</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../contact/">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div id="smooth-wrapper" class="pushable-content">
			<div id="smooth-content">

				<!-- Hero Section / Hero Slider -->
				<section class="sk__hero-section">
					<!-- Carousel -->
					<div id="sk__hero-carousel-slider" class="carousel slide dark-shade-1-bg">

						<!-- Hero Dots Navigation Bootstrap 5 -->
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#sk__hero-carousel-slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#sk__hero-carousel-slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#sk__hero-carousel-slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
						</div>
				
						<!-- Slides -->
						<div class="carousel-inner">

							<!-- Slide 1 - Web Development -->
							<div class="carousel-item zooming active hero-slide-1 sk__hero-slider-item sk__image-back-cover">
								<section class="sk__parallax-background-section sk__hero-item-theme-style">
									<!-- Parallax background -->
									<div class="sk__parallax-background-element sk__absolute sk__image-back-cover" style="background-image: url(../vidimg/webhero1.jpg);"></div>

									<div class="flex-helper-div"></div>
									
									<!-- Main hero heading -->
									<div class="hero-h1-box">
										<div class="cover-text-wrapper">
											<h1 class="hero-h1 animated-element phase-1 text-center text-md-start text-white">Web<br /> Development<br /> Excellence</h1>
										</div>
									</div>

									<!-- Bottom Left box -->
									<div class="hero-box-bottom-left text-center text-sm-start">
										<a class="btn btn-outline-light animated-element phase-1 mb-4" href="#web-development" role="button">VIEW PROJECTS</a>
										
										<div class="cover-text-wrapper">
											<h3 class="animated-element phase-1 text-center text-sm-start text-white">MODERN <strong>WEBSITES</strong></h3>
										</div>

										<div class="cover-text-wrapper">
											<p class="hero-box-p animated-element phase-1 text-center text-sm-start text-white">Responsive, fast-loading websites that work perfectly on all devices and provide excellent user experiences.</p>
										</div>
									</div>

									<!-- Bottom Right Box -->
									<div class="hero-box-bottom-right text-center text-sm-start">
										<div class="cover-text-wrapper">
											<span class="big-abbreviated-heading animated-element phase-2 text-white">WEB</span>
										</div>
										<div class="cover-text-wrapper">
											<p class="animated-element phase-2 text-white">From concept to deployment</p>
										</div>
										<div class="cover-text-wrapper">
											<h4 class="animated-element phase-2 text-white">BLAZING FAST</h4>
										</div>
									</div>
								</section>
							</div>

							<!-- Slide 2 - Mobile Apps -->
							<div class="carousel-item zooming hero-slide-2 sk__hero-slider-item sk__image-back-cover">
								<section class="sk__parallax-background-section sk__hero-item-theme-style">
									<!-- Parallax background -->
									<div class="sk__parallax-background-element sk__absolute sk__image-back-cover" style="background-image: url(../vidimg/webhero2.jpg);"></div>

									<div class="flex-helper-div"></div>
									
									<!-- Main hero heading -->
									<div class="hero-h1-box">
										<div class="cover-text-wrapper">
											<h1 class="hero-h1 animated-element phase-1 text-center text-md-start text-white">Mobile<br /> App<br /> Development</h1>
										</div>
									</div>

									<!-- Bottom Left box -->
									<div class="hero-box-bottom-left text-center text-sm-start">
										<a class="btn btn-outline-light animated-element phase-1 mb-4" href="#mobile-apps" role="button">VIEW APPS</a>
										
										<div class="cover-text-wrapper">
											<h3 class="animated-element phase-1 text-center text-sm-start text-white">NATIVE & <strong>CROSS-PLATFORM</strong></h3>
										</div>

										<div class="cover-text-wrapper">
											<p class="hero-box-p animated-element phase-1 text-center text-sm-start text-white">iOS and Android applications using React Native, Flutter, and native development technologies.</p>
										</div>
									</div>

									<!-- Bottom Right Box -->
									<div class="hero-box-bottom-right text-center text-sm-start">
										<div class="cover-text-wrapper">
											<span class="big-abbreviated-heading animated-element phase-2 text-white">APP</span>
										</div>
										<div class="cover-text-wrapper">
											<p class="animated-element phase-2 text-white">iOS & Android Excellence</p>
										</div>
										<div class="cover-text-wrapper">
											<h4 class="animated-element phase-2 text-white">USER-FOCUSED</h4>
										</div>
									</div>
								</section>
							</div>

							<!-- Slide 3 - Web Applications -->
							<div class="carousel-item zooming hero-slide-3 sk__hero-slider-item sk__image-back-cover">
								<section class="sk__video-background-section sk__hero-item-theme-style">
									<div class="sk__video-container sk__parallax-hero-video sk__absolute sk__image-back-cover">
										<div class="sk__pattern-overlay" style="opacity: 37%;"></div>
										<div class="sk__absolute sk__gradient-back-v1" style="opacity: 0;"></div>
										<video class="sk__video" preload="none" poster="../assets/video/hero-video-main.webp" autoplay="" loop="" muted="" playsinline="">
											<source src="../vidimg/webhero3.mp4" type="video/mp4">Your browser does not support HTML5 video.
										</video>
									</div>

									<div class="flex-helper-div"></div>
									
									<!-- Main hero heading -->
									<div class="hero-h1-box">
										<div class="cover-text-wrapper">
											<h1 class="hero-h1 animated-element phase-1 text-center text-md-start text-white">Web<br /> Applications<br /> & Systems</h1>
										</div>
									</div>

									<!-- Bottom Left box -->
									<div class="hero-box-bottom-left text-center text-sm-start">
										<a class="btn btn-outline-light animated-element phase-1 mb-4" href="#web-applications" role="button">VIEW SOLUTIONS</a>
										
										<div class="cover-text-wrapper">
											<h3 class="animated-element phase-1 text-center text-sm-start text-white">COMPLEX <strong>SYSTEMS</strong></h3>
										</div>

										<div class="cover-text-wrapper">
											<p class="hero-box-p animated-element phase-1 text-center text-sm-start text-white">Advanced web applications with real-time features, scalable architecture, and enterprise-grade security.</p>
										</div>
									</div>

									<!-- Bottom Right Box -->
									<div class="hero-box-bottom-right text-center text-sm-start">
										<div class="cover-text-wrapper">
											<span class="big-abbreviated-heading animated-element phase-2 text-white">SYS</span>
										</div>
										<div class="cover-text-wrapper">
											<p class="animated-element phase-2 text-white">Enterprise Solutions</p>
										</div>
										<div class="cover-text-wrapper">
											<h4 class="animated-element phase-2 text-white">SCALABLE</h4>
										</div>
									</div>
								</section>
							</div>

						</div>

						<!-- Arrows Bootstrap 5 -->
						<button class="carousel-control-prev" type="button" data-bs-target="#sk__hero-carousel-slider" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#sk__hero-carousel-slider" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>

					</div>
				</section>
				
				<section class="sk__parallax-background-section sk__parallax-fixer-section sk__parallax-fixer-ignore-height overflow-hidden" style="max-height: 0;">
					<div class="sk__parallax-background-element"></div>
				</section>

				<!-- Enhanced Previous Projects Section with Image Sliders -->
				<section class="sk__py-l dark-shade-3-bg">
					<div class="container sk__supercontainer">
						<div class="row text-center">
							<div class="col sk__heading-spacer-l">
								<h2 class="h2-super">Our Previous Projects</h2>
								<p class="p-super">Successful digital solutions we've delivered for our clients</p>
							</div>
						</div>
						<div class="row">
							<!-- KW Industries Website -->
							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="project-card">
									<!-- Image Carousel for KW Industries -->
									<div id="kwCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
										<div class="carousel-indicators">
											<button type="button" data-bs-target="#kwCarousel" data-bs-slide-to="0" class="active"></button>
											<button type="button" data-bs-target="#kwCarousel" data-bs-slide-to="1"></button>
											<button type="button" data-bs-target="#kwCarousel" data-bs-slide-to="2"></button>
										</div>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<div class="project-image">
													<div style="background: linear-gradient(135deg, #8B4513, #D2691E); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; flex-direction: column;">
														<i class="icon-leaf" style="color: #fff; font-size: 4rem;"></i>
													</div>
												</div>
											</div>
											<div class="carousel-item">
												<div class="project-image">
													<div style="background: linear-gradient(135deg, #A0522D, #CD853F); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; flex-direction: column;">
														<i class="icon-shopping-cart" style="color: #fff; font-size: 4rem;"></i>
													</div>
												</div>
											</div>
											<div class="carousel-item">
												<div class="project-image">
													<div style="background: linear-gradient(135deg, #D2691E, #FF8C00); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; flex-direction: column;">
														<i class="icon-globe" style="color: #fff; font-size: 4rem;"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="p-4">
										<h5>KW Industries Website</h5>
										<p><strong>Technology:</strong> React, Node.js, E-commerce</p>
										<p>Professional website for Sri Lankan true cinnamon (Ceylon cinnamon) export business with product catalog and contact integration.</p>
										<div class="d-flex justify-content-between align-items-center">
											<span class="badge bg-success">E-commerce</span>
											<small class="text-muted">2024</small>
										</div>
										<div class="mt-2">
											<a href="https://industrieskw.com/" target="_blank" class="btn btn-outline-primary btn-sm">
												<i class="icon-external-link"></i> Visit Live Site
											</a>
										</div>
									</div>
								</div>
							</div>

							<!-- Hela Weda Gedara Website -->
							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="project-card">
									<!-- Image Carousel for Hela Weda Gedara -->
									<div id="helaCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3200">
										<div class="carousel-indicators">
											<button type="button" data-bs-target="#helaCarousel" data-bs-slide-to="0" class="active"></button>
											<button type="button" data-bs-target="#helaCarousel" data-bs-slide-to="1"></button>
											<button type="button" data-bs-target="#helaCarousel" data-bs-slide-to="2"></button>
										</div>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<div class="project-image">
													<div style="background: linear-gradient(135deg, #2E8B57, #32CD32); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; flex-direction: column;">
														<i class="icon-plus" style="color: #fff; font-size: 4rem;"></i>
													</div>
												</div>
											</div>
											<div class="carousel-item">
												<div class="project-image">
													<div style="background: linear-gradient(135deg, #228B22, #90EE90); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; flex-direction: column;">
														<i class="icon-calendar" style="color: #fff; font-size: 4rem;"></i>
													</div>
												</div>
											</div>
											<div class="carousel-item">
												<div class="project-image">
													<div style="background: linear-gradient(135deg, #006400, #7CFC00); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; flex-direction: column;">
														<i class="icon-user-md" style="color: #fff; font-size: 4rem;"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="p-4">
										<h5>Hela Weda Gedara</h5>
										<p><strong>Technology:</strong> WordPress, PHP, Medical Portal</p>
										<p>Healthcare website for traditional Sri Lankan Ayurveda medicine services with appointment booking and service information.</p>
										<div class="d-flex justify-content-between align-items-center">
											<span class="badge bg-info">Healthcare</span>
											<small class="text-muted">2024</small>
										</div>
										<div class="mt-2">
											<a href="https://helawedagedaraboossa.com/" target="_blank" class="btn btn-outline-primary btn-sm">
												<i class="icon-external-link"></i> Visit Live Site
											</a>
										</div>
									</div>
								</div>
							</div>

							<!-- Smart POS System -->
							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="project-card">
									<!-- Image Carousel for Smart POS -->
									<div id="posCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2800">
										<div class="carousel-indicators">
											<button type="button" data-bs-target="#posCarousel" data-bs-slide-to="0" class="active"></button>
											<button type="button" data-bs-target="#posCarousel" data-bs-slide-to="1"></button>
											<button type="button" data-bs-target="#posCarousel" data-bs-slide-to="2"></button>
										</div>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<div class="project-image">
													<div style="background: linear-gradient(135deg, #4169E1, #1E90FF); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; flex-direction: column;">
														<i class="icon-calculator" style="color: #fff; font-size: 4rem;"></i>
													</div>
												</div>
											</div>
											<div class="carousel-item">
												<div class="project-image">
													<div style="background: linear-gradient(135deg, #0000CD, #6495ED); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; flex-direction: column;">
														<i class="icon-database" style="color: #fff; font-size: 4rem;"></i>
													</div>
												</div>
											</div>
											<div class="carousel-item">
												<div class="project-image">
													<div style="background: linear-gradient(135deg, #191970, #87CEEB); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; flex-direction: column;">
														<i class="icon-bar-chart" style="color: #fff; font-size: 4rem;"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="p-4">
										<h5>Smart POS System</h5>
										<p><strong>Technology:</strong> React Native, Node.js, SQL</p>
										<p>Complete point-of-sale application for small businesses with billing, inventory management, and sales reporting features.</p>
										<div class="d-flex justify-content-between align-items-center">
											<span class="badge bg-primary">Mobile App</span>
											<small class="text-muted">2024</small>
										</div>
									</div>
								</div>
							</div>

							<!-- Daily Work Hour Calculator -->
							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="project-card">
									<!-- Image Carousel for Work Hour Calculator -->
									<div id="workCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3400">
										<div class="carousel-indicators">
											<button type="button" data-bs-target="#workCarousel" data-bs-slide-to="0" class="active"></button>
											<button type="button" data-bs-target="#workCarousel" data-bs-slide-to="1"></button>
											<button type="button" data-bs-target="#workCarousel" data-bs-slide-to="2"></button>
										</div>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<div class="project-image">
													<div style="background: linear-gradient(135deg, #FF6347, #FF4500); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; flex-direction: column;">
														<i class="icon-clock" style="color: #fff; font-size: 4rem;"></i>
													</div>
												</div>
											</div>
											<div class="carousel-item">
												<div class="project-image">
													<div style="background: linear-gradient(135deg, #DC143C, #FF7F50); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; flex-direction: column;">
														<i class="icon-file-pdf" style="color: #fff; font-size: 4rem;"></i>
													</div>
												</div>
											</div>
											<div class="carousel-item">
												<div class="project-image">
													<div style="background: linear-gradient(135deg, #B22222, #FFA07A); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; flex-direction: column;">
														<i class="icon-pie-chart" style="color: #fff; font-size: 4rem;"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="p-4">
										<h5>Work Hour Calculator</h5>
										<p><strong>Technology:</strong> Flutter, Firebase, PDF Gen</p>
										<p>Mobile app for tracking daily work hours with automated calculations, report generation, and PDF export functionality.</p>
										<div class="d-flex justify-content-between align-items-center">
											<span class="badge bg-warning">Productivity</span>
											<small class="text-muted">2023</small>
										</div>
									</div>
								</div>
							</div>

							<!-- 100 International Website -->
							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="project-card">
									<!-- Image Carousel for 100 International -->
									<div id="companyCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3600">
										<div class="carousel-indicators">
											<button type="button" data-bs-target="#companyCarousel" data-bs-slide-to="0" class="active"></button>
											<button type="button" data-bs-target="#companyCarousel" data-bs-slide-to="1"></button>
											<button type="button" data-bs-target="#companyCarousel" data-bs-slide-to="2"></button>
										</div>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<div class="project-image">
													<div style="background: linear-gradient(135deg, #ff8f2a, #FFEB3B); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; flex-direction: column;">
														<i class="icon-briefcase" style="color: #000; font-size: 4rem;"></i>
													</div>
												</div>
											</div>
											<div class="carousel-item">
												<div class="project-image">
													<div style="background: linear-gradient(135deg, #FFA500, #FFD700); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; flex-direction: column;">
														<i class="icon-graduation-cap" style="color: #000; font-size: 4rem;"></i>
													</div>
												</div>
											</div>
											<div class="carousel-item">
												<div class="project-image">
													<div style="background: linear-gradient(135deg, #FF8C00, #FFEAA7); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; flex-direction: column;">
														<i class="icon-code" style="color: #000; font-size: 4rem;"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="p-4">
										<h5>100 International Website</h5>
										<p><strong>Technology:</strong> HTML5, CSS3, JavaScript, Bootstrap</p>
										<p>Corporate website showcasing web development services, academy courses, and digital marketing solutions.</p>
										<div class="d-flex justify-content-between align-items-center">
											<span class="badge bg-secondary">Corporate</span>
											<small class="text-muted">2024</small>
										</div>
									</div>
								</div>
							</div>

						<div class="row mt-5">
							<div class="col-12 text-center">
								<a href="../contact/" class="btn btn-primary btn-lg">
									<i class="icon-arrow-right me-2"></i> Start Your Project
								</a>
								<p class="mt-3 text-muted">Ready to build something amazing? Let's discuss your project requirements.</p>
							</div>
						</div>
					</div>
				</section>

				<!-- Half-screen Parallax Section - Web Development -->
				<section id="web-development" class="sk__halfscreen-section">
					<div class="container-fluid">
						<div class="row">
							<!-- Half-screen parallax image (left) -->
							<div class="col-12 col-xl-6 sk__halfscreen-parallax-image-col sk__parallax-container">
								<img class="sk__parallax-element-3" alt="Web Development Services" src="../vidimg/websection1.jpg">
							</div>
							<!-- Half-screen text (right) -->
							<div class="col-12 col-xl-6 sk__halfscreen-text-col sk__flex-center-y text-center text-lg-start">
								<div class="sk__halfscreen-text-col-inner">
									<div class="cover-text-wrapper">
										<div class="fancy-gradient-text-box reveal-onscroll">
											<h3 class="h3-elegant sk__gradient-fancy-text">Web Development</h3>
										</div>
									</div>
									<h5 class="animated-element mw-660">Modern, responsive websites that drive business growth</h5>
									<p class="animated-element mw-560">We create fast-loading, SEO-optimized websites using the latest technologies like React, Vue.js, and Angular. Our responsive designs work perfectly across all devices and provide exceptional user experiences.</p>
									<div class="row mt-4">
										<div class="col-6">
											<h6>Technologies:</h6>
											<ul class="list-unstyled">
												<li>• React & Next.js</li>
												<li>• Vue.js & Nuxt.js</li>
												<li>• Angular</li>
												<li>• WordPress</li>
											</ul>
										</div>
										<div class="col-6">
											<h6>Features:</h6>
											<ul class="list-unstyled">
												<li>• Responsive Design</li>
												<li>• SEO Optimization</li>
												<li>• Fast Loading</li>
												<li>• CMS Integration</li>
											</ul>
										</div>
									</div>
									<a class="animated-element btn btn-outline-light mt-3" href="../contact/" role="button">GET QUOTE -></a>
								</div>
							</div>
						</div>	
					</div>
				</section>

				<!-- Half-screen Parallax Section - Mobile Apps -->
				<section id="mobile-apps" class="sk__halfscreen-section">
					<div class="container-fluid">
						<div class="row">
							<!-- Half-screen parallax image (right) -->
							<div class="order-xl-2 col-12 col-xl-6 sk__halfscreen-parallax-image-col sk__parallax-container">
								<img class="sk__parallax-element-3" alt="Mobile App Development" src="../vidimg/websection2.jpg">
							</div>
							<!-- Half-screen text (left) -->
							<div class="order-xl-1 col-12 col-xl-6 sk__halfscreen-text-col sk__flex-center-y text-center text-lg-start">
								<div class="sk__halfscreen-text-col-inner">
									<div class="cover-text-wrapper">
										<div class="fancy-gradient-text-box reveal-onscroll">
											<h3 class="h3-elegant sk__gradient-fancy-text">Mobile Applications</h3>
										</div>
									</div>
									<h5 class="animated-element mw-660">Native and cross-platform mobile solutions</h5>
									<p class="animated-element mw-560">Expert mobile app development for iOS and Android platforms. We build native apps for maximum performance and cross-platform solutions using React Native and Flutter for cost-effective development.</p>
									<div class="row mt-4">
										<div class="col-6">
											<h6>Platforms:</h6>
											<ul class="list-unstyled">
												<li>• iOS (Swift)</li>
												<li>• Android (Kotlin)</li>
												<li>• React Native</li>
												<li>• Flutter</li>
											</ul>
										</div>
										<div class="col-6">
											<h6>Features:</h6>
											<ul class="list-unstyled">
												<li>• Push Notifications</li>
												<li>• Offline Support</li>
												<li>• App Store Optimization</li>
												<li>• Analytics Integration</li>
											</ul>
										</div>
									</div>
									<a class="animated-element btn btn-outline-light mt-3" href="../contact/" role="button">START PROJECT -></a>
								</div>
							</div>
						</div>	
					</div>
				</section>

				<!-- Half-screen Parallax Section - Web Applications -->
				<section id="web-applications" class="sk__halfscreen-section">
					<div class="container-fluid">
						<div class="row">
							<!-- Half-screen parallax image (left) -->
							<div class="col-12 col-xl-6 sk__halfscreen-parallax-image-col sk__parallax-container">
								<img class="sk__parallax-element-3" alt="Web Applications Development" src="../vidimg/websection3.jpg">
							</div>
							<!-- Half-screen text (right) -->
							<div class="col-12 col-xl-6 sk__halfscreen-text-col sk__flex-center-y text-center text-lg-start">
								<div class="sk__halfscreen-text-col-inner">
									<div class="cover-text-wrapper">
										<div class="fancy-gradient-text-box reveal-onscroll">
											<h3 class="h3-elegant sk__gradient-fancy-text">Web Applications</h3>
										</div>
									</div>
									<h5 class="animated-element mw-660">Complex systems and enterprise solutions</h5>
									<p class="animated-element mw-560">Advanced web applications with custom functionality, real-time features, and scalable architecture. Perfect for businesses requiring complex workflows, data management, and user interaction systems.</p>
									<div class="row mt-4">
										<div class="col-6">
											<h6>Backend:</h6>
											<ul class="list-unstyled">
												<li>• Node.js & Express</li>
												<li>• Python & Django</li>
												<li>• PHP & Laravel</li>
												<li>• .NET Core</li>
											</ul>
										</div>
										<div class="col-6">
											<h6>Features:</h6>
											<ul class="list-unstyled">
												<li>• Real-time Updates</li>
												<li>• User Authentication</li>
												<li>• API Integration</li>
												<li>• Database Management</li>
											</ul>
										</div>
									</div>
									<a class="animated-element btn btn-outline-light mt-3" href="../contact/" role="button">DISCUSS PROJECT -></a>
								</div>
							</div>
						</div>	
					</div>
				</section>

				<!-- Technology Stack Section -->
				<section class="sk__py-l dark-shade-2-bg">
					<div class="container sk__supercontainer">
						<div class="row text-center">
							<div class="col sk__heading-spacer-l">
								<h2 class="h2-super">Our Technology Stack</h2>
								<p class="p-super">Modern technologies we use to build exceptional digital products</p>
							</div>
						</div>
						
						<div class="row mb-5">
							<div class="col-12">
								<h4 class="text-center mb-4">Frontend Technologies</h4>
								<div class="tech-grid">
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-code"></i></div>
										<h6>React</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-code"></i></div>
										<h6>Vue.js</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-code"></i></div>
										<h6>Angular</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-code"></i></div>
										<h6>Next.js</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-mobile2"></i></div>
										<h6>React Native</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-mobile2"></i></div>
										<h6>Flutter</h6>
									</div>
								</div>
							</div>
						</div>

						<div class="row mb-5">
							<div class="col-12">
								<h4 class="text-center mb-4">Backend Technologies</h4>
								<div class="tech-grid">
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-server"></i></div>
										<h6>Node.js</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-server"></i></div>
										<h6>Python</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-server"></i></div>
										<h6>PHP</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-server"></i></div>
										<h6>.NET Core</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-server"></i></div>
										<h6>Java</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-server"></i></div>
										<h6>Go</h6>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<h4 class="text-center mb-4">Cloud & DevOps</h4>
								<div class="tech-grid">
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-cloud"></i></div>
										<h6>AWS</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-cloud"></i></div>
										<h6>Google Cloud</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-cloud"></i></div>
										<h6>Azure</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-cog"></i></div>
										<h6>Docker</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-cog"></i></div>
										<h6>Kubernetes</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-cog"></i></div>
										<h6>Jenkins</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Enhanced Pricing Section -->
				<section class="sk__py-l dark-shade-3-bg">
					<div class="container sk__supercontainer">
						<div class="row text-center">
							<div class="col sk__heading-spacer-l">
								<h2 class="h2-super">Development Packages</h2>
								<p class="p-super">Transparent pricing for quality development services</p>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="pricing-card">
									<h4>Basic Website</h4>
									<div class="pricing-price">$2,500</div>
									<ul class="list-unstyled mb-4">
										<li>✓ Responsive Design</li>
										<li>✓ Up to 5 Pages</li>
										<li>✓ Contact Form</li>
										<li>✓ SEO Optimization</li>
										<li>✓ 3 Months Support</li>
									</ul>
									<a href="../contact/" class="btn btn-outline-light">Get Started</a>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="pricing-card featured">
									<h4>Web Application</h4>
									<div class="pricing-price">$8,500</div>
									<ul class="list-unstyled mb-4">
										<li>✓ Custom Functionality</li>
										<li>✓ User Authentication</li>
										<li>✓ Database Integration</li>
										<li>✓ Admin Panel</li>
										<li>✓ API Development</li>
										<li>✓ 6 Months Support</li>
									</ul>
									<a href="../contact/" class="btn btn-primary">Get Started</a>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="pricing-card">
									<h4>Mobile App</h4>
									<div class="pricing-price">$12,000</div>
									<ul class="list-unstyled mb-4">
										<li>✓ iOS & Android</li>
										<li>✓ Push Notifications</li>
										<li>✓ Offline Capability</li>
										<li>✓ App Store Submission</li>
										<li>✓ Backend Integration</li>
										<li>✓ 12 Months Support</li>
									</ul>
									<a href="../contact/" class="btn btn-outline-light">Get Started</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 text-center">
								<p class="p-large mt-4">Need a custom solution? <a href="../contact/" class="text-primary">Contact us</a> for a personalized quote.</p>
							</div>
						</div>
					</div>
				</section>

				<!-- CTA Section -->
				<section class="sk__cta-warp position-relative sk__image-back-cover">
					<div class="container sk__powercontainer">
						<div class="row">
							<div class="col text-center">
								<div class="sk__warped-text-wrapper sk__flex-center">
									<span class="sk__warped-text">START YOUR PROJECT</span>
								</div>
								<h3><strong>READY TO BUILD SOMETHING AMAZING?</strong></h3>
								<a class="btn btn-lg btn-outline-light sk__warped-button" href="../contact/" role="button">GET STARTED -></a>
							</div>
						</div>
					</div>
				</section>

				<!-- Enhanced Footer -->
				<footer class="dark-shade-2-bg position-relative">
					<div class="footer-background-container sk__absolute">
						<div class="sk__gradient-background-tint footer-background sk__absolute"></div>
					</div>
					
					<div class="container sk__supercontainer position-relative">
						<div class="row footer-top">
							<div class="col-12 col-sm-6 top-footer-logo">
								<img src="../assets/images/Companyimages/logo.png" alt="Website logo for the footer.">
							</div>
							<div class="col-12 col-sm-6 top-footer-tagline">
								<h5 class="h5-elegant">INNOVATION IN <strong>DEVELOPMENT</strong></h5>
							</div>
						</div>

						<span class="divider sk__subtle-divider"></span>

						<div class="row footer-main text-center text-sm-start">
							<div class="col-md-12 col-lg-6 footer-main-large-col mb-4 mb-lg-0">
								<div class="fancy-gradient-text-box">
									<h3 class="h3-elegant sk__gradient-fancy-text">Transform your digital presence.</h3>
								</div>	
								<p class="p-v2 mw-440">Professional web and app development services that drive business growth and deliver exceptional user experiences.</p>
							</div>
							<div class="col-md-6 col-lg-3 footer-main-small-col mb-4 mb-md-0">
								<h5 class="h5-elegant">Services</h5>
								<ul class="footer-list">
									<li><a href="../web-development/">Web Development</a></li>
									<li><a href="../web-development/">Mobile Apps</a></li>
									<li><a href="../web-development/">Web Applications</a></li>
									<li><a href="../academy/">Academy Courses</a></li>
								</ul>
							</div>
							<div class="col-md-6 col-lg-3 footer-main-small-col">
								<h5 class="h5-elegant">Contact</h5>
								<ul class="footer-list">
									<li><a href="../contact/">Get Quote</a></li>
									<li><a href="../contact/">Support</a></li>
									<li><a href="../about/">About Us</a></li>
									<li><a href="../team/">Our Team</a></li>
								</ul>
							</div>
						</div>

						<span class="divider sk__subtle-divider"></span>

						<div class="row footer-bottom">
							<div class="col-12 col-sm-6 footer-bottom-left">
								<p class="p-small">&copy; 2025 100 International. All rights reserved.</p>
							</div>
							<div class="col-12 col-sm-6 footer-bottom-right">
								<div class="footer-socials">
									<a class="social-icons" href="#" target="_blank"><span><span class="icon-facebook1"></span></span></a>
									<a class="social-icons" href="#" target="_blank"><span><span class="icon-twitter1"></span></span></a>
									<a class="social-icons" href="#" target="_blank"><span><span class="icon-linkedin1"></span></span></a>
									<a class="social-icons" href="#" target="_blank"><span><span class="icon-instagram1"></span></span></a>
								</div>
							</div>
						</div>
					</div>
				</footer>

			</div>
		</div>

	</main>

	<!-- Scripts -->
	<script src="../assets/vendor/bootstrap/5.1.3/bootstrap.min.js"></script>
	<script src="../assets/vendor/offcanvas-nav/hc-offcanvas-nav.js"></script>
	<script src="../assets/vendor/greensock/gsap.min.js"></script>
	<script src="../assets/vendor/greensock/ScrollTrigger.min.js"></script>
	<script src="../assets/vendor/greensock/ScrollSmoother.min.js"></script>
	<script src="../assets/vendor/greensock/ScrollToPlugin.min.js"></script>
	<script src="../assets/vendor/slick/1.8.1/slick.min.js"></script>
	<script src="../assets/vendor/parallax/3.1.0/parallax.min.js"></script>
	<script src="../assets/js/youtube-video.js"></script>
	<script src="../assets/js/theme.js"></script>
	<script src="../assets/vendor/spectrum/spectrum.min.js"></script>
	<script src="../assets/vendor/clipboard/clipboard.min.js"></script>

	<!-- Enhanced Animation Scripts -->
	<script>
		// Smooth Scrolling for Anchor Links
		document.querySelectorAll('a[href^="#"]').forEach(anchor => {
			anchor.addEventListener('click', function (e) {
				e.preventDefault();
				const target = document.querySelector(this.getAttribute('href'));
				if (target) {
					target.scrollIntoView({
						behavior: 'smooth',
						block: 'start'
					});
				}
			});
		});

		// Auto-close Bootstrap navbar when clicking on nav links
		document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
			link.addEventListener('click', () => {
				const navbarCollapse = document.querySelector('.navbar-collapse');
				if (navbarCollapse && navbarCollapse.classList.contains('show')) {
					const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
					if (bsCollapse) {
						bsCollapse.hide();
					}
				}
			});
		});

		// Custom link hover effects (for desktop navigation)
		document.querySelectorAll('.custom-link').forEach(link => {
			link.addEventListener('mouseenter', function() {
				if (!this.classList.contains('gradiendColorAdd')) {
					this.style.background = 'rgba(255, 143, 42, 0.1)';
				}
			});
			
			link.addEventListener('mouseleave', function() {
				if (!this.classList.contains('gradiendColorAdd')) {
					this.style.background = 'transparent';
				}
			});
		});

		// Navigation scroll effect
		window.addEventListener('scroll', function() {
			const header = document.querySelector('.custom-header');
			if (header) {
				if (window.scrollY > 100) {
					header.style.background = 'rgba(0, 0, 0, 0.9)';
					header.style.backdropFilter = 'blur(10px)';
				} else {
					header.style.background = 'transparent';
					header.style.backdropFilter = 'none';
				}
			}
		});
	</script>

</body>
</html>