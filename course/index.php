<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="100 International">
	<meta name="keywords" content="100 Academy, DaVinci Resolve, video editing, color grading, creative thinking, online courses"/>

	<meta property="og:title" content="100 Academy | 100 International"/>
	<meta property="og:description" content="Professional video post-production and creative thinking courses. Learn DaVinci Resolve, Fusion, and unlock your creative potential."/>
	<meta property="og:image" content="../assets/images/Companyimages/logo.png"/>
	<meta property="og:site_name" content="100 International"/>

	<title>100 Academy | 100 International</title>

	<link rel="icon" href="../assets/images/Companyimages/logo.png" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="../assets/images/apple-touch-icon-72x72-precomposed.png" sizes="72x72" />
	<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="../assets/images/apple-touch-icon-114x114-precomposed.png" sizes="114x114" />
	<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="../assets/images/apple-touch-icon-144x144-precomposed.png" sizes="144x144" />
	<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="../assets/images/apple-touch-icon-precomposed.png" />

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

	<!-- Navigation and Page Specific Styles -->
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

		/* Project Cards */
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
			height: 200px;
			background: linear-gradient(135deg, #ff8f2a, #FFEB3B);
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 3rem;
			color: #000;
		}

		/* Pricing Cards */
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

		/* Tech Stack Grid */
		.tech-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
			gap: 1.5rem;
			margin: 2rem 0;
		}

		.tech-item {
			background: rgba(255, 255, 255, 0.05);
			border-radius: 10px;
			padding: 1.5rem;
			text-align: center;
			transition: all 0.3s ease;
		}

		.tech-item:hover {
			background: rgba(255, 143, 42, 0.1);
			transform: translateY(-5px);
		}

		.tech-icon {
			font-size: 2.5rem;
			color: #ff8f2a;
			margin-bottom: 0.5rem;
		}

		/* Responsive Design */
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
				<a class="custom-link text-hover-background-swipe" href="../course/">Courses</a>
				<a class="custom-link text-hover-background-swipe" href="../web-development/">Web Development</a>
				<a class="custom-link text-hover-background-swipe gradiendColorAdd" href="../academy/">Academy</a>
				<a class="custom-link text-hover-background-swipe" href="../about/">About</a>
				<a class="custom-link text-hover-background-swipe" href="../companies/">Companies</a>
				<a class="custom-link text-hover-background-swipe" href="../team/">Team</a>
				<a class="custom-link text-hover-background-swipe" href="../contact/">Contact</a>
			</div>
			<div class="mirror-container"></div>
		</div>

		<!-- Mobile Navigation -->
		<nav class="navbar navbar-expand-lg bg-body-tertiary d-lg-none d-md-block d-block custom-header">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"></a>
				<button class="navbar-toggler text-white" style="z-index: 100;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fs-2">&equiv;</span>
				</button>
				<div class="collapse navbar-collapse bg-black" id="navbarNavDropdown">
					<ul class="navbar-nav p-3">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="../">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../course/">Courses</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../web-development/">Web Development</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="../academy/">Academy</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../about/">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../companies/">Companies</a>
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

							<!-- Slide 1 - DaVinci Resolve Color Grading -->
							<div class="carousel-item zooming active hero-slide-1 sk__hero-slider-item sk__image-back-cover">
								<section class="sk__parallax-background-section sk__hero-item-theme-style">
									<!-- Parallax background -->
									<div class="sk__parallax-background-element sk__absolute sk__image-back-cover" style="background-image: url(../assets/images/hero-image-03.webp);"></div>

									<div class="flex-helper-div"></div>
									
									<!-- Main hero heading -->
									<div class="hero-h1-box">
										<div class="cover-text-wrapper">
											<h1 class="hero-h1 animated-element phase-1 text-center text-md-start text-white">DaVinci<br /> Resolve<br /> Color Grading</h1>
										</div>
									</div>

									<!-- Bottom Left box -->
									<div class="hero-box-bottom-left text-center text-sm-start">
										<a class="btn btn-outline-light animated-element phase-1 mb-4" href="#color-grading" role="button">LEARN MORE</a>
										
										<div class="cover-text-wrapper">
											<h3 class="animated-element phase-1 text-center text-sm-start text-white">PROFESSIONAL <strong>COLOR GRADING</strong></h3>
										</div>

										<div class="cover-text-wrapper">
											<p class="hero-box-p animated-element phase-1 text-center text-sm-start text-white">Master the art of color correction and grading using DaVinci Resolve. Perfect for video editors and filmmakers.</p>
										</div>
									</div>

									<!-- Bottom Right Box -->
									<div class="hero-box-bottom-right text-center text-sm-start">
										<div class="cover-text-wrapper">
											<span class="big-abbreviated-heading animated-element phase-2 text-white">COLOR</span>
										</div>
										<div class="cover-text-wrapper">
											<p class="animated-element phase-2 text-white">4 Weeks • 9,000 LKR</p>
										</div>
										<div class="cover-text-wrapper">
											<h4 class="animated-element phase-2 text-white">CINEMATIC LOOKS</h4>
										</div>
									</div>
								</section>
							</div>

							<!-- Slide 2 - DaVinci Resolve Fusion -->
							<div class="carousel-item zooming hero-slide-2 sk__hero-slider-item sk__image-back-cover">
								<section class="sk__parallax-background-section sk__hero-item-theme-style">
									<!-- Parallax background -->
									<div class="sk__parallax-background-element sk__absolute sk__image-back-cover" style="background-image: url(../assets/images/hero-image-13.webp);"></div>

									<div class="flex-helper-div"></div>
									
									<!-- Main hero heading -->
									<div class="hero-h1-box">
										<div class="cover-text-wrapper">
											<h1 class="hero-h1 animated-element phase-1 text-center text-md-start text-white">DaVinci<br /> Resolve<br /> Fusion</h1>
										</div>
									</div>

									<!-- Bottom Left box -->
									<div class="hero-box-bottom-left text-center text-sm-start">
										<a class="btn btn-outline-light animated-element phase-1 mb-4" href="#fusion" role="button">EXPLORE VFX</a>
										
										<div class="cover-text-wrapper">
											<h3 class="animated-element phase-1 text-center text-sm-start text-white">VISUAL EFFECTS & <strong>MOTION GRAPHICS</strong></h3>
										</div>

										<div class="cover-text-wrapper">
											<p class="hero-box-p animated-element phase-1 text-center text-sm-start text-white">Learn advanced VFX and motion graphics with Fusion inside DaVinci Resolve. Perfect for motion designers.</p>
										</div>
									</div>

									<!-- Bottom Right Box -->
									<div class="hero-box-bottom-right text-center text-sm-start">
										<div class="cover-text-wrapper">
											<span class="big-abbreviated-heading animated-element phase-2 text-white">VFX</span>
										</div>
										<div class="cover-text-wrapper">
											<p class="animated-element phase-2 text-white">6 Weeks • 15,000 LKR</p>
										</div>
										<div class="cover-text-wrapper">
											<h4 class="animated-element phase-2 text-white">NODE COMPOSITING</h4>
										</div>
									</div>
								</section>
							</div>

							<!-- Slide 3 - Creative Thinking -->
							<div class="carousel-item zooming hero-slide-3 sk__hero-slider-item sk__image-back-cover">
								<section class="sk__video-background-section sk__hero-item-theme-style">
									<div class="sk__video-container sk__parallax-hero-video sk__absolute sk__image-back-cover">
										<div class="sk__pattern-overlay" style="opacity: 37%;"></div>
										<div class="sk__absolute sk__gradient-back-v1" style="opacity: 0;"></div>
										<video class="sk__video" preload="none" poster="../assets/video/hero-video-main.webp" autoplay="" loop="" muted="" playsinline="">
											<source src="../assets/video/hero-video-main.mp4" type="video/mp4">Your browser does not support HTML5 video.
										</video>
									</div>

									<div class="flex-helper-div"></div>
									
									<!-- Main hero heading -->
									<div class="hero-h1-box">
										<div class="cover-text-wrapper">
											<h1 class="hero-h1 animated-element phase-1 text-center text-md-start text-white">Creative<br /> Thinking<br /> Mastery</h1>
										</div>
									</div>

									<!-- Bottom Left box -->
									<div class="hero-box-bottom-left text-center text-sm-start">
										<a class="btn btn-outline-light animated-element phase-1 mb-4" href="#creative-thinking" role="button">UNLOCK CREATIVITY</a>
										
										<div class="cover-text-wrapper">
											<h3 class="animated-element phase-1 text-center text-sm-start text-white">INNOVATIVE <strong>PROBLEM SOLVING</strong></h3>
										</div>

										<div class="cover-text-wrapper">
											<p class="hero-box-p animated-element phase-1 text-center text-sm-start text-white">Develop creative thinking skills and learn to solve problems innovatively. Perfect for anyone looking to boost creativity.</p>
										</div>
									</div>

									<!-- Bottom Right Box -->
									<div class="hero-box-bottom-right text-center text-sm-start">
										<div class="cover-text-wrapper">
											<span class="big-abbreviated-heading animated-element phase-2 text-white">MIND</span>
										</div>
										<div class="cover-text-wrapper">
											<p class="animated-element phase-2 text-white">3 Weeks • 6,000 LKR</p>
										</div>
										<div class="cover-text-wrapper">
											<h4 class="animated-element phase-2 text-white">IDEA GENERATION</h4>
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

				<!-- Half-screen Parallax Section - Color Grading -->
				<section id="color-grading" class="sk__halfscreen-section">
					<div class="container-fluid">
						<div class="row">
							<!-- Half-screen parallax image (left) -->
							<div class="col-12 col-xl-6 sk__halfscreen-parallax-image-col sk__parallax-container">
								<img class="sk__parallax-element-3" alt="DaVinci Resolve Color Grading" src="../assets/images/halfscreen-parallax-img-1.webp">
							</div>
							<!-- Half-screen text (right) -->
							<div class="col-12 col-xl-6 sk__halfscreen-text-col sk__flex-center-y text-center text-lg-start">
								<div class="sk__halfscreen-text-col-inner">
									<div class="cover-text-wrapper">
										<div class="fancy-gradient-text-box reveal-onscroll">
											<h3 class="h3-elegant sk__gradient-fancy-text">DaVinci Resolve - Color Grading</h3>
										</div>
									</div>
									<h5 class="animated-element mw-660">Master professional color correction and grading</h5>
									<p class="animated-element mw-560">Learn the art of color correction and grading using DaVinci Resolve. Perfect for video editors, filmmakers, YouTubers, and content creators who want to create cinematic looks.</p>
									<div class="row mt-4">
										<div class="col-6">
											<h6>Key Skills:</h6>
											<ul class="list-unstyled">
												<li>• Color Correction</li>
												<li>• Primary Wheels & Curves</li>
												<li>• Skin Tone Adjustments</li>
												<li>• LUTs & Cinematic Looks</li>
											</ul>
										</div>
										<div class="col-6">
											<h6>Course Details:</h6>
											<ul class="list-unstyled">
												<li>• Duration: 4 weeks</li>
												<li>• Price: 9,000 LKR (~$30)</li>
												<li>• Online Learning</li>
												<li>• Certificate Included</li>
											</ul>
										</div>
									</div>
									<a class="animated-element btn btn-outline-light mt-3" href="../contact/" role="button">ENROLL NOW -></a>
								</div>
							</div>
						</div>	
					</div>
				</section>

				<!-- Half-screen Parallax Section - Fusion -->
				<section id="fusion" class="sk__halfscreen-section">
					<div class="container-fluid">
						<div class="row">
							<!-- Half-screen parallax image (right) -->
							<div class="order-xl-2 col-12 col-xl-6 sk__halfscreen-parallax-image-col sk__parallax-container">
								<img class="sk__parallax-element-3" alt="DaVinci Resolve Fusion" src="../assets/images/halfscreen-parallax-img-2.webp">
							</div>
							<!-- Half-screen text (left) -->
							<div class="order-xl-1 col-12 col-xl-6 sk__halfscreen-text-col sk__flex-center-y text-center text-lg-start">
								<div class="sk__halfscreen-text-col-inner">
									<div class="cover-text-wrapper">
										<div class="fancy-gradient-text-box reveal-onscroll">
											<h3 class="h3-elegant sk__gradient-fancy-text">DaVinci Resolve - Fusion</h3>
										</div>
									</div>
									<h5 class="animated-element mw-660">Advanced VFX and motion graphics mastery</h5>
									<p class="animated-element mw-560">Learn visual effects and motion graphics with Fusion inside DaVinci Resolve. Perfect for VFX artists, motion designers, and editors wanting to enhance their visual storytelling.</p>
									<div class="row mt-4">
										<div class="col-6">
											<h6>Key Skills:</h6>
											<ul class="list-unstyled">
												<li>• Node Compositing</li>
												<li>• Tracking & Stabilizing</li>
												<li>• Rotoscoping & Keying</li>
												<li>• Animations & OpenFX</li>
											</ul>
										</div>
										<div class="col-6">
											<h6>Course Details:</h6>
											<ul class="list-unstyled">
												<li>• Duration: 6 weeks</li>
												<li>• Price: 15,000 LKR (~$50)</li>
												<li>• Advanced Level</li>
												<li>• Portfolio Projects</li>
											</ul>
										</div>
									</div>
									<a class="animated-element btn btn-outline-light mt-3" href="../contact/" role="button">START LEARNING -></a>
								</div>
							</div>
						</div>	
					</div>
				</section>

				<!-- Half-screen Parallax Section - Creative Thinking -->
				<section id="creative-thinking" class="sk__halfscreen-section">
					<div class="container-fluid">
						<div class="row">
							<!-- Half-screen parallax image (left) -->
							<div class="col-12 col-xl-6 sk__halfscreen-parallax-image-col sk__parallax-container">
								<img class="sk__parallax-element-3" alt="Creative Thinking Course" src="../assets/images/halfscreen-parallax-img-3.webp">
							</div>
							<!-- Half-screen text (right) -->
							<div class="col-12 col-xl-6 sk__halfscreen-text-col sk__flex-center-y text-center text-lg-start">
								<div class="sk__halfscreen-text-col-inner">
									<div class="cover-text-wrapper">
										<div class="fancy-gradient-text-box reveal-onscroll">
											<h3 class="h3-elegant sk__gradient-fancy-text">100 Beautiful Minds - Creative Thinking</h3>
										</div>
									</div>
									<h5 class="animated-element mw-660">Unlock your creative potential and innovative thinking</h5>
									<p class="animated-element mw-560">Develop your creative thinking skills and learn how to solve problems innovatively. Perfect for anyone interested in boosting creative problem-solving skills.</p>
									<div class="row mt-4">
										<div class="col-6">
											<h6>Key Skills:</h6>
											<ul class="list-unstyled">
												<li>• Idea Generation</li>
												<li>• Creative Blocks</li>
												<li>• Problem Solving</li>
												<li>• Innovation Techniques</li>
											</ul>
										</div>
										<div class="col-6">
											<h6>Course Details:</h6>
											<ul class="list-unstyled">
												<li>• Duration: 3 weeks</li>
												<li>• Price: 6,000 LKR (~$20)</li>
												<li>• All Skill Levels</li>
												<li>• Practical Exercises</li>
											</ul>
										</div>
									</div>
									<a class="animated-element btn btn-outline-light mt-3" href="../contact/" role="button">JOIN COURSE -></a>
								</div>
							</div>
						</div>	
					</div>
				</section>

				<!-- Mentor & Success Stories Section -->
				<section class="sk__py-l dark-shade-3-bg">
					<div class="container sk__supercontainer">
						<div class="row text-center">
							<div class="col sk__heading-spacer-l">
								<h2 class="h2-super">Our Mentor & Success Stories</h2>
								<p class="p-super">Learn from industry professionals and join our successful graduates</p>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="project-card">
									<div class="project-image">
										<i class="icon-user"></i>
									</div>
									<div class="p-4">
										<h5>Mayura Athukorala</h5>
										<p><strong>CEO and Production Head</strong></p>
										<p>Mathematician and Professional Level Mentor at 100 International. Mayura leads the courses with deep expertise in creative production.</p>
										<div class="d-flex justify-content-between align-items-center">
											<span class="badge bg-primary">Expert Mentor</span>
											<small class="text-muted">100 International</small>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="project-card">
									<div class="project-image">
										<i class="icon-video-camera"></i>
									</div>
									<div class="p-4">
										<h5>Anura K. - Film Colorist</h5>
										<p><strong>Success Story:</strong> DaVinci Resolve Course</p>
										<p>"Thanks to 100 Academy's DaVinci Resolve course, I landed my first job as a colorist in a film studio."</p>
										<div class="d-flex justify-content-between align-items-center">
											<span class="badge bg-success">Graduate</span>
											<small class="text-muted">2024</small>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="project-card">
									<div class="project-image">
										<i class="icon-magic-wand"></i>
									</div>
									<div class="p-4">
										<h5>Samantha P. - Motion Designer</h5>
										<p><strong>Success Story:</strong> Fusion Course</p>
										<p>"The Fusion course helped me create stunning animations that boosted my freelance business."</p>
										<div class="d-flex justify-content-between align-items-center">
											<span class="badge bg-warning">Graduate</span>
											<small class="text-muted">2024</small>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="project-card">
									<div class="project-image">
										<i class="icon-bulb"></i>
									</div>
									<div class="p-4">
										<h5>Ruwan M. - Creative Director</h5>
										<p><strong>Success Story:</strong> Creative Thinking Course</p>
										<p>"The Creative Thinking course expanded my ideas and gave me confidence to pitch unique projects at work."</p>
										<div class="d-flex justify-content-between align-items-center">
											<span class="badge bg-info">Graduate</span>
											<small class="text-muted">2024</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Academy Features Section -->
				<section class="sk__py-l dark-shade-2-bg">
					<div class="container sk__supercontainer">
						<div class="row text-center">
							<div class="col sk__heading-spacer-l">
								<h2 class="h2-super">Why Choose 100 Academy?</h2>
								<p class="p-super">Professional features that set us apart from other online academies</p>
							</div>
						</div>
						
						<div class="row mb-5">
							<div class="col-12">
								<h4 class="text-center mb-4">Learning Features</h4>
								<div class="tech-grid">
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-users"></i></div>
										<h6>Expert Instructors</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-laptop1"></i></div>
										<h6>Flexible Learning</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-tools"></i></div>
										<h6>Practical Skills</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-globe"></i></div>
										<h6>Global Community</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-award"></i></div>
										<h6>Certificates</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-infinity"></i></div>
										<h6>Lifetime Access</h6>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<h4 class="text-center mb-4">Course Tools & Software</h4>
								<div class="tech-grid">
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-video-camera"></i></div>
										<h6>DaVinci Resolve</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-magic-wand"></i></div>
										<h6>Fusion VFX</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-palette"></i></div>
										<h6>Color Grading</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-layers"></i></div>
										<h6>Compositing</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-bulb"></i></div>
										<h6>Creative Tools</h6>
									</div>
									<div class="tech-item">
										<div class="tech-icon"><i class="icon-play"></i></div>
										<h6>Motion Graphics</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Course Pricing Section -->
				<section class="sk__py-l dark-shade-3-bg">
					<div class="container sk__supercontainer">
						<div class="row text-center">
							<div class="col sk__heading-spacer-l">
								<h2 class="h2-super">Academy Course Packages</h2>
								<p class="p-super">Transparent pricing for professional video post-production education</p>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="pricing-card">
									<h4>Color Grading</h4>
									<div class="pricing-price">9,000 LKR</div>
									<p class="text-muted mb-3">~$30 USD</p>
									<ul class="list-unstyled mb-4">
										<li>✓ 4 Weeks Duration</li>
										<li>✓ Color Correction</li>
										<li>✓ Primary Wheels & Curves</li>
										<li>✓ Skin Tone Adjustments</li>
										<li>✓ LUTs & Cinematic Looks</li>
										<li>✓ Certificate Included</li>
									</ul>
									<a href="../contact/" class="btn btn-outline-light">Enroll Now</a>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="pricing-card featured">
									<h4>Fusion VFX</h4>
									<div class="pricing-price">15,000 LKR</div>
									<p class="text-muted mb-3">~$50 USD</p>
									<ul class="list-unstyled mb-4">
										<li>✓ 6 Weeks Duration</li>
										<li>✓ Node Compositing</li>
										<li>✓ Tracking & Stabilizing</li>
										<li>✓ Rotoscoping & Keying</li>
										<li>✓ Animations & OpenFX</li>
										<li>✓ Portfolio Projects</li>
									</ul>
									<a href="../contact/" class="btn btn-primary">Start Learning</a>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="pricing-card">
									<h4>Creative Thinking</h4>
									<div class="pricing-price">6,000 LKR</div>
									<p class="text-muted mb-3">~$20 USD</p>
									<ul class="list-unstyled mb-4">
										<li>✓ 3 Weeks Duration</li>
										<li>✓ Idea Generation</li>
										<li>✓ Creative Problem Solving</li>
										<li>✓ Innovation Techniques</li>
										<li>✓ Practical Exercises</li>
										<li>✓ Lifetime Access</li>
									</ul>
									<a href="../contact/" class="btn btn-outline-light">Join Course</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 text-center">
								<p class="p-large mt-4">All courses include certificates and lifetime access to materials. <a href="../contact/" class="text-primary">Contact us</a> for bundle discounts.</p>
							</div>
						</div>
					</div>
				</section>

				<!-- Certificates Section -->
				<section class="sk__py-l dark-shade-2-bg">
					<div class="container sk__supercontainer">
						<div class="row text-center">
							<div class="col sk__heading-spacer-l">
								<h2 class="h2-super">View Sample Certificates</h2>
								<p class="p-super">Professional certificates awarded upon successful course completion</p>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="project-card">
									<div class="project-image">
										<i class="icon-award"></i>
									</div>
									<div class="p-4">
										<h5>Color Grading Certificate</h5>
										<p><strong>DaVinci Resolve Certified</strong></p>
										<p>Professional certification in color correction and grading techniques using DaVinci Resolve Studio.</p>
										<div class="d-flex justify-content-between align-items-center">
											<span class="badge bg-primary">Verifiable</span>
											<a href="#" class="btn btn-sm btn-outline-light">View Sample</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="project-card">
									<div class="project-image">
										<i class="icon-award"></i>
									</div>
									<div class="p-4">
										<h5>Fusion VFX Certificate</h5>
										<p><strong>Advanced Compositing</strong></p>
										<p>Advanced certification in VFX and motion graphics using Fusion inside DaVinci Resolve.</p>
										<div class="d-flex justify-content-between align-items-center">
											<span class="badge bg-success">Verifiable</span>
											<a href="#" class="btn btn-sm btn-outline-light">View Sample</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="project-card">
									<div class="project-image">
										<i class="icon-award"></i>
									</div>
									<div class="p-4">
										<h5>Creative Thinking Certificate</h5>
										<p><strong>Innovation & Problem Solving</strong></p>
										<p>Certificate in innovative problem-solving and creative thinking methodologies.</p>
										<div class="d-flex justify-content-between align-items-center">
											<span class="badge bg-warning">Verifiable</span>
											<a href="#" class="btn btn-sm btn-outline-light">View Sample</a>
										</div>
									</div>
								</div>
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
									<span class="sk__warped-text">START LEARNING</span>
								</div>
								<h3><strong>ENROLL IN 100 ACADEMY TODAY</strong></h3>
								<a class="btn btn-lg btn-outline-light sk__warped-button" href="../contact/" role="button">ENROLL NOW -></a>
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
								<img src="../assets/images/Companyimages/logo.png" alt="Website logo for the footer.">
							</div>
							<div class="col-12 col-sm-6 top-footer-tagline">
								<h5 class="h5-elegant">EXCELLENCE IN <strong>EDUCATION</strong></h5>
							</div>
						</div>

						<span class="divider sk__subtle-divider"></span>

						<div class="row footer-main text-center text-sm-start">
							<div class="col-md-12 col-lg-6 footer-main-large-col mb-4 mb-lg-0">
								<div class="fancy-gradient-text-box">
									<h3 class="h3-elegant sk__gradient-fancy-text">Transform your creative skills.</h3>
								</div>	
								<p class="p-v2 mw-440">Professional video post-production and creative thinking courses that unlock your creative potential and drive career growth.</p>
							</div>
							<div class="col-md-6 col-lg-3 footer-main-small-col mb-4 mb-md-0">
								<h5 class="h5-elegant">Courses</h5>
								<ul class="footer-list">
									<li><a href="../contact/">Color Grading</a></li>
									<li><a href="../contact/">Fusion VFX</a></li>
									<li><a href="../contact/">Creative Thinking</a></li>
									<li><a href="../contact/">View Certificates</a></li>
								</ul>
							</div>
							<div class="col-md-6 col-lg-3 footer-main-small-col">
								<h5 class="h5-elegant">Support</h5>
								<ul class="footer-list">
									<li><a href="../contact/">Enroll Now</a></li>
									<li><a href="../contact/">Student Support</a></li>
									<li><a href="../about/">About Academy</a></li>
									<li><a href="../team/">Our Mentors</a></li>
								</ul>
							</div>
						</div>

						<span class="divider sk__subtle-divider"></span>

						<div class="row footer-bottom">
							<div class="col-12 col-sm-6 footer-bottom-left">
								<p class="p-small">&copy; 2025 100 Academy by 100 International. All rights reserved.</p>
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
	<script src="../assets/js/theme-preview-only.js"></script>

	<!-- Custom Navigation Scripts -->
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