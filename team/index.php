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
	<meta property="og:image" content="../assets/images/Companyimages/logo.png" />

	<meta property="og:site_name" content="SkilltechWebDesign.com" />

	<title>100 International | Our Team</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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

	<!-- Enhanced Navigation Styles + Team Page Styles -->
	<style>
		/* Compact Header Styles */
		.sk__article-1-header {
			background-color: #000000;
		}

		.super-heading {
			background: linear-gradient(135deg, #ff8f2a, #FFEB3B);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			background-clip: text;
		}

		/* Responsive Header */
		@media (max-width: 768px) {
			.sk__article-1-header {
				min-height: 40vh !important;
				padding: 2rem 0 !important;
			}
			
			.super-heading {
				font-size: 2rem !important;
			}
		}

		/* Dark Black Body Background */
		body {
			background-color: #000000 !important;
		}

		.dark-shade-1-bg {
			background-color: #000000 !important;
		}

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
			border: none !important;
			padding: 0.5rem !important;
			background: rgba(255, 143, 42, 0.1) !important;
			border-radius: 8px !important;
		}

		.navbar-toggler:focus {
			box-shadow: 0 0 0 0.25rem rgba(255, 143, 42, 0.25) !important;
		}

		.navbar-toggler-icon {
			background-image: none !important;
			width: auto !important;
			height: auto !important;
		}

		.navbar-collapse {
			background: linear-gradient(135deg, rgba(0, 0, 0, 0.95), rgba(26, 26, 46, 0.95)) !important;
			border-radius: 15px !important;
			margin-top: 0.5rem !important;
			box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5) !important;
			backdrop-filter: blur(10px) !important;
			border: 1px solid rgba(255, 143, 42, 0.2) !important;
		}

		.navbar-nav {
			padding: 1.5rem !important;
		}

		.navbar-nav .nav-link {
			color: rgba(255, 255, 255, 0.9) !important;
			padding: 0.75rem 1.25rem !important;
			margin: 0.25rem 0 !important;
			border-radius: 10px !important;
			transition: all 0.3s ease !important;
			position: relative !important;
			font-weight: 500 !important;
			border-left: 3px solid transparent !important;
		}

		.navbar-nav .nav-link:hover {
			background: rgba(255, 143, 42, 0.15) !important;
			color: #ff8f2a !important;
			transform: translateX(10px) !important;
			border-left-color: #ff8f2a !important;
			box-shadow: 0 5px 15px rgba(255, 143, 42, 0.2) !important;
		}

		.navbar-nav .nav-link.active {
			background: linear-gradient(135deg, rgba(255, 143, 42, 0.2), rgba(255, 235, 59, 0.1)) !important;
			color: #ff8f2a !important;
			font-weight: 600 !important;
			border-left-color: #ff8f2a !important;
			box-shadow: 0 5px 20px rgba(255, 143, 42, 0.3) !important;
		}

		.navbar-nav .nav-link::before {
			content: '';
			position: absolute;
			right: 1rem;
			top: 50%;
			transform: translateY(-50%);
			width: 0;
			height: 2px;
			background: linear-gradient(90deg, #ff8f2a, #FFEB3B);
			transition: width 0.3s ease;
		}

		.navbar-nav .nav-link:hover::before,
		.navbar-nav .nav-link.active::before {
			width: 20px;
		}

		@media (max-width: 991px) {
			.custom-header.d-none.d-md-none.d-lg-block {
				display: none !important;
			}
		}

		.navbar-nav .nav-item {
			opacity: 0;
			transform: translateY(20px);
			animation: slideInUp 0.4s ease forwards;
		}

		.navbar-nav .nav-item:nth-child(1) { animation-delay: 0.1s; }
		.navbar-nav .nav-item:nth-child(2) { animation-delay: 0.2s; }
		.navbar-nav .nav-item:nth-child(3) { animation-delay: 0.3s; }
		.navbar-nav .nav-item:nth-child(4) { animation-delay: 0.4s; }
		.navbar-nav .nav-item:nth-child(5) { animation-delay: 0.5s; }
		.navbar-nav .nav-item:nth-child(6) { animation-delay: 0.6s; }

		@keyframes slideInUp {
			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		.navbar-nav .nav-link.active {
			animation: pulse 2s infinite;
		}

		@keyframes pulse {
			0%, 100% {
				box-shadow: 0 5px 20px rgba(255, 143, 42, 0.3) !important;
			}
			50% {
				box-shadow: 0 5px 25px rgba(255, 143, 42, 0.5) !important;
			}
		}

		/* Modern Team Card Styles - Dark Black Theme */
		.team-section {
			padding: 6rem 0 5rem 0;
			background: #000000;
		}

		.team-card {
			background: linear-gradient(145deg, #111111, #0a0a0a);
			border: 1px solid rgba(255, 143, 42, 0.2);
			border-radius: 20px;
			padding: 2rem;
			transition: all 0.4s ease;
			position: relative;
			overflow: hidden;
			height: 100%;
			box-shadow: 
				0 10px 30px rgba(0, 0, 0, 0.5),
				inset 0 1px 0 rgba(255, 255, 255, 0.1);
		}

		.team-card::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: linear-gradient(145deg, transparent, rgba(255, 143, 42, 0.08));
			opacity: 0;
			transition: opacity 0.4s ease;
			z-index: 1;
		}

		.team-card:hover::before {
			opacity: 1;
		}

		.team-card:hover {
			transform: translateY(-10px) scale(1.02);
			border-color: rgba(255, 143, 42, 0.4);
			background: linear-gradient(145deg, #1a1a1a, #0f0f0f);
			box-shadow: 
				0 20px 50px rgba(0, 0, 0, 0.8),
				0 0 40px rgba(255, 143, 42, 0.15),
				inset 0 1px 0 rgba(255, 255, 255, 0.15);
		}

		.team-member-image {
			width: 200px;
			height: 250px;
			object-fit: cover;
			border-radius: 15px;
			border: 3px solid rgba(255, 143, 42, 0.3);
			transition: all 0.4s ease;
			position: relative;
			z-index: 2;
			margin: 0 auto 1.5rem auto;
			display: block;
			box-shadow: 
				0 10px 25px rgba(0, 0, 0, 0.6),
				0 0 0 1px rgba(255, 143, 42, 0.1);
		}

		.team-card:hover .team-member-image {
			border-color: rgba(255, 143, 42, 0.6);
			transform: scale(1.05);
			box-shadow: 
				0 15px 35px rgba(0, 0, 0, 0.8),
				0 0 25px rgba(255, 143, 42, 0.2),
				0 0 0 1px rgba(255, 143, 42, 0.2);
		}

		.team-member-name {
			font-size: 1.5rem;
			font-weight: 700;
			background: linear-gradient(135deg, #ff8f2a, #FFEB3B);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			background-clip: text;
			margin-bottom: 0.5rem;
			position: relative;
			z-index: 2;
		}

		.team-member-role {
			color: rgba(255, 255, 255, 0.8);
			font-size: 1rem;
			font-weight: 500;
			margin-bottom: 1rem;
			line-height: 1.4;
			position: relative;
			z-index: 2;
		}

		.team-member-description {
			color: rgba(255, 255, 255, 0.7);
			font-size: 0.9rem;
			line-height: 1.6;
			position: relative;
			z-index: 2;
		}

		.section-title {
			color: #fff;
			font-size: 3rem;
			font-weight: 700;
			text-align: center;
			margin-bottom: 1rem;
			background: linear-gradient(135deg, #ff8f2a, #FFEB3B);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			background-clip: text;
		}

		.section-subtitle {
			color: rgba(255, 255, 255, 0.7);
			font-size: 1.2rem;
			text-align: center;
			margin-bottom: 3rem;
			max-width: 600px;
			margin-left: auto;
			margin-right: auto;
		}

		.executive-section {
			margin-bottom: 4rem;
		}

		.contributors-section {
			margin-bottom: 4rem;
		}

		.section-header {
			text-align: center;
			margin-bottom: 3rem;
		}

		.section-header h3 {
			font-size: 2.2rem;
			font-weight: 600;
			color: #fff;
			margin-bottom: 0.5rem;
		}

		.section-divider {
			width: 80px;
			height: 3px;
			background: linear-gradient(90deg, #ff8f2a, #FFEB3B);
			margin: 0 auto 1rem;
			border-radius: 2px;
			box-shadow: 0 0 10px rgba(255, 143, 42, 0.3);
		}

		/* Mission Statement Styles - Dark Black Theme */
		.mission-section {
			background: linear-gradient(145deg, #0a0a0a, #000000);
			padding: 4rem 0;
			margin-top: 3rem;
			border-radius: 20px;
			border: 1px solid rgba(255, 143, 42, 0.2);
			box-shadow: 
				0 10px 30px rgba(0, 0, 0, 0.8),
				inset 0 1px 0 rgba(255, 255, 255, 0.05);
		}

		.mission-text {
			font-size: 1.1rem;
			line-height: 1.8;
			color: rgba(255, 255, 255, 0.9);
			text-align: center;
			max-width: 900px;
			margin: 0 auto;
		}

		.mission-quote {
			font-size: 1.3rem;
			font-weight: 600;
			color: #ff8f2a;
			font-style: italic;
			text-align: center;
			margin-top: 2rem;
			max-width: 800px;
			margin-left: auto;
			margin-right: auto;
		}

		/* Responsive Design */
		@media (max-width: 768px) {
			.custom-nav-links {
				padding: 1rem;
				gap: 1rem;
			}

			.section-title {
				font-size: 2.2rem;
			}

			.section-subtitle {
				font-size: 1rem;
			}

			.team-card {
				padding: 1.5rem;
				margin-bottom: 2rem;
			}

			.team-member-image {
				width: 180px;
				height: 220px;
			}

			.team-member-name {
				font-size: 1.3rem;
			}

			.team-member-role {
				font-size: 0.9rem;
			}

			.mission-text {
				font-size: 1rem;
			}

			.mission-quote {
				font-size: 1.1rem;
			}
		}

		@media (max-width: 576px) {
			.team-section {
				padding: 3rem 0;
			}

			.section-title {
				font-size: 1.8rem;
			}

			.team-member-image {
				width: 150px;
				height: 190px;
			}

			.team-card {
				padding: 1rem;
			}
		}
	</style>

</head>

<body class="sk__elements-hero-slide-show-page dark-shade-1-bg">

	<main id="primary" class="site-main">

		<!-- Back to top button -->
		<div class="sk__back-to-top-wrap">
			<a class="sk__back-to-top" href="#smooth-content"><span class="sk__back-to-top"></span></a>
		</div>

		<!-- Navigation Menu -->
		<div class="sk__mobile-menu-bar headerBackkGround overflow-hidden customAnimation" style="z-index: 1;"></div>

		<!-- Dynamically controlled with JS! -->
		<a class="sk__mobile-main-logo" href="../"><img alt="Website logo." src="../assets/images/Companyimages/logo.png"></a>
		
		<!-- Enhanced Desktop Navigation Bar -->
		<div class="custom-header d-none d-md-none d-lg-block" style="z-index:3;">
			<div class="custom-nav-links">
				<a class="custom-link text-hover-background-swipe" href="../">Home</a>
				<a class="custom-link text-hover-background-swipe" href="../web-development/">Web/App/Software</a>
				<a class="custom-link text-hover-background-swipe" href="../academy/">Academy</a>
				<a class="custom-link text-hover-background-swipe" href="../about/">About</a>
				<a class="custom-link text-hover-background-swipe gradiendColorAdd" href="../team/">Team</a>
				<a class="custom-link text-hover-background-swipe" href="../contact/">Contact</a>
			</div>
			<div class="mirror-container"></div>
		</div>

		<!-- Enhanced Mobile Navigation -->
		<nav class="navbar navbar-expand-lg bg-body-tertiary d-lg-none d-md-block d-block custom-header">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"></a>
				<button class="navbar-toggler text-white" style="z-index: 100;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fs-2">&equiv;</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="../">
								<i class="icon-home" style="margin-right: 8px;"></i>Home
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../web-development/">
								<i class="icon-code" style="margin-right: 8px;"></i>Web/App/Software
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../academy/">
								<i class="icon-university" style="margin-right: 8px;"></i>Academy
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../about/">
								<i class="icon-info-circle" style="margin-right: 8px;"></i>About
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="../team/">
								<i class="icon-users" style="margin-right: 8px;"></i>Team
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../contact/">
								<i class="icon-envelope" style="margin-right: 8px;"></i>Contact
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div id="smooth-wrapper" class="pushable-content">
			<div id="smooth-content">

				<!-- Team Section -->
				<section class="team-section" id="team-section" style="padding-top: 8rem;">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h2 class="section-title">Leadership Excellence</h2>
								<p class="section-subtitle">Expert professionals driving global innovation and growth</p>
							</div>
						</div>

						<!-- Executive Directors Section -->
						<div class="executive-section">
							<div class="section-header">
								<h3>Executive Directors</h3>
								<div class="section-divider"></div>
							</div>

							<div class="row g-4">
								<!-- CEO -->
								<div class="col-lg-4 col-md-6">
									<div class="team-card">
										<img class="team-member-image" src="../assets/images/Companyimages/team/Mayura_CEO.png" alt="Mayura Athukorala">
										<h4 class="team-member-name">Mayura Athukorala</h4>
										<p class="team-member-role">Chief Executive Officer (CEO)<br>Co-Director Of Content Development</p>
										<p class="team-member-description">Visionary leader driving our mission to create platforms that help businesses flourish globally. Focused on strategic growth and innovation.</p>
									</div>
								</div>

								<!-- CTO - Moved to second position -->
								<div class="col-lg-4 col-md-6">
									<div class="team-card">
										<img class="team-member-image" src="../assets/images/Companyimages/team/chamathka.jpg" alt="Chamathka Prasad">
										<h4 class="team-member-name">Chamathka Prasad</h4>
										<p class="team-member-role">Chief Technical Officer (CTO)</p>
										<p class="team-member-description">Leading our technical innovation and development strategies. Expert in cutting-edge technologies and system architecture.</p>
									</div>
								</div>

								<!-- CCO -->
								<div class="col-lg-4 col-md-6">
									<div class="team-card">
										<img class="team-member-image" src="../assets/images/Companyimages/team/Eranda_Chamara.jpg" alt="Eranda Chamara">
										<h4 class="team-member-name">Eranda Chamara</h4>
										<p class="team-member-role">Chief Creative Officer (CCO)<br>Co-Director Of Content Development</p>
										<p class="team-member-description">Creative mastermind behind our innovative designs and user experiences. Specializes in brand development and creative strategy.</p>
									</div>
								</div>

								<!-- COO -->
								<div class="col-lg-4 col-md-6 offset-lg-2">
									<div class="team-card">
										<img class="team-member-image" src="../assets/images/Companyimages/team/Damian_COO.png" alt="Damian Fernando">
										<h4 class="team-member-name">Damian Fernando</h4>
										<p class="team-member-role">Chief Operating Officer (COO)<br>Co-Director Of Content Development</p>
										<p class="team-member-description">Operational excellence leader ensuring smooth business processes and efficient project delivery across all departments.</p>
									</div>
								</div>
							</div>
						</div>

						<!-- Non-Executive Contributors Section -->
						<div class="contributors-section">
							<div class="section-header">
								<h3>Non-Executive Contributors</h3>
								<div class="section-divider"></div>
							</div>

							<div class="row g-4 justify-content-center">
								<!-- Financial Analytics Officer -->
								<div class="col-lg-4 col-md-6">
									<div class="team-card">
										<img class="team-member-image" src="../assets/images/Companyimages/team/Chiran_FA.png" alt="Chiran Gunathilaka">
										<h4 class="team-member-name">Chiran Gunathilaka</h4>
										<p class="team-member-role">Chief Financial Analytics Officer (FA)</p>
										<p class="team-member-description">Data-driven financial expert analyzing market trends and providing strategic insights for sustainable growth and profitability.</p>
									</div>
								</div>

								<!-- HR Director -->
								<div class="col-lg-4 col-md-6">
									<div class="team-card">
										<img class="team-member-image" src="../assets/images/Companyimages/team/Kaveesh_HR.png" alt="Kaveesh">
										<h4 class="team-member-name">Kaveesh</h4>
										<p class="team-member-role">Director of Human Resources (HR)</p>
										<p class="team-member-description">People-focused leader building strong teams and fostering a positive work culture that attracts and retains top talent.</p>
									</div>
								</div>
							</div>
						</div>

						<!-- Mission Statement -->
						<div class="mission-section">
							<div class="row">
								<div class="col-12">
									<p class="mission-text">100 International is a pioneering remote-based company with a mission to empower individuals and businesses to thrive in the global marketplace. Our core goal is to create platforms that help platforms flourish, offering robust support to new and existing ventures. We aim to inspire entrepreneurial growth by teaching individuals everything they need to start their own business platform.</p>
									<p class="mission-quote">"To achieve this, we provide internships and diverse courses tailored for global accessibility. By combining education, mentorship, and platform development, we are shaping a world where innovation knows no boundaries."</p>
								</div>
							</div>
						</div>

					</div>
				</section>

				<!-- Footer -->
				<footer class="sk__footer-simple dark-shade-2-bg position-relative">
					<div class="footer-background-container sk__absolute">
						<div class="sk__gradient-background-tint footer-background sk__absolute"></div>
					</div>

					<div class="container sk__supercontainer position-relative">
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
								<a class="footer-bottom-right-links" href="../contact/" target="_blank">Contact</a>
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
	<script src="../assets/js/theme.js"></script>
	<script src="../assets/custom/js/script.js"></script>

	<script>
		document.addEventListener('DOMContentLoaded', function() {
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

			// Custom link hover effects
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

			// Team card animation on scroll
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

			document.querySelectorAll('.team-card').forEach(card => {
				card.style.opacity = '0';
				card.style.transform = 'translateY(30px)';
				card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
				observer.observe(card);
			});

			// Mobile menu animation
			const navbarToggler = document.querySelector('.navbar-toggler');
			const navbarCollapse = document.querySelector('.navbar-collapse');
			
			if (navbarToggler && navbarCollapse) {
				navbarToggler.addEventListener('click', function() {
					setTimeout(() => {
						if (navbarCollapse.classList.contains('show')) {
							const navItems = navbarCollapse.querySelectorAll('.nav-item');
							navItems.forEach((item, index) => {
								item.style.animationDelay = `${0.1 * (index + 1)}s`;
							});
						}
					}, 50);
				});
			}

			// Add ripple effect to mobile nav links
			document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
				link.addEventListener('click', function(e) {
					const ripple = document.createElement('span');
					const rect = this.getBoundingClientRect();
					const size = Math.max(rect.width, rect.height);
					const x = e.clientX - rect.left - size / 2;
					const y = e.clientY - rect.top - size / 2;
					
					ripple.style.width = ripple.style.height = size + 'px';
					ripple.style.left = x + 'px';
					ripple.style.top = y + 'px';
					ripple.style.position = 'absolute';
					ripple.style.borderRadius = '50%';
					ripple.style.background = 'rgba(255, 143, 42, 0.3)';
					ripple.style.transform = 'scale(0)';
					ripple.style.animation = 'ripple-animation 0.6s linear';
					ripple.style.pointerEvents = 'none';
					
					this.style.position = 'relative';
					this.style.overflow = 'hidden';
					this.appendChild(ripple);
					
					setTimeout(() => {
						ripple.remove();
					}, 600);
				});
			});
		});

		// Ripple animation keyframes
		const style = document.createElement('style');
		style.textContent = `
			@keyframes ripple-animation {
				to {
					transform: scale(4);
					opacity: 0;
				}
			}
		`;
		document.head.appendChild(style);
	</script>

</body>

</html>