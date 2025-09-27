<!DOCTYPE html>
<html lang="en-US">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="description" content="100 International - About Our Growing Creative Company">
	<meta name="author" content="100 International">
	<meta name="keywords" content="100 international, creative company, video editing, web development, academy, growing business" />

	<meta property="og:title" content="100 International - About Us" />
	<meta property="og:description" content="We're a growing creative company specializing in video editing, web development, and digital education. Discover our journey and vision." />
	<meta property="og:image" content="../assets/images/Companyimages/logo.png" />

	<title>100 International | About Us</title>

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

	<!-- jQuery -->
	<script src="../assets/vendor/jquery/jquery.min.js"></script>

	<!-- Slick (carousel) -->
	<link href="../assets/vendor/slick/1.8.1/slick.css" rel="stylesheet">
	<link href="../assets/vendor/slick/1.8.1/slick-theme-skilltech.css" rel="stylesheet">

	<link rel="stylesheet" href="../assets/custom/css/style.css" />
	<link rel="stylesheet" href="../indexStyle.css" />

	<!-- About Page Styles -->
	<style>
		/* Navigation Styles (keeping original) */
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

		/* About Page Content Styles */
		.about-section {
			background: #000;
			padding: 60px 0;
			position: relative;
			overflow: hidden;
		}

		.about-section > .container {
			position: relative;
			z-index: 2;
		}

		/* Fixed Video Background for All Sections */
		.fixed-video-background {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100vh;
			z-index: -2;
			overflow: hidden;
		}

		.fixed-video-background video {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		.video-overlay-fixed {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100vh;
			background: linear-gradient(135deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6));
			z-index: -1;
			opacity: 0;
			transition: opacity 0.5s ease;
		}

		.video-overlay-fixed.show {
			opacity: 1;
		}

		.video-overlay-fixed.hide-for-story {
			opacity: 0 !important;
		}

		/* Hero Video Section */
		.hero-video-section {
			height: 100vh;
			position: relative;
			overflow: hidden;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.video-background {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 1;
		}

		.hero-video {
			width: 100%;
			height: 100%;
			object-fit: cover;
			position: absolute;
			top: 0;
			left: 0;
		}

		.video-overlay {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: linear-gradient(135deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5));
			z-index: 2;
		}

		.hero-content {
			position: relative;
			z-index: 3;
			text-align: center;
			width: 100%;
		}

		.hero-text-container {
			background: rgba(0, 0, 0, 0.3);
			backdrop-filter: blur(15px);
			border: 1px solid rgba(255, 235, 59, 0.2);
			border-radius: 20px;
			padding: 3rem 2rem;
			margin-bottom: 2rem;
		}

		.hero-main-title {
			font-size: 4rem;
			font-weight: 900;
			color: #fff;
			margin-bottom: 1.5rem;
			text-transform: uppercase;
			letter-spacing: 2px;
			text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
		}

		.hero-subtitle {
			font-size: 1.3rem;
			color: rgba(255, 255, 255, 0.9);
			margin-bottom: 2rem;
			line-height: 1.6;
			max-width: 800px;
			margin-left: auto;
			margin-right: auto;
		}

		.hero-icon {
			width: 80px;
			height: 80px;
			background: linear-gradient(135deg, rgba(255, 235, 59, 0.3), rgba(255, 143, 42, 0.2));
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			margin: 0 auto;
			animation: pulse-icon 3s ease-in-out infinite;
		}

		.hero-icon i {
			font-size: 2.5rem;
			color: #FFEB3B;
		}

		@keyframes pulse-icon {
			0%, 100% { transform: scale(1); }
			50% { transform: scale(1.1); }
		}

		/* Stats Section (Normal Layout) */
		.stats-section {
			padding: 60px 0;
			background: #000;
			position: relative;
			z-index: 4;
		}

		.stats-grid-hero {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
			gap: 1.5rem;
			max-width: 1000px;
			margin: 0 auto;
			padding: 0 20px;
		}

		.stat-card-hero {
			background: rgba(0, 0, 0, 0.6);
			backdrop-filter: blur(15px);
			border: 1px solid rgba(255, 235, 59, 0.3);
			border-radius: 15px;
			padding: 1.5rem 1rem;
			text-align: center;
			transition: all 0.3s ease;
		}

		.stat-card-hero:hover {
			transform: translateY(-5px);
			box-shadow: 0 10px 30px rgba(255, 235, 59, 0.2);
			border-color: rgba(255, 235, 59, 0.5);
		}

		.stat-number-hero {
			font-size: 2.5rem;
			font-weight: 800;
			color: #FFEB3B;
			display: block;
			margin-bottom: 0.5rem;
		}

		.stat-label-hero {
			color: rgba(255, 255, 255, 0.8);
			font-size: 0.9rem;
			font-weight: 500;
		}

		/* Scroll Indicator */
		.scroll-indicator {
			position: absolute;
			bottom: 20px;
			left: 50%;
			transform: translateX(-50%);
			z-index: 4;
			animation: bounce 2s infinite;
		}

		.scroll-arrow {
			width: 30px;
			height: 30px;
			border-right: 2px solid #FFEB3B;
			border-bottom: 2px solid #FFEB3B;
			transform: rotate(45deg);
		}

		@keyframes bounce {
			0%, 20%, 50%, 80%, 100% {
				transform: translateX(-50%) translateY(0);
			}
			40% {
				transform: translateX(-50%) translateY(-10px);
			}
			60% {
				transform: translateX(-50%) translateY(-5px);
			}
		}

		/* Content Sections with Enhanced Background */
		.about-section:nth-child(even) {
			background: rgba(0, 0, 0, 0.8);
		}

		.about-section:nth-child(odd) {
			background: rgba(0, 0, 0, 0.6);
		}

		.about-hero {
			background: linear-gradient(135deg, rgba(255, 235, 59, 0.08) 0%, rgba(255, 143, 42, 0.05) 100%);
			border: 1px solid rgba(255, 235, 59, 0.15);
			border-radius: 15px;
			padding: 2.5rem;
			margin-bottom: 3rem;
			position: relative;
			overflow: hidden;
		}

		.about-hero::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			height: 2px;
			background: linear-gradient(90deg, #FFEB3B, #ff8f2a, #FFEB3B);
		}

		.content-card {
			background: linear-gradient(135deg, rgba(255, 235, 59, 0.08) 0%, rgba(255, 143, 42, 0.04) 100%);
			border: 1px solid rgba(255, 235, 59, 0.15);
			border-radius: 12px;
			padding: 2rem;
			height: 100%;
			transition: all 0.3s ease;
			margin-bottom: 2rem;
			backdrop-filter: blur(10px);
		}

		.content-card:hover {
			transform: translateY(-5px);
			border-color: rgba(255, 235, 59, 0.3);
			box-shadow: 0 10px 25px rgba(255, 235, 59, 0.15);
		}

		.content-icon {
			width: 60px;
			height: 60px;
			background: linear-gradient(135deg, rgba(255, 235, 59, 0.2), rgba(255, 143, 42, 0.1));
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			margin: 0 auto 1rem;
			transition: all 0.3s ease;
		}

		.content-icon i {
			font-size: 1.8rem;
			color: #FFEB3B;
		}

		.content-card:hover .content-icon {
			transform: scale(1.1);
		}

		.section-title {
			font-size: 2rem;
			font-weight: 700;
			color: #fff;
			margin-bottom: 1rem;
			text-align: center;
			text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
		}

		.section-subtitle {
			color: rgba(255, 255, 255, 0.8);
			font-size: 1rem;
			margin-bottom: 2rem;
			text-align: center;
			text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);
		}

		.highlight-text {
			color: #FFEB3B;
			font-weight: 600;
		}

		.stats-row {
			display: flex;
			justify-content: space-around;
			flex-wrap: wrap;
			gap: 2rem;
			margin: 3rem 0;
			padding: 2rem;
			background: rgba(0, 0, 0, 0.6);
			border-radius: 15px;
			border: 1px solid rgba(255, 235, 59, 0.2);
			backdrop-filter: blur(10px);
		}

		.stat-item {
			text-align: center;
			flex: 1;
			min-width: 120px;
		}

		.stat-number {
			font-size: 2.5rem;
			font-weight: 800;
			color: #FFEB3B;
			display: block;
		}

		.stat-label {
			color: rgba(255, 255, 255, 0.8);
			font-size: 0.9rem;
			margin-top: 0.5rem;
		}

		.simple-card {
			background: rgba(0, 0, 0, 0.6);
			border: 1px solid rgba(255, 235, 59, 0.15);
			border-left: 4px solid #FFEB3B;
			border-radius: 8px;
			padding: 1.5rem;
			margin: 1rem 0;
			backdrop-filter: blur(10px);
		}

		.team-member {
			background: linear-gradient(135deg, rgba(255, 235, 59, 0.08) 0%, rgba(255, 143, 42, 0.04) 100%);
			border: 1px solid rgba(255, 235, 59, 0.15);
			border-radius: 12px;
			padding: 1.5rem;
			text-align: center;
			transition: all 0.3s ease;
			backdrop-filter: blur(10px);
		}

		.team-member:hover {
			transform: translateY(-5px);
			border-color: rgba(255, 235, 59, 0.3);
		}

		.member-avatar {
			width: 80px;
			height: 80px;
			background: linear-gradient(135deg, rgba(255, 235, 59, 0.2), rgba(255, 143, 42, 0.1));
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			margin: 0 auto 1rem;
			font-size: 1.8rem;
			color: #FFEB3B;
		}

		/* Enhanced text visibility over video */
		.text-white {
			color: #fff !important;
			text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
		}

		.text-white-50 {
			color: rgba(255, 255, 255, 0.8) !important;
			text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);
		}

		/* Mobile video adjustments */
		@media (max-width: 768px) {
			.about-section {
				padding: 40px 0;
			}
			
			.section-title {
				font-size: 1.5rem;
			}
			
			.stat-number {
				font-size: 2rem;
			}
		}

		/* Video Showcase Section */
		.video-showcase-section {
			padding: 100px 0;
			background: transparent;
			position: relative;
			z-index: 2;
			min-height: 80vh;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.video-showcase-content {
			text-align: center;
			background: rgba(0, 0, 0, 0.3);
			backdrop-filter: blur(15px);
			border: 1px solid rgba(255, 235, 59, 0.2);
			border-radius: 20px;
			padding: 3rem 2rem;
			transition: all 0.3s ease;
		}

		.video-showcase-content:hover {
			background: rgba(0, 0, 0, 0.2);
			border-color: rgba(255, 235, 59, 0.4);
		}

		.showcase-title {
			font-size: 3rem;
			font-weight: 700;
			color: #fff;
			margin-bottom: 1rem;
			text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
		}

		.showcase-subtitle {
			font-size: 1.2rem;
			color: rgba(255, 255, 255, 0.9);
			text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);
			margin: 0;
		}

		@media (max-width: 768px) {
			.video-showcase-section {
				padding: 80px 0;
				min-height: 60vh;
			}
			
			.showcase-title {
				font-size: 2rem;
			}
			
			.video-showcase-content {
				padding: 2rem 1.5rem;
			}
		}

		/* Responsive Design */
		@media (max-width: 768px) {
			.hero-video-section {
				height: 100vh;
				min-height: auto;
			}
			
			.hero-main-title {
				font-size: 2rem;
				line-height: 1.2;
				margin-bottom: 1rem;
			}
			
			.hero-subtitle {
				font-size: 1rem;
				line-height: 1.4;
				margin-bottom: 1.5rem;
			}
			
			.hero-text-container {
				padding: 1.5rem 1rem;
			}
			
			.hero-icon {
				width: 60px;
				height: 60px;
			}
			
			.hero-icon i {
				font-size: 1.8rem;
			}
			
			/* Stats Section Mobile */
			.stats-section {
				padding: 40px 0;
			}
			
			.stats-grid-hero {
				grid-template-columns: 1fr 1fr;
				gap: 1rem;
				padding: 0 1rem;
			}
			
			.stat-card-hero {
				padding: 1.2rem 0.8rem;
			}
			
			.stat-number-hero {
				font-size: 1.8rem;
				margin-bottom: 0.5rem;
			}
			
			.stat-label-hero {
				font-size: 0.85rem;
				line-height: 1.3;
			}
			
			.about-section {
				padding: 40px 0;
			}
			
			.section-title {
				font-size: 1.5rem;
			}
			
			.stat-number {
				font-size: 2rem;
			}
		}

		@media (max-width: 480px) {
			.hero-main-title {
				font-size: 1.7rem;
			}
			
			.hero-text-container {
				padding: 1.2rem 0.8rem;
			}
			
			.stats-section {
				padding: 30px 0;
			}
			
			.stats-grid-hero {
				gap: 0.8rem;
				padding: 0 0.5rem;
			}
			
			.stat-card-hero {
				padding: 1rem 0.6rem;
			}
			
			.stat-number-hero {
				font-size: 1.6rem;
			}
			
			.stat-label-hero {
				font-size: 0.8rem;
			}
		}

		/* Animations */
		.fade-in {
			opacity: 0;
			transform: translateY(20px);
			animation: fadeIn 0.6s ease-out forwards;
		}

		@keyframes fadeIn {
			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		@keyframes ripple-animation {
			to {
				transform: scale(4);
				opacity: 0;
			}
		}

		@media (max-width: 768px) {
			.custom-nav-links {
				padding: 1rem;
				gap: 1rem;
			}
		}
	</style>

</head>

<body class="sk__homepage sk__home-animated-headline dark-shade-1-bg">

	<main id="primary" class="site-main">

		<!-- Back to top button -->
		<div class="sk__back-to-top-wrap">
			<a class="sk__back-to-top" href="#smooth-content"><span class="sk__back-to-top"></span></a>
		</div>

		<!-- Navigation Menu -->
		<div class="sk__mobile-menu-bar headerBackkGround overflow-hidden customAnimation" style="z-index: 1;"></div>

		<!-- Dynamically controlled with JS! -->
		<a class="sk__mobile-main-logo" href="../"><img alt="Website logo." src="../assets/images/Companyimages/logo.png"></a>
		
		<!-- Enhanced Desktop Navigation Bar (Large Screens) -->
		<div class="custom-header d-none d-md-none d-lg-block" style="z-index:3;">
			<div class="custom-nav-links">
				<a class="custom-link text-hover-background-swipe" href="../">Home</a>
				<!-- <a class="custom-link text-hover-background-swipe" href="../course/">Courses</a> -->
				<a class="custom-link text-hover-background-swipe" href="../web-development/">Web/App/Software</a>
				<a class="custom-link text-hover-background-swipe" href="../academy/">Academy</a>
				<a class="custom-link text-hover-background-swipe gradiendColorAdd" href="../about/">About</a>
				<!-- <a class="custom-link text-hover-background-swipe" href="../companies/">Companies</a> -->
				<a class="custom-link text-hover-background-swipe" href="../team/">Team</a>
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
						<!-- <li class="nav-item">
							<a class="nav-link" href="../course/">
								<i class="icon-graduation-cap" style="margin-right: 8px;"></i>Courses
							</a>
						</li> -->
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
							<a class="nav-link active" href="../about/">
								<i class="icon-info-circle" style="margin-right: 8px;"></i>About
							</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link" href="../companies/">
								<i class="icon-building" style="margin-right: 8px;"></i>Companies
							</a>
						</li> -->
						<li class="nav-item">
							<a class="nav-link" href="../team/">
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

				<!-- Fixed Video Background for All Sections -->
				<div class="fixed-video-background">
					<video autoplay muted loop playsinline class="fixed-background-video">
						<source src="../assets/video/company/100.mp4" type="video/mp4">
						Your browser does not support the video tag.
					</video>
				</div>
				
				<!-- Fixed Video Overlay -->
				<div class="video-overlay-fixed"></div>

				<!-- Enhanced Hero Section with Video Background -->
				<section class="hero-video-section">
					<div class="video-background">
						<video autoplay muted loop playsinline class="hero-video">
							<source src="../assets/video/company/100.mp4" type="video/mp4">
							Your browser does not support the video tag.
						</video>
						<div class="video-overlay"></div>
					</div>
					
					<div class="hero-content">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-10 text-center">
									<div class="hero-text-container">
										<h1 class="hero-main-title">ABOUT <span class="highlight-text">100 INTERNATIONAL</span></h1>
										<p class="hero-subtitle">A growing creative company dedicated to bringing innovative ideas to life through video editing, web development, and digital education.</p>
										<div class="hero-icon">
											<i class="icon-lightbulb-o"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Scroll Indicator -->
					<div class="scroll-indicator">
						<div class="scroll-arrow"></div>
					</div>
				</section>

				<!-- Stats Section (Normal Layout) -->
				<section class="stats-section">
					<div class="container">
						<div class="stats-grid-hero">
							<div class="stat-card-hero">
								<span class="stat-number-hero">50+</span>
								<span class="stat-label-hero">Projects Completed</span>
							</div>
							<div class="stat-card-hero">
								<span class="stat-number-hero">25+</span>
								<span class="stat-label-hero">Happy Clients</span>
							</div>
							<div class="stat-card-hero">
								<span class="stat-number-hero">3</span>
								<span class="stat-label-hero">Core Services</span>
							</div>
							<div class="stat-card-hero">
								<span class="stat-number-hero">100%</span>
								<span class="stat-label-hero">Passion Driven</span>
							</div>
						</div>
					</div>
				</section>

				<!-- Our Story Section -->
				<section class="about-section">
					<div class="container">
						<div class="row">
							<div class="col-12 text-center mb-4">
								<h2 class="section-title">Our <span class="highlight-text">Story</span></h2>
								<p class="section-subtitle">How we started and where we're headed</p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="content-card fade-in">
									<div class="content-icon">
										<i class="icon-rocket"></i>
									</div>
									<h3 class="highlight-text mb-3">Our Beginning</h3>
									<p class="text-white">100 International started as a passion project to help businesses and individuals bring their creative visions to life. We began with video editing services and quickly expanded to web development and educational courses.</p>
									<p class="text-white-50">What sets us apart is our commitment to creativity and innovation in everything we do.</p>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="content-card fade-in">
									<div class="content-icon">
										<i class="icon-trending-up"></i>
									</div>
									<h3 class="highlight-text mb-3">Growing Forward</h3>
									<p class="text-white">Today, we're expanding our reach by offering comprehensive digital solutions and academy programs. Our goal is to empower others with the skills and creativity needed in the digital age.</p>
									<p class="text-white-50">We believe in growing together with our clients and students.</p>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Video Showcase Section (Blank section to view background video) -->
				<section class="video-showcase-section">
					<div class="container">
						<div class="row">
							<div class="col-12 text-center">
								<!-- <div class="video-showcase-content">
									<h2 class="showcase-title">Our <span class="highlight-text">Creative Journey</span></h2>
									<p class="showcase-subtitle">Experience our story in motion</p>
								</div> -->
							</div>
						</div>
					</div>
				</section>

				<!-- Our Services Section -->
				<section class="about-section">
					<div class="container">
						<div class="row">
							<div class="col-12 text-center mb-4">
								<h2 class="section-title">What We <span class="highlight-text">Do</span></h2>
								<p class="section-subtitle">Our core services that drive creativity</p>
							</div>
						</div>
						<div class="row g-4">
							<div class="col-lg-4 col-md-6">
								<div class="content-card fade-in">
									<div class="content-icon">
										<i class="icon-video-camera"></i>
									</div>
									<h4 class="text-white mb-3">Video Editing</h4>
									<p class="text-white-50">Professional video editing services for businesses, content creators, and personal projects. We bring stories to life through visual storytelling.</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="content-card fade-in">
									<div class="content-icon">
										<i class="icon-code"></i>
									</div>
									<h4 class="text-white mb-3">Web Development</h4>
									<p class="text-white-50">Custom websites and applications built with modern technologies. From simple landing pages to complex web applications.</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="content-card fade-in">
									<div class="content-icon">
										<i class="icon-graduation-cap"></i>
									</div>
									<h4 class="text-white mb-3">Academy</h4>
									<p class="text-white-50">Educational courses and training programs to help others learn video editing, web development, and digital skills.</p>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Mission & Vision Section -->
				<section class="about-section">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<div class="simple-card fade-in">
									<h3 class="highlight-text mb-3">Our Mission</h3>
									<p class="text-white">To provide creative and innovative digital solutions that help our clients achieve their goals while fostering a community of learners and creators.</p>
									<p class="text-white-50">We believe in the power of creativity to transform ideas into reality.</p>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="simple-card fade-in">
									<h3 class="highlight-text mb-3">Our Vision</h3>
									<p class="text-white">To become a recognized name in the creative digital space, known for quality work, innovative solutions, and empowering others through education.</p>
									<p class="text-white-50">Growing step by step, project by project.</p>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Why Choose Us Section -->
				<section class="about-section">
					<div class="container">
						<div class="row">
							<div class="col-12 text-center mb-4">
								<h2 class="section-title">Why <span class="highlight-text">Choose Us?</span></h2>
								<p class="section-subtitle">What makes 100 International different</p>
							</div>
						</div>
						<div class="row g-4">
							<div class="col-lg-3 col-md-6">
								<div class="content-card fade-in text-center">
									<div class="content-icon">
										<i class="icon-heart"></i>
									</div>
									<h5 class="text-white mb-2">Passionate Team</h5>
									<p class="text-white-50">We genuinely love what we do and it shows in our work quality.</p>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="content-card fade-in text-center">
									<div class="content-icon">
										<i class="icon-users"></i>
									</div>
									<h5 class="text-white mb-2">Personal Approach</h5>
									<p class="text-white-50">We work closely with each client to understand their unique needs.</p>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="content-card fade-in text-center">
									<div class="content-icon">
										<i class="icon-clock-o"></i>
									</div>
									<h5 class="text-white mb-2">Timely Delivery</h5>
									<p class="text-white-50">We respect deadlines and deliver quality work on time.</p>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="content-card fade-in text-center">
									<div class="content-icon">
										<i class="icon-dollar"></i>
									</div>
									<h5 class="text-white mb-2">Fair Pricing</h5>
									<p class="text-white-50">Quality services at competitive and transparent pricing.</p>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Team Section -->
				<section class="about-section">
					<div class="container">
						<div class="row">
							<div class="col-12 text-center mb-4">
								<h2 class="section-title">Meet Our <span class="highlight-text">Team</span></h2>
								<p class="section-subtitle">The creative minds behind 100 International</p>
							</div>
						</div>
						<div class="row g-4 justify-content-center">
							<div class="col-lg-4 col-md-6">
								<div class="team-member fade-in">
									<div class="member-avatar">
										<i class="icon-user"></i>
									</div>
									<h4 class="text-white mb-2">Mayura Athukorala</h4>
									<p class="highlight-text mb-2">CEO & Founder</p>
									<p class="text-white-50 small">Visionary leader driving the company's creative direction and growth strategy.</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="team-member fade-in">
									<div class="member-avatar">
										<i class="icon-user"></i>
									</div>
									<h4 class="text-white mb-2">Eranda Chamara</h4>
									<p class="highlight-text mb-2">CCO</p>
									<p class="text-white-50 small">Chief Creative Officer bringing imagination to life through innovative design solutions.</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="team-member fade-in">
									<div class="member-avatar">
										<i class="icon-user"></i>
									</div>
									<h4 class="text-white mb-2">Iruni Kalupahana</h4>
									<p class="highlight-text mb-2">Director of Internationals</p>
									<p class="text-white-50 small">Leading our international expansion and client relationships globally.</p>
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
								<img src="../assets/images/Companyimages/logo.png" alt="Website logo for the footer.">
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
										<a href="../course/" class="footer-main-links gradient-links">Course</a>
									</li>
									<li>
										<a href="../web-development/" class="footer-main-links gradient-links">Web Development</a>
									</li>
									<li>
										<a href="../academy/" class="footer-main-links gradient-links">Academy</a>
									</li>
									<li>
										<a href="../team/" class="footer-main-links gradient-links">Our Team</a>
									</li>
									<li>
										<a href="../contact/" class="footer-main-links gradient-links">Contact Us</a>
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
								<a class="footer-bottom-right-links" href="../contact/" target="_blank">Contact</a>
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
	<script src="../assets/vendor/bootstrap/5.1.3/bootstrap.min.js"></script>
	<script src="../assets/vendor/offcanvas-nav/hc-offcanvas-nav.js"></script>
	<script src="../assets/vendor/greensock/gsap.min.js"></script>
	<script src="../assets/vendor/greensock/ScrollTrigger.min.js"></script>
	<script src="../assets/vendor/greensock/ScrollSmoother.min.js"></script>
	<script src="../assets/vendor/greensock/ScrollToPlugin.min.js"></script>
	<script src="../assets/vendor/slick/1.8.1/slick.min.js"></script>
	<script src="../assets/vendor/parallax/3.1.0/parallax.min.js"></script>

	<!-- Main Theme JS File -->
	<script src="../assets/js/theme.js"></script>

	<!-- Theme Preview Only Scripts -->
	<script src="../assets/vendor/spectrum/spectrum.min.js"></script>
	<script src="../assets/vendor/clipboard/clipboard.min.js"></script>

	<!-- Theme Preview Only CSS -->
	<link href="../assets/vendor/spectrum/spectrum.min.css" rel="stylesheet">
	<!-- For morphing hover -->
	<script src="../assets/vendor/three-js/three.min.js"></script>
	<script src="../assets/vendor/hover-effect/hover-effect.umd.js"></script>
	
	<script src="../assets/custom/js/script.js"></script>

	<!-- Enhanced Navigation Scripts -->
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

			// Mobile menu animation trigger
			const navbarToggler = document.querySelector('.navbar-toggler');
			const navbarCollapse = document.querySelector('.navbar-collapse');
			
			if (navbarToggler && navbarCollapse) {
				navbarToggler.addEventListener('click', function() {
					setTimeout(() => {
						if (navbarCollapse.classList.contains('show')) {
							const navItems = navbarCollapse.querySelectorAll('.nav-item');
							navItems.forEach((item, index) => {
								item.style.animationDelay = (0.1 * (index + 1)) + 's';
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
					
					ripple.style.width = size + 'px';
					ripple.style.height = size + 'px';
					ripple.style.left = x + 'px';
					ripple.style.top = y + 'px';
					ripple.style.position = 'absolute';
					ripple.style.borderRadius = '50%';
					ripple.style.background = 'rgba(255, 143, 42, 0.4)';
					ripple.style.transform = 'scale(0)';
					ripple.style.animation = 'ripple-animation 0.6s linear';
					ripple.style.pointerEvents = 'none';
					ripple.style.zIndex = '0';
					
					this.style.position = 'relative';
					this.style.overflow = 'hidden';
					this.appendChild(ripple);
					
					setTimeout(() => {
						if (ripple.parentNode) {
							ripple.remove();
						}
					}, 600);
				});
			});

			// Smooth scrolling for anchor links
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

			// Scroll animations
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

			// Observe all fade-in elements
			document.querySelectorAll('.fade-in').forEach((element, index) => {
				element.style.animationDelay = (index * 0.1) + 's';
				observer.observe(element);
			});

			// Fixed video background control
			const heroSection = document.querySelector('.hero-video-section');
			const fixedVideoOverlay = document.querySelector('.video-overlay-fixed');
			const videoShowcaseSection = document.querySelector('.video-showcase-section');
			
			window.addEventListener('scroll', function() {
				const scrolled = window.pageYOffset;
				const heroHeight = heroSection ? heroSection.offsetHeight : window.innerHeight;
				
				// Show fixed video background after hero section
				if (scrolled > heroHeight * 0.8) {
					if (fixedVideoOverlay) {
						fixedVideoOverlay.classList.add('show');
						
						// Hide overlay when in video showcase section
						if (videoShowcaseSection) {
							const showcaseTop = videoShowcaseSection.offsetTop;
							const showcaseBottom = showcaseTop + videoShowcaseSection.offsetHeight;
							
							if (scrolled >= showcaseTop - 200 && scrolled <= showcaseBottom + 100) {
								fixedVideoOverlay.classList.add('hide-for-story');
							} else {
								fixedVideoOverlay.classList.remove('hide-for-story');
							}
						}
					}
				} else {
					if (fixedVideoOverlay) {
						fixedVideoOverlay.classList.remove('show');
						fixedVideoOverlay.classList.remove('hide-for-story');
					}
				}

				// Parallax effects for hero elements
				const heroContent = document.querySelector('.hero-content');
				const floatingStats = document.querySelector('.floating-stats');
				
				if (heroContent && scrolled < window.innerHeight) {
					const speed = scrolled * 0.3;
					heroContent.style.transform = `translateY(${speed}px)`;
				}
				
				if (floatingStats && scrolled < window.innerHeight) {
					const speed = scrolled * 0.1;
					floatingStats.style.transform = `translateY(${speed}px)`;
				}
			});

			// Stats counter animation for hero
			const heroStatsObserver = new IntersectionObserver((entries) => {
				entries.forEach(entry => {
					if (entry.isIntersecting) {
						const statNumbers = entry.target.querySelectorAll('.stat-number-hero');
						statNumbers.forEach(stat => {
							const finalNumber = stat.textContent;
							const isPercentage = finalNumber.includes('%');
							let numericValue = parseInt(finalNumber);
							let currentNumber = 0;
							const increment = numericValue / 30;
							
							const counter = setInterval(() => {
								currentNumber += increment;
								if (currentNumber >= numericValue) {
									currentNumber = numericValue;
									clearInterval(counter);
								}
								stat.textContent = Math.floor(currentNumber) + (isPercentage ? '%' : '+');
							}, 50);
						});
					}
				});
			}, { threshold: 0.5 });

			// Stats counter animation for regular sections
			const statsObserver = new IntersectionObserver((entries) => {
				entries.forEach(entry => {
					if (entry.isIntersecting) {
						const statNumbers = entry.target.querySelectorAll('.stat-number');
						statNumbers.forEach(stat => {
							const finalNumber = stat.textContent;
							const isPercentage = finalNumber.includes('%');
							let numericValue = parseInt(finalNumber);
							let currentNumber = 0;
							const increment = numericValue / 30;
							
							const counter = setInterval(() => {
								currentNumber += increment;
								if (currentNumber >= numericValue) {
									currentNumber = numericValue;
									clearInterval(counter);
								}
								stat.textContent = Math.floor(currentNumber) + (isPercentage ? '%' : '+');
							}, 50);
						});
					}
				});
			}, { threshold: 0.5 });

			// Observe hero stats
			const heroStats = document.querySelector('.floating-stats');
			if (heroStats) {
				heroStatsObserver.observe(heroStats);
			}

			// Observe regular stats section
			const statsSection = document.querySelector('.stats-row');
			if (statsSection) {
				statsObserver.observe(statsSection);
			}

			// Video handling for hero video
			const heroVideo = document.querySelector('.hero-video');
			if (heroVideo) {
				heroVideo.addEventListener('loadeddata', function() {
					heroVideo.play().catch(function(error) {
						console.log('Hero video autoplay failed:', error);
					});
				});
			}

			// Video handling for fixed background video
			const fixedVideo = document.querySelector('.fixed-background-video');
			if (fixedVideo) {
				fixedVideo.addEventListener('loadeddata', function() {
					fixedVideo.play().catch(function(error) {
						console.log('Fixed video autoplay failed:', error);
					});
				});
			}

			// Ensure videos play on user interaction if autoplay fails
			document.addEventListener('click', function() {
				if (heroVideo && heroVideo.paused) {
					heroVideo.play().catch(function(error) {
						console.log('Hero video play failed:', error);
					});
				}
				if (fixedVideo && fixedVideo.paused) {
					fixedVideo.play().catch(function(error) {
						console.log('Fixed video play failed:', error);
					});
				}
			}, { once: true });

			// Enhanced hover effects for content cards
			document.querySelectorAll('.content-card, .team-member, .stat-card-hero').forEach(card => {
				card.addEventListener('mouseenter', function() {
					this.style.transform = 'translateY(-10px) scale(1.02)';
				});
				
				card.addEventListener('mouseleave', function() {
					this.style.transform = 'translateY(0) scale(1)';
				});
			});
		});

		// Add required CSS animations
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