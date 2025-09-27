<!DOCTYPE html>
<html lang="en-US">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="description" content="This is DarkStar, see it live now!">
	<meta name="author" content="Skilltech Web Design">
	<meta name="keywords" content="DarkStar, dark theme, best dark theme, best dark html, best dark website design, best dark websites, dark web design, best html themes, best html templates, best websites, dark portfolio, dark creative, gsap theme, skilltech, skilltech web design" />

	<meta property="og:title" content="DarkStar - The Ultimate Dark HTML Template" />
	<meta property="og:description" content="Superior Dark Multipurpose Theme · $235 Added Value · Stunning Effects & Clean Code · Build a Website Today with DarkStar!" />
	<meta property="og:image" content="assets/images/facebook-post-image-default.jpg" />

	<meta property="og:site_name" content="SkilltechWebDesign.com" />

	<title>100 international | Home</title>

	<link rel="icon" href="assets/images/Companyimages/logo.png" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="assets/images/apple-touch-icon-72x72-precomposed.png" sizes="72x72" />
	<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="assets/images/apple-touch-icon-114x114-precomposed.png" sizes="114x114" />
	<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="assets/images/apple-touch-icon-144x144-precomposed.png" sizes="144x144" />
	<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="assets/images/apple-touch-icon-precomposed.png" />

	<!-- Bootstrap CSS -->
	<link href="assets/vendor/bootstrap/5.1.3/bootstrap.min.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lato:wght@100;300;400;700;900&family=Poppins:wght@200;300;400;600;700;800&family=Syncopate:wght@400;700&display=swap" rel="stylesheet">
	<!-- Icon Fonts -->
	<link href="assets/vendor/icomoon/icomoon.min.css" rel="stylesheet">

	<!-- Off Canvas Menu - Default Theme -->
	<link href="assets/vendor/offcanvas-nav/hc-offcanvas-nav.css" rel="stylesheet" />

	<!-- Theme CSS -->
	<link href="assets/css/theme.css" rel="stylesheet">
	<link href="assets/css/theme-colors.css" rel="stylesheet">

	<!-- jQuery -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>

	<!-- Slick (carousel) -->
	<link href="assets/vendor/slick/1.8.1/slick.css" rel="stylesheet">
	<link href="assets/vendor/slick/1.8.1/slick-theme-skilltech.css" rel="stylesheet">

	<!-- Simple Forms -->
	<!-- <link rel="stylesheet" href="assets/vendor/simple-forms/css/simple-forms-skilltech-mod.css"> -->

	<link rel="stylesheet" href="assets/custom/css/style.css" />
	<link rel="stylesheet" href="indexStyle.css" />

	<!-- Navigation Styles -->
	<style>
		/* Custom Navigation Styles */
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
			justify-content: flex-end;
			gap: 2rem;
			padding: 1rem 2rem;
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

		/* Enhanced Mobile Navigation Styles */
		.navbar-toggler {
			border: none;
			padding: 0.75rem;
			background: rgba(255, 143, 42, 0.1);
			border-radius: 12px;
			backdrop-filter: blur(10px);
			transition: all 0.3s ease;
		}

		.navbar-toggler:hover {
			background: rgba(255, 143, 42, 0.2);
			transform: scale(1.05);
		}

		.navbar-toggler:focus {
			box-shadow: 0 0 20px rgba(255, 143, 42, 0.4);
		}

		.navbar-toggler-icon {
			background: none;
			border: none;
			font-size: 1.8rem !important;
			color: #fff;
			font-weight: 300;
		}

		.navbar-collapse {
			border-radius: 20px;
			margin-top: 1rem;
			background: linear-gradient(135deg, rgba(0, 0, 0, 0.95), rgba(20, 20, 20, 0.95)) !important;
			backdrop-filter: blur(20px);
			border: 1px solid rgba(255, 143, 42, 0.2);
			box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
			animation: slideDown 0.3s ease-out;
		}

		@keyframes slideDown {
			from {
				opacity: 0;
				transform: translateY(-20px);
			}
			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		.navbar-nav {
			padding: 1.5rem !important;
		}

		.navbar-nav .nav-link {
			color: #fff !important;
			padding: 1rem 1.5rem;
			margin: 0.5rem 0;
			border-radius: 12px;
			transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
			position: relative;
			font-weight: 500;
			letter-spacing: 0.5px;
			background: rgba(255, 255, 255, 0.02);
			border: 1px solid transparent;
		}

		.navbar-nav .nav-link::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: linear-gradient(135deg, rgba(255, 143, 42, 0.1), rgba(255, 235, 59, 0.1));
			border-radius: 12px;
			opacity: 0;
			transition: opacity 0.3s ease;
			z-index: -1;
		}

		.navbar-nav .nav-link:hover::before {
			opacity: 1;
		}

		.navbar-nav .nav-link:hover {
			color: #ff8f2a !important;
			transform: translateX(10px) scale(1.02);
			border-color: rgba(255, 143, 42, 0.3);
			box-shadow: 0 8px 25px rgba(255, 143, 42, 0.15);
		}

		.navbar-nav .nav-link.active {
			background: linear-gradient(135deg, rgba(255, 143, 42, 0.2), rgba(255, 235, 59, 0.1));
			color: #ff8f2a !important;
			font-weight: 600;
			border-color: rgba(255, 143, 42, 0.4);
			box-shadow: 0 5px 15px rgba(255, 143, 42, 0.2);
		}

		.navbar-nav .nav-link i {
			margin-right: 0.75rem;
			font-size: 1.1rem;
			opacity: 0.8;
			transition: all 0.3s ease;
		}

		.navbar-nav .nav-link:hover i {
			opacity: 1;
			transform: scale(1.1);
		}

		/* Mobile Navigation Close Animation */
		.navbar-collapse.collapsing {
			transition: height 0.35s ease;
		}

		/* Hide desktop nav on mobile */
		@media (max-width: 991px) {
			.custom-header.d-none.d-md-none.d-lg-block {
				display: none !important;
			}
		}

		/* Responsive adjustments */
		@media (max-width: 768px) {
			.custom-nav-links {
				padding: 1rem;
				gap: 1rem;
			}
			
			.navbar-nav .nav-link {
				padding: 1rem 1.5rem;
				font-size: 0.9rem;
			}

			.navbar-collapse {
				margin-top: 1rem;
				border-radius: 20px;
			}
		}

		@media (max-width: 576px) {
			.navbar-toggler {
				padding: 0.8rem;
				border-radius: 12px;
			}

			.navbar-nav {
				padding: 1.5rem 1rem !important;
			}

			.navbar-nav .nav-link {
				padding: 0.9rem 1.2rem;
				margin: 0.4rem 0;
				font-size: 0.85rem;
			}
		}

		/* New Section Styles */
		.service-section {
			padding: 100px 0;
			position: relative;
		}

		.service-card {
			background: linear-gradient(135deg, rgba(255, 143, 42, 0.1), rgba(255, 235, 59, 0.05));
			border-radius: 20px;
			padding: 3rem 2rem;
			border: 1px solid rgba(255, 143, 42, 0.2);
			backdrop-filter: blur(10px);
			transition: all 0.4s ease;
			position: relative;
			overflow: hidden;
		}

		.service-card::before {
			content: '';
			position: absolute;
			top: 0;
			left: -100%;
			width: 100%;
			height: 100%;
			background: linear-gradient(90deg, transparent, rgba(255, 143, 42, 0.1), transparent);
			transition: left 0.8s ease;
		}

		.service-card:hover::before {
			left: 100%;
		}

		.service-card:hover {
			transform: translateY(-10px) scale(1.02);
			border-color: rgba(255, 143, 42, 0.4);
			box-shadow: 0 25px 50px rgba(255, 143, 42, 0.2);
		}

		.service-icon {
			width: 80px;
			height: 80px;
			background: linear-gradient(135deg, #ff8f2a, #FFEB3B);
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 2rem;
			color: #000;
			margin: 0 auto 2rem;
			transition: all 0.3s ease;
		}

		.service-card:hover .service-icon {
			transform: rotate(360deg) scale(1.1);
		}

		.section-divider {
			height: 3px;
			background: linear-gradient(90deg, transparent, #ff8f2a, transparent);
			border: none;
			margin: 4rem 0;
		}

		/* Iframe container styles (for fallback) */
		.iframe-container {
			width: 100%;
			height: 600px;
			border: none;
			border-radius: 8px;
			background: rgba(255, 143, 42, 0.1);
		}

		/* Video container styles */
		.video-container .video-overlay {
			pointer-events: none;
			opacity: 0;
			transition: opacity 0.3s ease;
		}

		.video-container:hover .video-overlay {
			opacity: 1;
		}

		/* Full Screen Video Section - Clean & Simple */
		.fullscreen-video-section {
			height: 100vh;
			min-height: 600px;
			overflow: hidden;
			position: relative;
		}

		.video-container-fullscreen {
			position: relative;
			width: 100%;
			height: 100%;
		}

		.fullscreen-video {
			position: absolute;
			top: 50%;
			left: 50%;
			min-width: 100%;
			min-height: 100%;
			width: auto;
			height: auto;
			transform: translate(-50%, -50%);
			object-fit: cover;
			z-index: 1;
		}

		.youtube-container {
			position: relative;
			width: 100%;
			height: 100%;
		}

		.youtube-container .fullscreen-video {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			border: none;
		}

		/* Mobile Responsive */
		@media (max-width: 768px) {
			.fullscreen-video-section {
				min-height: 400px;
				height: 60vh;
			}
		}

		@media (max-width: 480px) {
			.fullscreen-video-section {
				min-height: 300px;
				height: 50vh;
			}
		}

		/* Enhanced website product cards */
		.website-card {
			transition: all 0.3s ease;
			border-radius: 16px;
			overflow: hidden;
		}

		.website-card:hover {
			transform: translateY(-5px);
		}

		.website-image {
			height: 200px;
			object-fit: cover;
			transition: transform 0.3s ease;
		}

		.website-card:hover .website-image {
			transform: scale(1.05);
		}

		.tech-badge {
			font-size: 0.75rem;
			padding: 0.25rem 0.5rem;
		}

		/* FIXED: Icon boxes text overflow fix */
		.icon-grid-box {
			border: 1px solid rgba(255, 143, 42, 0.3);
			border-radius: 8px;
			padding: 1rem 0.5rem;
			text-align: center;
			transition: all 0.3s ease;
			background: rgba(255, 255, 255, 0.02);
			height: 80px;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			overflow: hidden;
		}

		.icon-grid-box:hover {
			background: rgba(255, 143, 42, 0.1);
			border-color: rgba(255, 143, 42, 0.5);
			transform: translateY(-2px);
		}

		.icon-grid-box i {
			font-size: 1.2rem;
			margin-bottom: 0.5rem;
			color: #ff8f2a;
			display: block;
		}

		.icon-grid-box small {
			font-size: 0.75rem;
			font-weight: 500;
			color: #fff;
			line-height: 1.2;
			word-wrap: break-word;
			text-overflow: ellipsis;
			overflow: hidden;
			white-space: nowrap;
			width: 100%;
		}

		/* Additional responsive fixes for icon boxes */
		@media (max-width: 576px) {
			.icon-grid-box {
				height: 70px;
				padding: 0.75rem 0.25rem;
			}
			
			.icon-grid-box i {
				font-size: 1rem;
				margin-bottom: 0.25rem;
			}
			
			.icon-grid-box small {
				font-size: 0.65rem;
			}
		}
	</style>

</head>

<body class="sk__homepage sk__home-animated-headline dark-shade-1-bg ">

	<main id="primary" class="site-main">

		<!-- Back to top button -->
		<div class="sk__back-to-top-wrap">
			<a class="sk__back-to-top" href="#smooth-content"><span class="sk__back-to-top"></span></a>
		</div>

		<!-- Navigation Menu -->
		<div class="sk__mobile-menu-bar headerBackkGround overflow-hidden customAnimation" style="z-index: 1;"></div>

		<!-- Dynamically controlled with JS! -->
		<a class="sk__mobile-main-logo" href="#"><img alt="Website logo." src="assets/images/Companyimages/logo.png"></a>
		
		<!-- Desktop Navigation Bar (Large Screens) -->
		<div class="custom-header d-none d-md-none d-lg-block" style="z-index:3;">
			<div class="custom-nav-links">
				<a class="custom-link text-hover-background-swipe gradiendColorAdd" href="#">Home</a>
				<a class="custom-link text-hover-background-swipe" href="web-development/">Web/App/Software</a>
				<a class="custom-link text-hover-background-swipe" href="academy/">Academy</a>
				<a class="custom-link text-hover-background-swipe" href="about/">About</a>
				<a class="custom-link text-hover-background-swipe" href="team/">Team</a>
				<a class="custom-link text-hover-background-swipe" href="contact/">Contact</a>
			</div>
		</div>

		<!-- Enhanced Premium Mobile Navigation -->
		<nav class="navbar navbar-expand-lg bg-body-tertiary d-lg-none d-md-block d-block custom-header">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"></a>
				<button class="navbar-toggler text-white" style="z-index: 100;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fs-2">&#9776;</span>
				</button>
				<div class="collapse navbar-collapse bg-black" id="navbarNavDropdown">
					<ul class="navbar-nav p-3">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">
								<i class="icon-home"></i> Home
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="web-development/">
								<i class="icon-code"></i> Web/App/Software
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="academy/">
								<i class="icon-graduation-cap"></i> Academy
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about/">
								<i class="icon-user"></i> About
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="team/">
								<i class="icon-users"></i> Team
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact/">
								<i class="icon-mail"></i> Contact
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div id="smooth-wrapper" class="pushable-content">
			<div id="smooth-content">

				<!-- Hero Social Icons Menu -->
				<section class="hero-socials-section">
					<div class="hero-socials-inner">
						<div class="hero-socials">
							<a class="social-icons" href="#" target="_blank"><span><span class="icon-youtube1"></span></span></a>
							<a class="social-icons" href="#" target="_blank"><span><span class="icon-twitter1"></span></span></a>
							<a class="social-icons" href="#" target="_blank"><span><span class="icon-behance1"></span></span></a>
							<a class="social-icons" href="#" target="_blank"><span><span class="icon-dribbble1"></span></span></a>
							<a class="social-icons" href="#" target="_blank"><span><span class="icon-instagram1"></span></span></a>
							<a class="social-icons" href="#" target="_blank"><span><span class="icon-pinterest"></span></span></a>
						</div>
					</div>
				</section>

				<section class="sk__hero-section sk__parallax-background-section sk__parallax-fixer-section">
					<div class="sk__parallax-background-element sk__absolute sk__image-back-cover sk__parallax-fixer"></div>

					<!-- Carousel -->
					<div id="sk__hero-carousel-slider" class="sk__static-carousel-slider carousel slide dark-shade-1-bg">

						<!-- Slides -->
						<div class="carousel-inner">

							<!-- Slide 1 -->
							<div class="carousel-item zooming active hero-slide-1 sk__hero-slider-item sk__image-back-cover">

								<section class="sk__hero-item-center-center">

									<!-- Morphing images (background) -->
									<div class="sk__morphing-hover-hero-container sk__absolute"></div>

									<!-- Hero content -->
									<div class="mb-2 text-center">
										<span class="animated-element phase-1"></span>
										<span class="animated-element phase-1"></span>
										<!-- Animated headline -->
										<div class="cover-text-wrapper">
											<h1 class="super-heading sk__animated-headline animated-element phase-1 mb-0 text-spread-outline">
												<span>We are </span>
												<span class="sk__animated-headline-words ">
													<span class="sk__visible sk__clipped-text sk__gradient-back-v1 " data-sk-animated-words="Creative,Innovative,Dedicated">100</span>
												</span>
											</h1>
										</div>
										<div class="cover-text-wrapper">
											<h2 class="h2-regular thin animated-element phase-1 myFont">If You Think,<br> You are the Game Changer! Always</h2><br>

										</div><br>

									</div>

								</section>
							</div>
							<!-- /.hero-slide-1 -->

						</div>

					</div>
					<!-- /#sk__hero-carousel-slider -->
				</section>

				<section class="sk__parallax-background-section sk__parallax-fixer-section sk__parallax-fixer-ignore-height overflow-hidden" style="max-height: 0;">
					<div class="sk__parallax-background-element"></div>
				</section>

				<section class="service-section sk__parallax-background-section">
					<div class="sk__parallax-background-element sk__absolute sk__image-back-cover" style="background-image: url(assets/images/Companyimages/whoWeAreBack.jpeg); opacity: 0.05;"></div>
					<div class="container sk__powercontainer">
						<div class="row">
							<div class="col text-center mb-5">
								<h4 class="h4-dark h4-shadow">Our Latest Works</h4>
								<span class="fat-divider dark-shade-4-bg"></span>
								<p class="p-v2 mt-4">Discover our most recent projects and creative achievements</p>
							</div>
						</div>

						<!-- Latest Course Section -->
						<div class="row mb-5">
							<div class="col-12">
								<div class="service-card">
									<div class="row align-items-center">
										<div class="col-lg-6 mb-4 mb-lg-0">
											<div class="service-icon mx-auto mx-lg-0">
												<i class="icon-play"></i>
											</div>
											<h5 class="mb-3 text-warning text-center text-lg-start">🎬 Latest Course: Advanced Prompt Engineering with Davinci Resolve Film Making</h5>
											<p class="mb-3 text-center text-lg-start">Master the art of film making using advanced prompt engineering techniques combined with professional DaVinci Resolve workflows designed for content creators and filmmakers.</p>
											
											<div class="row text-center text-lg-start">
												<div class="col-md-6">
													<h6 class="text-warning mb-2">What You'll Learn:</h6>
													<ul class="list-unstyled small">
														<li class="mb-1"><i class="icon-check text-warning me-2"></i> Advanced Prompt Engineering</li>
														<li class="mb-1"><i class="icon-check text-warning me-2"></i> DaVinci Resolve Professional Techniques</li>
														<li class="mb-1"><i class="icon-check text-warning me-2"></i> AI-Powered Film Production</li>
														<li class="mb-1"><i class="icon-check text-warning me-2"></i> Color Grading & Visual Effects</li>
													</ul>
												</div>
												<div class="col-md-6">
													<h6 class="text-warning mb-2">Course Details:</h6>
													<ul class="list-unstyled small">
														<li class="mb-1"><i class="icon-clock text-warning me-2"></i> Duration: 10 Weeks</li>
														<li class="mb-1"><i class="icon-users text-warning me-2"></i> Class Size: 12 Students</li>
														<li class="mb-1"><i class="icon-certificate text-warning me-2"></i> Professional Certificate</li>
														<li class="mb-1"><i class="icon-star text-warning me-2"></i> Industry Mentorship</li>
													</ul>
												</div>
											</div>
											
											<div class="text-center text-lg-start mt-3">
												<a class="btn btn-outline-warning btn-sm me-2" href="academy/" role="button">
													<i class="icon-info me-1"></i> Course Details
												</a>
												<a class="btn btn-outline-light btn-sm" href="academy/" role="button">
													<i class="icon-user-plus me-1"></i> Enroll Now
												</a>
											</div>
										</div>
										
										<div class="col-lg-6">
											<div class="video-container position-relative">
												<div class="ratio ratio-16x9">
													<iframe 
														src="https://www.youtube.com/embed/TmlkE9ubwtI?si=Qd1U7xfMYvP5ELCc&rel=0&modestbranding=1" 
														title="Advanced Prompt Engineering with Davinci Resolve Film Making Course Preview" 
														allowfullscreen 
														class="rounded">
													</iframe>
												</div>
												<div class="video-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(0,0,0,0.3); border-radius: 8px;">
													<div class="text-center text-white">
														<i class="icon-play-circle" style="font-size: 3rem; opacity: 0.8;"></i>
														<p class="mt-2 mb-0">Course Preview</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Latest Website Products Section -->
						<div class="row">
							<div class="col-12 mb-4">
								<h5 class="text-center text-warning">💻 Latest Website Products</h5>
								<p class="text-center mb-4">Check out our most recent website developments and digital solutions</p>
							</div>
						</div>

						<div class="row g-4">
							<div class="col-lg-4 col-md-6">
								<div class="service-card website-card h-100">
									<div class="position-relative mb-3 overflow-hidden rounded">
										<img src="vidimg/kwimg.png" 
											 alt="KW Industries - Ceylon Cinnamon" 
											 class="img-fluid website-image w-100">
										<div class="position-absolute top-0 end-0 m-2">
											<span class="badge bg-success">New</span>
										</div>
									</div>
									<h6 class="text-warning mb-2">KW Industries</h6>
									<p class="small mb-3">Sri Lankan true cinnamon (Ceylon cinnamon) export business website. Features premium Ceylon cinnamon products with e-commerce integration and international shipping capabilities.</p>
									<div class="mb-3">
										<p class="small text-muted mb-1"><strong>Specialty:</strong> Ceylon cinnamon is the original and best cinnamon from Sri Lanka - sweeter, milder, and healthier than common Cassia cinnamon.</p>
									</div>
									<div class="d-flex justify-content-between align-items-center mb-2">
										<div>
											<span class="badge bg-secondary me-1 tech-badge">WordPress</span>
											<span class="badge bg-secondary tech-badge">WooCommerce</span>
										</div>
										<a href="https://industrieskw.com/" target="_blank" class="btn btn-outline-warning btn-sm">
											<i class="icon-external-link"></i> Visit
										</a>
									</div>
									<div class="d-grid">
										<a href="web-development/" class="btn btn-outline-light btn-sm">
											<i class="icon-eye"></i> Project Details
										</a>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-6">
								<div class="service-card website-card h-100">
									<div class="position-relative mb-3 overflow-hidden rounded">
										<img src="vidimg/hwbimg.png" 
											 alt="Hela Weda Gedara - Ayurveda Medicine" 
											 class="img-fluid website-image w-100">
										<div class="position-absolute top-0 end-0 m-2">
											<span class="badge bg-info">Healthcare</span>
										</div>
									</div>
									<h6 class="text-warning mb-2">Hela Weda Gedara</h6>
									<p class="small mb-3">Indigenous Sri Lankan medicine and Ayurveda healthcare services platform. Combines traditional Hela Wedakama with modern Ayurvedic treatments for comprehensive healthcare solutions.</p>
									<div class="mb-3">
										<p class="small text-muted mb-1"><strong>Specialty:</strong> Quality healthcare services preserving indigenous Hela Wedakama with Ayurveda and Sri Lankan traditional medicine.</p>
									</div>
									<div class="d-flex justify-content-between align-items-center mb-2">
										<div>
											<span class="badge bg-secondary me-1 tech-badge">WordPress</span>
											<span class="badge bg-secondary tech-badge">Custom CMS</span>
										</div>
										<a href="https://helawedagedaraboossa.com/" target="_blank" class="btn btn-outline-warning btn-sm">
											<i class="icon-external-link"></i> Visit
										</a>
									</div>
									<div class="d-grid">
										<a href="web-development/" class="btn btn-outline-light btn-sm">
											<i class="icon-eye"></i> Project Details
										</a>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-6">
								<div class="service-card website-card h-100">
									<div class="position-relative mb-3 overflow-hidden rounded d-flex align-items-center justify-content-center" style="height: 200px; background: linear-gradient(135deg, #ff8f2a, #FFEB3B);">
										<div class="text-center text-dark">
											<i class="icon-calculator" style="font-size: 4rem; margin-bottom: 1rem;"></i>
											<h4 class="mb-0">Smart POS</h4>
										</div>
										<div class="position-absolute top-0 end-0 m-2">
											<span class="badge bg-warning text-dark">Mobile App</span>
										</div>
									</div>
									<h6 class="text-warning mb-2">Smart POS System</h6>
									<p class="small mb-3">Comprehensive mobile application for billing and inventory management designed specifically for small businesses. Features real-time inventory tracking, sales analytics, and customer management.</p>
									<div class="mb-3">
										<p class="small text-muted mb-1"><strong>Features:</strong> Point of sale, inventory management, sales reports, customer database, and multi-platform support.</p>
									</div>
									<div class="d-flex justify-content-between align-items-center mb-2">
										<div>
											<span class="badge bg-secondary me-1 tech-badge">React Native</span>
											<span class="badge bg-secondary tech-badge">Node.js</span>
										</div>
										<span class="btn btn-outline-secondary btn-sm disabled">
											<i class="icon-smartphone"></i> App Store
										</span>
									</div>
									<div class="d-grid">
										<a href="web-development/" class="btn btn-outline-light btn-sm">
											<i class="icon-eye"></i> Project Details
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="row mt-5">
							<div class="col text-center">
								<a class="btn btn-outline-light animated-element text-hover-background-swipe-button btn-lg" href="web-development/" role="button">
									<i class="icon-briefcase me-2"></i> View Complete Portfolio
								</a>
								<div class="mt-3">
									<p class="small text-muted">See all projects • Client testimonials • Development process</p>
								</div>
							</div>
						</div>
					</div>
				</section>
			

				<!-- Web Development Overview Section -->
				<section class="service-section sk__parallax-background-section">
					<div class="sk__parallax-background-element sk__absolute sk__image-back-cover" style="background-image: url(assets/images/Companyimages/whoWeAreBack.jpeg); opacity: 0.1;"></div>
					<div class="container sk__powercontainer">
						<div class="row">
							<div class="col text-center mb-5">
								<h4 class="h4-dark h4-shadow">Web Development & Software Solutions</h4>
								<span class="fat-divider dark-shade-4-bg"></span>
								<p class="p-v2 mt-4">Transform your innovative ideas into powerful digital solutions</p>
							</div>
						</div>
						
						<div class="row align-items-center">
							<div class="col-lg-6 mb-4 mb-lg-0">
								<div class="service-card">
									<div class="service-icon">
										<i class="icon-code"></i>
									</div>
									<h5 class="mb-3 text-warning">Professional Development Services</h5>
									<p class="mb-4">We specialize in creating cutting-edge web applications, mobile apps, and custom software solutions that bring your business vision to life.</p>
									
									<div class="row">
										<div class="col-md-6">
											<h6 class="text-warning mb-2">Our Expertise:</h6>
											<ul class="list-unstyled">
												<li class="mb-1"><i class="icon-check text-warning me-2"></i> Web Applications</li>
												<li class="mb-1"><i class="icon-check text-warning me-2"></i> Mobile Apps</li>
												<li class="mb-1"><i class="icon-check text-warning me-2"></i> E-commerce Solutions</li>
												<li class="mb-1"><i class="icon-check text-warning me-2"></i> <em>+ Much more...</em></li>
											</ul>
										</div>
										<div class="col-md-6">
											<h6 class="text-warning mb-2">Technologies:</h6>
											<ul class="list-unstyled">
												<li class="mb-1"><i class="icon-check text-warning me-2"></i> Modern Frameworks</li>
												<li class="mb-1"><i class="icon-check text-warning me-2"></i> Cloud Integration</li>
												<li class="mb-1"><i class="icon-check text-warning me-2"></i> API Development</li>
												<li class="mb-1"><i class="icon-check text-warning me-2"></i> <em>+ View all services...</em></li>
											</ul>
										</div>
									</div>
									
									<div class="mt-4 text-center">
										<a class="btn btn-outline-warning btn-sm me-2" href="web-development/" role="button">
											<i class="icon-eye me-1"></i> View More Details
										</a>
										<span class="small text-muted">See our complete portfolio & services</span>
									</div>
								</div>
							</div>
							
							<div class="col-lg-6 text-center">
								<div class="service-card">
									<h5 class="mb-4 text-warning">Ready to Build Something Amazing?</h5>
									<p class="mb-4">Explore our comprehensive development services, view our portfolio, and discover how we can help turn your ideas into reality.</p>
									
									<div class="d-grid gap-3">
										<a class="btn btn-outline-light animated-element text-hover-background-swipe-button btn-lg" href="web-development/" role="button">
											<i class="icon-arrow-right me-2"></i> Visit Our Development Page
										</a>
										
										<div class="row text-center">
											<div class="col-4">
												<div class="icon-grid-box">
													<i class="icon-briefcase"></i>
													<small>Portfolio</small>
												</div>
											</div>
											<div class="col-4">
												<div class="icon-grid-box">
													<i class="icon-calculator"></i>
													<small>Get Quote</small>
												</div>
											</div>
											<div class="col-4">
												<div class="icon-grid-box">
													<i class="icon-phone"></i>
													<small>Contact</small>
												</div>
											</div>
										</div>
									</div>
									
									<div class="mt-3">
										<p class="small text-muted">Complete project showcase • Pricing information • Expert consultation</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<hr class="section-divider">

				<!-- Academy Overview Section -->
				<section class="service-section">
					<div class="container sk__powercontainer">
						<div class="row">
							<div class="col text-center mb-5">
								<h4 class="h4-dark h4-shadow">100 International Academy</h4>
								<span class="fat-divider dark-shade-4-bg"></span>
								<p class="p-v2 mt-4">Empowering the next generation of creative and technical professionals</p>
							</div>
						</div>
						
						<div class="row align-items-center">
							<div class="col-lg-6 text-center mb-4 mb-lg-0">
								<div class="service-card">
									<div class="service-icon">
										<i class="icon-graduation-cap"></i>
									</div>
									<h5 class="mb-4 text-warning">Launch Your Creative Career</h5>
									<p class="mb-4">Discover our comprehensive training programs designed to equip you with industry-ready skills and hands-on experience.</p>
									
									<div class="d-grid gap-3">
										<a class="btn btn-outline-light animated-element text-hover-background-swipe-button btn-lg" href="academy/" role="button">
											<i class="icon-arrow-right me-2"></i> Explore Academy Programs
										</a>
										
										<div class="row text-center">
											<div class="col-4">
												<div class="icon-grid-box">
													<i class="icon-book"></i>
													<small>Courses</small>
												</div>
											</div>
											<div class="col-4">
												<div class="icon-grid-box">
													<i class="icon-calendar"></i>
													<small>Schedule</small>
												</div>
											</div>
											<div class="col-4">
												<div class="icon-grid-box">
													<i class="icon-users"></i>
													<small>Enroll</small>
												</div>
											</div>
										</div>
									</div>
									
									<div class="mt-3">
										<p class="small text-muted">Full course catalog • Class schedules • Enrollment information</p>
									</div>
								</div>
							</div>
							
							<div class="col-lg-6">
								<div class="service-card">
									<h5 class="mb-3 text-warning">What You'll Find in Our Academy</h5>
									<p class="mb-4">Our academy offers professional-grade training with industry experts, real-world projects, and career support.</p>
									
									<div class="row">
										<div class="col-md-6">
											<h6 class="text-warning mb-2">Technical Courses:</h6>
											<ul class="list-unstyled">
												<li class="mb-1"><i class="icon-code text-warning me-2"></i> Web Development</li>
												<li class="mb-1"><i class="icon-smartphone text-warning me-2"></i> Mobile Development</li>
												<li class="mb-1"><i class="icon-database text-warning me-2"></i> Database Management</li>
												<li class="mb-1"><i class="icon-plus text-warning me-2"></i> <em>+ 5 more courses...</em></li>
											</ul>
										</div>
										<div class="col-md-6">
											<h6 class="text-warning mb-2">Creative Courses:</h6>
											<ul class="list-unstyled">
												<li class="mb-1"><i class="icon-camera text-warning me-2"></i> Video Editing</li>
												<li class="mb-1"><i class="icon-palette text-warning me-2"></i> Graphic Design</li>
												<li class="mb-1"><i class="icon-play text-warning me-2"></i> Film Making</li>
												<li class="mb-1"><i class="icon-plus text-warning me-2"></i> <em>+ 4 more courses...</em></li>
											</ul>
										</div>
									</div>
									
									<div class="mt-4 text-center">
										<a class="btn btn-outline-warning btn-sm me-2" href="academy/" role="button">
											<i class="icon-eye me-1"></i> View All Courses
										</a>
										<span class="small text-muted">See complete course details & pricing</span>
									</div>
									
									<div class="mt-3">
										<p class="small"><strong>What's included:</strong> Expert instructors • Hands-on projects • Industry certifications • Job placement support</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<hr class="section-divider">
					<!-- Full Screen Auto-Play Video Section -->
				<section class="fullscreen-video-section position-relative">
					<div class="video-container-fullscreen">
						<!-- Video Background -->
						<video 
							class="fullscreen-video" 
							autoplay 
							muted 
							loop 
							playsinline
							poster="assets/images/Companyimages/homeBackground.webp">
							<source src="assets/video/company/100.mp4" type="video/mp4">
							<source src="assets/videos/showcase-video.webm" type="video/webm">
							<!-- Fallback for browsers that don't support video -->
							Your browser does not support the video tag.
						</video>
						
						<!-- Alternative: YouTube Video Embed (uncomment to use instead of local video) -->
						<!-- 
						<div class="youtube-container">
							<iframe 
								class="fullscreen-video" 
								src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&mute=1&loop=1&controls=0&showinfo=0&rel=0&iv_load_policy=3&modestbranding=1&playlist=dQw4w9WgXcQ&disablekb=1" 
								title="100 International Showcase Video" 
								frameborder="0" 
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
								allowfullscreen>
							</iframe>
						</div>
						-->
					</div>
				</section>
				<hr class="section-divider">

				<!-- categories -->
				<!-- <iframe src="categorySlider.php" class="iframe-container"></iframe> -->
				<!-- categories -->

				<section class="sk__testimonials-section sk__parallax-background-section sk__parallax-fixer-ignore-height sk__py-m sk__centered-y-section">

					<!-- Parallax background -->
					<div class="sk__parallax-background-element sk__absolute sk__image-back-cover" style="background-image: url(assets/images/Companyimages/whoWeAreBack.jpeg);"></div>
					<div class="sk__tint sk__absolute"></div>

					<div class="container sk__supercontainer">
						<div class="row">
							<div class="col">
								<div class="row mt-5">
									<div class="col text-center text-sm-start">
										<h4 class="h4-dark h4-shadow">What We Do & Who We Are.</h4>
										<span class="fat-divider dark-shade-4-bg"></span>
									</div>
								</div>

								<div class="row sk__testimonials text-center text-sm-start">
									<div class="col-12 col-lg-6 d-flex align-items-center sk__testimonial-container">
										<div class="sk__testimonial-img sk__image-back-cover sk__testimonial-img-1"></div>
										<div class="sk__testimonial-txt">
											<p class="p-xs mw-320">Great people make great companies. Here we are projecting our creativity for all the time.</p>
											<h5>Mayura Athukorala</h5>
											<p>Our CEO</p>
										</div>
									</div>
									<div class="col-12 col-lg-6 d-flex align-items-center sk__testimonial-container">
										<div class="sk__testimonial-img sk__image-back-cover sk__testimonial-img-2"></div>
										<div class="sk__testimonial-txt">
											<p class="p-xs mw-320">Imagination creates reality, but we beautify your reality.</p>
											<h5>Eranda Chamara</h5>
											<p>Our CCO</p>
										</div>
									</div>
								</div>

								<!-- Section Header -->
								<div class="row sk__heading-spacer-l">
									<div class="col-12 col-xl-10 offset-xl-1 text-center">
										<h1 class="h1-small mb-3 pt-4 pb-1">Our Focus</h1>
										<p class="p-v2 skills-subhead">AT THE CORE, <br> <strong class="text-warning">WE MAKE COMPANIES FOR YOUR INNOVATIVE IDEAS</strong> . <br>BUT THE POINT IS <br><strong class="text-warning">WE SELL HERE OUR CREATIVITY</strong> <br>TO ENTER THE BUSINESS WORLD.</p>
									</div>
								</div>

								<div class="row sk__skills-row">
									<div class="col-12">
										<div class="sk__skill-wrap">
											<p class="sk__skill-name sk__skill-el">Empowering Innovation
											</p>
											<div class="sk__skill-area sk__skill-el">
												<div class="sk__skill-bar sk__gradient-back-v1"></div>
											</div>
											<p class="sk__skill-number sk__skill-el"><span class="sk__counterskills">75</span><span>%</span></p>
										</div>
										<div class="sk__skill-wrap">
											<p class="sk__skill-name sk__skill-el">Driving Creativity
											</p>
											<div class="sk__skill-area sk__skill-el">
												<div class="sk__skill-bar sk__gradient-back-v1"></div>
											</div>
											<p class="sk__skill-number sk__skill-el"><span class="sk__counterskills">80</span><span>%</span></p>
										</div>
										<div class="sk__skill-wrap">
											<p class="sk__skill-name sk__skill-el">Building Platforms
											</p>
											<div class="sk__skill-area sk__skill-el">
												<div class="sk__skill-bar sk__gradient-back-v1"></div>
											</div>
											<p class="sk__skill-number sk__skill-el"><span class="sk__counterskills">50</span><span>%</span></p>
										</div>
										<div class="sk__skill-wrap">
											<p class="sk__skill-name sk__skill-el">Inspiring Success</p>
											<div class="sk__skill-area sk__skill-el">
												<div class="sk__skill-bar sk__gradient-back-v1"></div>
											</div>
											<p class="sk__skill-number sk__skill-el"><span class="sk__counterskills">70</span><span>%</span></p>
										</div>
										<div class="sk__skill-wrap">
											<p class="sk__skill-name sk__skill-el">Innovating Excellence</p>
											<div class="sk__skill-area sk__skill-el">
												<div class="sk__skill-bar sk__gradient-back-v1"></div>
											</div>
											<p class="sk__skill-number sk__skill-el"><span class="sk__counterskills">60</span><span>%</span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</section>

				<!-- Footer -->
				<footer class="dark-shade-2-bg position-relative">

					<div class="footer-background-container sk__absolute">
						<div class="sk__gradient-background-tint footer-background sk__absolute"></div>
					</div>

					<div class="container sk__supercontainer position-relative">

						<div class="row footer-top">
							<div class="col-12 col-sm-6 top-footer-logo">
								<img src="assets/images/Companyimages/logo.png" alt="Website logo for the footer.">
							</div>
							<div class="col-12 col-sm-6 top-footer-tagline">
								<h5 class="h5-elegant">We Sell <strong>Creativity </strong></h5>
							</div>
						</div>

						<span class="divider sk__subtle-divider"></span>

						<div class="row footer-main text-center text-sm-start">
							<div class="col-md-12 col-lg-6 footer-main-large-col mb-4 mb-lg-0">
								<div class="fancy-gradient-text-box">
									<h3 class="h3-elegant sk__gradient-fancy-text">MAKE YOUR COMPANY NOW.</h3>
								</div>
								<p class="p-v2 mw-440">Connect with 100 International, Achieve next level <b>Creativity!</b></p>

								<p class="p-v2 mw-440">
									<span>Contact - +94 76 368 7242 - Iruni Kalupahana <br> (Director of Internationals)</span>
									<br />
								</p>

							</div>
							<div class="col-sm-12 col-md-6 col-lg-3 footer-main-small-col widget_nav_menu">
								<h5>100 Quick Links</h5>
								<ul>
									<li>
										<a href="web-development/" class="footer-main-links gradient-links">Web Development</a>
									</li>
									<li>
										<a href="academy/" class="footer-main-links gradient-links">Academy</a>
									</li>
									<li>
										<a href="team/" class="footer-main-links gradient-links">Our Team</a>
									</li>
									<li>
										<a href="contact/" class="footer-main-links gradient-links">Contact Us</a>
									</li>
								</ul>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-3 footer-main-small-col">
								<div class="row">
									<div class="col">
										<!-- Footer Social Icons Menu -->
										<section class="footer-socials-section">
											<h5>Follow Us & Stay Informed</h5>
											<div class="footer-socials-inner">
												<div class="footer-socials">
													<a class="social-icons" href="#" target="_blank"><span><span class="icon-facebook1"></span></span></a>
													<a class="social-icons" href="#" target="_blank"><span><span class="icon-twitter1"></span></span></a>
													<a class="social-icons" href="#" target="_blank"><span><span class="icon-behance1"></span></span></a>
													<a class="social-icons" href="#" target="_blank"><span><span class="icon-dribbble1"></span></span></a>
												</div>
											</div>
										</section>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<!-- Widget - Subscribe -->
										<div class="widget custom_subscribe_widget">
											<div class="sk__widget-inner">

												<!-- Preview Only Static Form -->
												<form class="sk__form sk__subscribe-form">
													<div class="form-group">
														<input type="email" name="the_email" placeholder="Enter email address*" tabindex="1">
													</div>
													<button type="submit" tabindex="2">SUB</button>
												</form>

											</div>
										</div>
										<!-- /.custom_subscribe_widget -->
									</div>
								</div>
							</div>
						</div>

						<span class="divider sk__subtle-divider"></span>

						<div class="row footer-bottom">
							<div class="col-xs-12 col-sm-6 col-md-4 text-center text-sm-start">
								<h5>We Are 100</h5>
							</div>
							<div class="col-12 col-md-4 order-xs-3 order-sm-3 order-md-2 text-center text-sm-start text-md-center">
								<p class="p-footer-copyright">Copyright © 2025 100-international</p>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 order-sm-2 order-md-3 text-center text-sm-end">
								<a class="footer-bottom-right-links" href="#" target="_blank">Privacy</a>
								<a class="footer-bottom-right-links" href="#" target="_blank">Terms</a>
								<a class="footer-bottom-right-links" href="contact/" target="_blank">Contact</a>
							</div>
						</div>
					</div>

				</footer>

				<!-- Helper div for inserting before scripts -->
				<div class="sk__body-end"></div>

			</div>
			<!-- /#smooth-content -->

		</div>
		<!-- /#smooth-wrapper -->

	</main>
	<!-- /main#primary.site-main -->

	<!-- Scripts / Body End -->
	<!-- Vendor Scripts -->
	<script src="assets/vendor/bootstrap/5.1.3/bootstrap.min.js"></script>
	<script src="assets/vendor/offcanvas-nav/hc-offcanvas-nav.js"></script>
	<script src="assets/vendor/greensock/gsap.min.js"></script>
	<script src="assets/vendor/greensock/ScrollTrigger.min.js"></script>
	<script src="assets/vendor/greensock/ScrollSmoother.min.js"></script>
	<script src="assets/vendor/greensock/ScrollToPlugin.min.js"></script>
	<script src="assets/vendor/slick/1.8.1/slick.min.js"></script>
	<script src="assets/vendor/parallax/3.1.0/parallax.min.js"></script>

	<!-- Main Theme JS File -->
	<script src="assets/js/theme.js"></script>

	<!-- Theme Preview Only Scripts -->
	<script src="assets/vendor/spectrum/spectrum.min.js"></script>
	<script src="assets/vendor/clipboard/clipboard.min.js"></script>

	<!-- Theme Preview Only CSS -->
	<link href="assets/vendor/spectrum/spectrum.min.css" rel="stylesheet">
	<!-- For morphing hover -->
	<script src="assets/vendor/three-js/three.min.js"></script>
	<script src="assets/vendor/hover-effect/hover-effect.umd.js"></script>
	<script>
		// Morphing hover hero image
		new hoverEffect({
			parent: document.querySelector('.sk__home-animated-headline .sk__morphing-hover-hero-container'),
			intensity: 0.4,
			image1: './assets/images/Companyimages/backImg.webp',
			image2: './assets/images/Companyimages/homeBackground.webp',
			displacementImage: './assets/images/morphing-hero-image-displacement-01.webp',
			imagesRatio: 1670 / 3290,
			speedIn: 1.5,
			speedOut: 1.5,
			hover: true,
			easing: Expo.easeOut
		});

		function downloadPdf() {
			const pdfUrl = 'https://www.100-international.com/Project_100_Professional_Editors.pdf';

			// Create an anchor element
			const anchor = document.createElement('a');
			anchor.href = pdfUrl;

			// Set the download attribute to suggest a filename
			anchor.download = 'file.pdf';

			// Trigger the download by simulating a click
			document.body.appendChild(anchor);
			anchor.click();

			// Clean up by removing the anchor element
			document.body.removeChild(anchor);
		}

		// Enhanced Navigation Scripts
		// Smooth Scrolling for Anchor Links (only for links that start with # and have targets)
		document.querySelectorAll('a[href^="#"]').forEach(anchor => {
			anchor.addEventListener('click', function (e) {
				const target = document.querySelector(this.getAttribute('href'));
				if (target) {
					e.preventDefault();
					const headerHeight = 80; // Account for fixed header
					const targetPosition = target.offsetTop - headerHeight;
					window.scrollTo({
						top: targetPosition,
						behavior: 'smooth'
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

		// Enhanced link hover effects (for desktop navigation)
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

		// Enhanced navigation scroll effect
		window.addEventListener('scroll', function() {
			const header = document.querySelector('.custom-header');
			if (header) {
				if (window.scrollY > 100) {
					header.style.background = 'rgba(0, 0, 0, 0.95)';
					header.style.backdropFilter = 'blur(15px)';
					header.style.borderBottom = '1px solid rgba(255, 143, 42, 0.2)';
				} else {
					header.style.background = 'transparent';
					header.style.backdropFilter = 'none';
					header.style.borderBottom = 'none';
				}
			}
		});

		// Enhanced mobile navigation toggle animation
		const navbarToggler = document.querySelector('.navbar-toggler');
		if (navbarToggler) {
			navbarToggler.addEventListener('click', function() {
				this.style.transform = 'rotate(180deg)';
				setTimeout(() => {
					this.style.transform = 'rotate(0deg)';
				}, 300);
			});
		}

		// Service cards animation on scroll
		const observerOptions = {
			threshold: 0.1,
			rootMargin: '0px 0px -50px 0px'
		};

		const observer = new IntersectionObserver((entries) => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					entry.target.style.opacity = '1';
					entry.target.style.transform = 'translateY(0)';
				}
			});
		}, observerOptions);

		document.querySelectorAll('.service-card').forEach(card => {
			card.style.opacity = '0';
			card.style.transform = 'translateY(30px)';
			card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
			observer.observe(card);
		});
	</script>
	<script src="assets/custom/js/script.js"></script>

</body>

</html>