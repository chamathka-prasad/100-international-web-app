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

		/* Enhanced Premium Mobile Navigation Styles */
		.navbar-toggler {
			border: none;
			padding: 1rem;
			background: linear-gradient(135deg, rgba(255, 143, 42, 0.2), rgba(255, 235, 59, 0.1));
			border-radius: 16px;
			backdrop-filter: blur(20px);
			transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
			box-shadow: 0 8px 25px rgba(255, 143, 42, 0.2);
			position: relative;
			overflow: hidden;
		}

		.navbar-toggler::before {
			content: '';
			position: absolute;
			top: 0;
			left: -100%;
			width: 100%;
			height: 100%;
			background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
			transition: left 0.6s ease;
		}

		.navbar-toggler:hover::before {
			left: 100%;
		}

		.navbar-toggler:hover {
			background: linear-gradient(135deg, rgba(255, 143, 42, 0.3), rgba(255, 235, 59, 0.2));
			transform: scale(1.05) rotate(5deg);
			box-shadow: 0 12px 35px rgba(255, 143, 42, 0.3);
		}

		.navbar-toggler:focus {
			box-shadow: 0 0 30px rgba(255, 143, 42, 0.5);
			outline: none;
		}

		.navbar-toggler-icon {
			background: none;
			border: none;
			font-size: 2rem !important;
			color: #fff;
			font-weight: 300;
			text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
			transition: all 0.3s ease;
		}

		.navbar-toggler:hover .navbar-toggler-icon {
			transform: rotate(90deg);
			color: #ff8f2a;
		}

		.navbar-collapse {
			border-radius: 24px;
			margin-top: 1.5rem;
			background: linear-gradient(135deg, rgba(0, 0, 0, 0.98), rgba(20, 20, 20, 0.95)) !important;
			backdrop-filter: blur(25px);
			border: 2px solid rgba(255, 143, 42, 0.3);
			box-shadow: 
				0 25px 50px rgba(0, 0, 0, 0.6),
				inset 0 1px 0 rgba(255, 255, 255, 0.1);
			animation: slideDown 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
			position: relative;
			overflow: hidden;
		}

		.navbar-collapse::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			height: 2px;
			background: linear-gradient(90deg, #ff8f2a, #FFEB3B, #ff8f2a);
			opacity: 0.8;
		}

		@keyframes slideDown {
			from {
				opacity: 0;
				transform: translateY(-30px) scale(0.9);
			}
			to {
				opacity: 1;
				transform: translateY(0) scale(1);
			}
		}

		.navbar-nav {
			padding: 2rem !important;
		}

		.navbar-nav .nav-link {
			color: #fff !important;
			padding: 1.25rem 1.75rem;
			margin: 0.75rem 0;
			border-radius: 16px;
			transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
			position: relative;
			font-weight: 500;
			letter-spacing: 0.8px;
			background: rgba(255, 255, 255, 0.03);
			border: 2px solid transparent;
			backdrop-filter: blur(10px);
		}

		.navbar-nav .nav-link::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: linear-gradient(135deg, rgba(255, 143, 42, 0.15), rgba(255, 235, 59, 0.1));
			border-radius: 16px;
			opacity: 0;
			transition: all 0.4s ease;
			z-index: -1;
		}

		.navbar-nav .nav-link::after {
			content: '';
			position: absolute;
			top: 50%;
			left: -20px;
			transform: translateY(-50%);
			width: 4px;
			height: 0;
			background: linear-gradient(45deg, #ff8f2a, #FFEB3B);
			border-radius: 2px;
			transition: height 0.3s ease;
		}

		.navbar-nav .nav-link:hover::before {
			opacity: 1;
		}

		.navbar-nav .nav-link:hover::after {
			height: 70%;
		}

		.navbar-nav .nav-link:hover {
			color: #ff8f2a !important;
			transform: translateX(15px) scale(1.03);
			border-color: rgba(255, 143, 42, 0.4);
			box-shadow: 
				0 12px 30px rgba(255, 143, 42, 0.2),
				inset 0 1px 0 rgba(255, 255, 255, 0.1);
			background: rgba(255, 143, 42, 0.05);
		}

		.navbar-nav .nav-link.active {
			background: linear-gradient(135deg, rgba(255, 143, 42, 0.25), rgba(255, 235, 59, 0.15));
			color: #ff8f2a !important;
			font-weight: 700;
			border-color: rgba(255, 143, 42, 0.5);
			box-shadow: 
				0 8px 20px rgba(255, 143, 42, 0.3),
				inset 0 1px 0 rgba(255, 255, 255, 0.2);
		}

		.navbar-nav .nav-link.active::after {
			height: 70%;
		}

		.navbar-nav .nav-link i {
			margin-right: 1rem;
			font-size: 1.3rem;
			opacity: 0.9;
			transition: all 0.4s ease;
			background: linear-gradient(45deg, #fff, #ff8f2a);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			background-clip: text;
		}

		.navbar-nav .nav-link:hover i {
			opacity: 1;
			transform: scale(1.2) rotate(10deg);
		}

		.navbar-nav .nav-link.active i {
			transform: scale(1.1);
			opacity: 1;
		}

		/* Mobile Navigation Pulse Effect */
		@keyframes pulse {
			0% {
				box-shadow: 0 0 0 0 rgba(255, 143, 42, 0.7);
			}
			70% {
				box-shadow: 0 0 0 10px rgba(255, 143, 42, 0);
			}
			100% {
				box-shadow: 0 0 0 0 rgba(255, 143, 42, 0);
			}
		}

		.navbar-toggler.active {
			animation: pulse 2s infinite;
		}

		/* Responsive Design */
		@media (max-width: 991px) {
			.custom-header.d-none.d-md-none.d-lg-block {
				display: none !important;
			}
		}

		/* Course Section Styles */
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

		/* Enhanced Success Story Section */
		.success-story-section {
			padding: 120px 0;
		}

		.success-story-card {
			background: linear-gradient(135deg, rgba(255, 143, 42, 0.08), rgba(255, 235, 59, 0.03));
			border-radius: 24px;
			padding: 3rem;
			border: 2px solid rgba(255, 143, 42, 0.2);
			backdrop-filter: blur(15px);
			transition: all 0.4s ease;
			position: relative;
			overflow: hidden;
		}

		.success-story-card::before {
			content: '';
			position: absolute;
			top: 0;
			left: -100%;
			width: 100%;
			height: 100%;
			background: linear-gradient(90deg, transparent, rgba(255, 143, 42, 0.05), transparent);
			transition: left 1s ease;
		}

		.success-story-card:hover::before {
			left: 100%;
		}

		.success-story-card:hover {
			transform: translateY(-5px);
			border-color: rgba(255, 143, 42, 0.4);
			box-shadow: 0 20px 40px rgba(255, 143, 42, 0.15);
		}

		.student-image-large {
			width: 100%;
			height: 400px;
			object-fit: cover;
			border-radius: 20px;
			box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
			transition: all 0.3s ease;
		}

		.certificate-image-large {
			width: 100%;
			height: 400px;
			object-fit: cover;
			border-radius: 20px;
			box-shadow: 0 15px 30px rgba(255, 143, 42, 0.2);
			transition: all 0.3s ease;
			cursor: pointer;
		}

		.student-image-large:hover,
		.certificate-image-large:hover {
			transform: scale(1.02);
			box-shadow: 0 20px 40px rgba(255, 143, 42, 0.3);
		}

		.success-badge {
			position: absolute;
			top: 15px;
			right: 15px;
			background: linear-gradient(135deg, #ff8f2a, #FFEB3B);
			color: #000;
			border-radius: 25px;
			padding: 0.75rem 1.5rem;
			font-size: 0.9rem;
			font-weight: 700;
			text-transform: uppercase;
			letter-spacing: 1px;
			box-shadow: 0 5px 15px rgba(255, 143, 42, 0.3);
		}

		/* Certificate Modal Styles */
		.modal-content {
			background: linear-gradient(135deg, rgba(0, 0, 0, 0.95), rgba(20, 20, 20, 0.95));
			border: 2px solid rgba(255, 143, 42, 0.3);
			border-radius: 20px;
		}

		.modal-header {
			border-bottom: 1px solid rgba(255, 143, 42, 0.2);
		}

		.modal-title {
			color: #ff8f2a;
		}

		.btn-close {
			filter: invert(1);
		}

		.certificate-modal-image {
			width: 100%;
			height: auto;
			border-radius: 15px;
			box-shadow: 0 10px 30px rgba(255, 143, 42, 0.2);
		}

		/* Lecturer Section - Dark Black Background */
		.lecturer-section {
			background: #000000;
			position: relative;
			overflow: hidden;
		}

		.lecturer-section::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: radial-gradient(circle at 30% 50%, rgba(255, 143, 42, 0.05) 0%, transparent 70%);
			z-index: 1;
		}

		.lecturer-container {
			position: relative;
			z-index: 2;
		}

		.lecturer-image-wrapper {
			position: relative;
			padding: 2rem;
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 500px;
		}

		.lecturer-image {
			width: 450px;
			height: 500px;
			border-radius: 20px;
			object-fit: cover;
			object-position: center top;
			box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4);
			transition: all 0.4s ease;
			position: relative;
			z-index: 3;
		}

		.lecturer-image:hover {
			transform: scale(1.05);
			box-shadow: 0 40px 80px rgba(255, 143, 42, 0.2);
		}

		.lecturer-content {
			padding: 3rem 2rem;
			display: flex;
			flex-direction: column;
			justify-content: center;
		}

		.lecturer-title {
			background: linear-gradient(135deg, #ff8f2a, #FFEB3B);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			background-clip: text;
			font-size: 2.5rem;
			font-weight: 700;
			margin-bottom: 1rem;
			line-height: 1.2;
		}

		.lecturer-name {
			color: #ffffff;
			font-size: 2rem;
			font-weight: 600;
			margin-bottom: 1rem;
		}

		.lecturer-description {
			color: rgba(255, 255, 255, 0.9);
			font-size: 1.1rem;
			line-height: 1.7;
			margin-bottom: 2rem;
		}

		.lecturer-stats {
			display: grid;
			grid-template-columns: 1fr 1fr;
			gap: 2rem;
			margin: 2rem 0;
		}

		.stat-group h6 {
			color: #ff8f2a;
			font-weight: 600;
			margin-bottom: 1rem;
			font-size: 1.1rem;
		}

		.stat-group ul {
			list-style: none;
			padding: 0;
			margin: 0;
		}

		.stat-group li {
			color: rgba(255, 255, 255, 0.8);
			padding: 0.5rem 0;
			position: relative;
			padding-left: 1.5rem;
		}

		.stat-group li::before {
			content: '▶';
			position: absolute;
			left: 0;
			color: #ff8f2a;
			font-size: 0.8rem;
		}

		.lecturer-button {
			background: linear-gradient(135deg, #ff8f2a, #FFEB3B);
			color: #000;
			border: none;
			padding: 1rem 2rem;
			border-radius: 50px;
			font-weight: 600;
			text-decoration: none;
			display: inline-block;
			transition: all 0.3s ease;
			text-transform: uppercase;
			letter-spacing: 1px;
			width: fit-content;
		}

		.lecturer-button:hover {
			transform: translateY(-3px);
			box-shadow: 0 10px 25px rgba(255, 143, 42, 0.3);
			color: #000;
			text-decoration: none;
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

		/* Certificate Showcase Section - Dark Black Background */
		.certificate-showcase {
			background: #000000;
			position: relative;
			overflow: hidden;
		}

		.certificate-showcase::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: radial-gradient(circle at 70% 30%, rgba(255, 143, 42, 0.03) 0%, transparent 70%);
			z-index: 1;
		}

		.certificate-container {
			position: relative;
			z-index: 2;
		}

		.certificate-display-wrapper {
			position: relative;
			perspective: 1000px;
			margin-bottom: 3rem;
			cursor: pointer;
		}

		.certificate-showcase-image {
			width: 100%;
			max-width: 900px;
			height: auto;
			border-radius: 16px;
			box-shadow: 
				0 25px 50px rgba(0, 0, 0, 0.4),
				0 0 0 8px rgba(255, 143, 42, 0.1),
				0 0 0 16px rgba(255, 143, 42, 0.05);
			transition: all 0.5s ease;
			transform-style: preserve-3d;
			position: relative;
			z-index: 3;
		}

		.certificate-showcase-image:hover {
			transform: rotateY(2deg) rotateX(1deg) translateY(-15px) scale(1.02);
			box-shadow: 
				0 35px 70px rgba(0, 0, 0, 0.5),
				0 0 0 8px rgba(255, 143, 42, 0.2),
				0 0 0 16px rgba(255, 143, 42, 0.1);
		}

		.certificate-overlay {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: rgba(0, 0, 0, 0.8);
			border-radius: 16px;
			display: flex;
			align-items: center;
			justify-content: center;
			opacity: 0;
			transition: all 0.4s ease;
			z-index: 4;
		}

		.certificate-display-wrapper:hover .certificate-overlay {
			opacity: 1;
		}

		.certificate-overlay-content {
			text-align: center;
			transform: translateY(20px);
			transition: transform 0.4s ease;
		}

		.certificate-display-wrapper:hover .certificate-overlay-content {
			transform: translateY(0);
		}

		.certificate-details-card {
			background: linear-gradient(135deg, rgba(255, 143, 42, 0.05), rgba(255, 235, 59, 0.02));
			border-radius: 24px;
			padding: 3rem 2rem;
			border: 1px solid rgba(255, 143, 42, 0.15);
			backdrop-filter: blur(10px);
			position: relative;
			overflow: hidden;
		}

		.certificate-details-card::before {
			content: '';
			position: absolute;
			top: 0;
			left: -100%;
			width: 100%;
			height: 100%;
			background: linear-gradient(90deg, transparent, rgba(255, 143, 42, 0.03), transparent);
			transition: left 1s ease;
		}

		.certificate-details-card:hover::before {
			left: 100%;
		}

		.certificate-feature {
			transition: all 0.3s ease;
		}

		.certificate-feature:hover {
			transform: translateY(-5px);
		}

		.feature-icon {
			width: 80px;
			height: 80px;
			background: linear-gradient(135deg, rgba(255, 143, 42, 0.1), rgba(255, 235, 59, 0.05));
			border: 2px solid rgba(255, 143, 42, 0.2);
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 2rem;
			color: #ff8f2a;
			margin: 0 auto 1.5rem;
			transition: all 0.3s ease;
		}

		.certificate-feature:hover .feature-icon {
			background: linear-gradient(135deg, rgba(255, 143, 42, 0.2), rgba(255, 235, 59, 0.1));
			border-color: rgba(255, 143, 42, 0.4);
			transform: scale(1.1) rotate(5deg);
		}

		/* Certificate Fullscreen Modal Styles */
		.certificate-fullscreen-wrapper {
			width: 100%;
			max-width: 95vw;
			max-height: 90vh;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.certificate-fullscreen-image {
			width: 100%;
			height: auto;
			max-width: 100%;
			max-height: 90vh;
			object-fit: contain;
			border-radius: 12px;
			box-shadow: 0 20px 60px rgba(255, 143, 42, 0.3);
		}

		/* Responsive Design */
		@media (max-width: 768px) {
			.lecturer-image {
				width: 320px;
				height: 320px;
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

			.student-image-large,
			.certificate-image-large {
				height: 300px;
			}

			.success-story-card {
				padding: 2rem 1.5rem;
			}

			.navbar-nav .nav-link i {
				margin-right: 0.75rem;
				font-size: 1.1rem;
			}
		}

		@media (max-width: 576px) {
			.lecturer-image {
				width: 280px;
				height: 280px;
			}

			.student-image-large,
			.certificate-image-large {
				height: 250px;
			}

			.success-story-card {
				padding: 1.5rem 1rem;
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
				<a class="custom-link text-hover-background-swipe" href="../web-development/">Web Development</a>
				<a class="custom-link text-hover-background-swipe gradiendColorAdd" href="../academy/">Academy</a>
				<a class="custom-link text-hover-background-swipe" href="../about/">About</a>
				<a class="custom-link text-hover-background-swipe" href="../team/">Team</a>
				<a class="custom-link text-hover-background-swipe" href="../contact/">Contact</a>
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
							<a class="nav-link" aria-current="page" href="../">
								<i class="icon-home"></i> Home
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../web-development/">
								<i class="icon-code"></i> Web Development
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="../academy/">
								<i class="icon-graduation-cap"></i> Academy
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../about/">
								<i class="icon-user"></i> About
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../team/">
								<i class="icon-users"></i> Team
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../contact/">
								<i class="icon-mail"></i> Contact
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div id="smooth-wrapper" class="pushable-content">
			<div id="smooth-content">

				<!-- Hero Section with 3 Slides -->
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

							<!-- Slide 1 - Advanced Prompt Engineering with DaVinci Resolve Film Making -->
							<div class="carousel-item zooming active hero-slide-1 sk__hero-slider-item sk__image-back-cover">
								<section class="sk__parallax-background-section sk__hero-item-theme-style">
									<!-- Parallax background -->
									<div class="sk__parallax-background-element sk__absolute sk__image-back-cover" style="background-image: url(../assets/images/Companyimages/courses/smCourse1.jpeg);"></div>

									<div class="flex-helper-div"></div>
									
									<!-- Main hero heading -->
									<div class="hero-h1-box">
										<div class="cover-text-wrapper">
											<h1 class="hero-h1 animated-element phase-1 text-center text-md-start text-white">Advanced<br /> Prompt<br /> Engineering<br /> with DaVinci Resolve<br /> Film Making</h1>
										</div>
									</div>

									<!-- Bottom Left box -->
									<div class="hero-box-bottom-left text-center text-sm-start">
										<a class="btn btn-outline-light animated-element phase-1 mb-4" href="#course-details" role="button">LEARN MORE</a>
										
										<div class="cover-text-wrapper">
											<h3 class="animated-element phase-1 text-center text-sm-start text-white">MASTER <strong>AI-POWERED FILMMAKING</strong></h3>
										</div>

										<div class="cover-text-wrapper">
											<!-- <p class="hero-box-p animated-element phase-1 text-center text-sm-start text-white">Master the art of film making using advanced prompt engineering techniques combined with professional DaVinci Resolve workflows designed for content creators and filmmakers.</p> -->
										</div>
									</div>

									<!-- Bottom Right Box -->
									<div class="hero-box-bottom-right text-center text-sm-start">
										<div class="cover-text-wrapper">
											<span class="big-abbreviated-heading animated-element phase-2 text-white">FILM</span>
										</div>
										<div class="cover-text-wrapper">
											<p class="animated-element phase-2 text-white">10 Weeks • Premium Course</p>
										</div>
										<div class="cover-text-wrapper">
											<h4 class="animated-element phase-2 text-white">AI + CINEMA</h4>
										</div>
									</div>
								</section>
							</div>

							<!-- Slide 2 - Video Background Slide -->
							<div class="carousel-item zooming hero-slide-2 sk__hero-slider-item sk__image-back-cover">
								<section class="sk__video-background-section sk__hero-item-theme-style">
									<div class="sk__video-container sk__parallax-hero-video sk__absolute sk__image-back-cover">
										<div class="sk__pattern-overlay" style="opacity: 37%;"></div>
										<div class="sk__absolute sk__gradient-back-v1" style="opacity: 0;"></div>
										<video class="sk__video" preload="none" poster="../assets/video/hero-video-main.webp" autoplay="" loop="" muted="" playsinline="">
											<source src="../vidimg/acedemyhero.mp4" type="video/mp4">Your browser does not support HTML5 video.
										</video>
									</div>

									<div class="flex-helper-div"></div>
									
									<!-- Main hero heading -->
									<div class="hero-h1-box">
										<div class="cover-text-wrapper">
											<h1 class="hero-h1 animated-element phase-1 text-center text-md-start text-white">Behind<br /> The Scenes<br /> Learning Experience</h1>
										</div>
									</div>

									<!-- Bottom Left box -->
									<div class="hero-box-bottom-left text-center text-sm-start">
										<a class="btn btn-outline-light animated-element phase-1 mb-4" href="#course-details" role="button">WATCH PREVIEW</a>
										
										<div class="cover-text-wrapper">
											<h3 class="animated-element phase-1 text-center text-sm-start text-white">HANDS-ON <strong>PRACTICAL TRAINING</strong></h3>
										</div>

										<div class="cover-text-wrapper">
											<p class="hero-box-p animated-element phase-1 text-center text-sm-start text-white">See our students in action as they learn cutting-edge AI prompt engineering combined with professional DaVinci Resolve techniques in real-time.</p>
										</div>
									</div>

									<!-- Bottom Right Box -->
									<div class="hero-box-bottom-right text-center text-sm-start">
										<div class="cover-text-wrapper">
											<span class="big-abbreviated-heading animated-element phase-2 text-white">LIVE</span>
										</div>
										<div class="cover-text-wrapper">
											<p class="animated-element phase-2 text-white">Interactive • Real Projects</p>
										</div>
										<div class="cover-text-wrapper">
											<h4 class="animated-element phase-2 text-white">EXPERT MENTORSHIP</h4>
										</div>
									</div>
								</section>
							</div>

							<!-- Slide 3 - Results & Career Focus -->
							<div class="carousel-item zooming hero-slide-3 sk__hero-slider-item sk__image-back-cover">
								<section class="sk__parallax-background-section sk__hero-item-theme-style">
									<!-- Parallax background -->
									<div class="sk__parallax-background-element sk__absolute sk__image-back-cover" style="background-image: url(../assets/images/Companyimages/courses/smCourse4.jpeg);"></div>

									<div class="flex-helper-div"></div>
									
									<!-- Main hero heading -->
									<div class="hero-h1-box">
										<div class="cover-text-wrapper">
											<h1 class="hero-h1 animated-element phase-1 text-center text-md-start text-white">Launch Your<br /> Film Making<br /> Career</h1>
										</div>
									</div>

									<!-- Bottom Left box -->
									<div class="hero-box-bottom-left text-center text-sm-start">
										<a class="btn btn-outline-light animated-element phase-1 mb-4" href="#course-details" role="button">START JOURNEY</a>
										
										<div class="cover-text-wrapper">
											<h3 class="animated-element phase-1 text-center text-sm-start text-white">INDUSTRY-READY <strong>PROFESSIONALS</strong></h3>
										</div>

										<div class="cover-text-wrapper">
											<p class="hero-box-p animated-element phase-1 text-center text-sm-start text-white">Join our successful graduates who are now working as professional film makers, colorists, and content creators using AI-powered workflows.</p>
										</div>
									</div>

									<!-- Bottom Right Box -->
									<div class="hero-box-bottom-right text-center text-sm-start">
										<div class="cover-text-wrapper">
											<span class="big-abbreviated-heading animated-element phase-2 text-white">SUCCESS</span>
										</div>
										<div class="cover-text-wrapper">
											<p class="animated-element phase-2 text-white">200+ Graduates • 95% Job Rate</p>
										</div>
										<div class="cover-text-wrapper">
											<h4 class="animated-element phase-2 text-white">CAREER GROWTH</h4>
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

				<!-- Course Details Section -->
				<section id="course-details" class="service-section sk__parallax-background-section">
					<div class="sk__parallax-background-element sk__absolute sk__image-back-cover" style="background-image: url(../assets/images/Companyimages/whoWeAreBack.jpeg); opacity: 0.05;"></div>
					<div class="container sk__powercontainer">
						<div class="row">
							<div class="col text-center mb-5">
								<h4 class="h4-dark h4-shadow">Our Featured Course</h4>
								<span class="fat-divider dark-shade-4-bg"></span>
								<p class="p-v2 mt-4">Professional AI-powered film making education</p>
							</div>
						</div>

						<!-- Featured Course Section -->
						<div class="row mb-5">
							<div class="col-12">
								<div class="service-card">
									<!-- Large Course Title -->
									<div class="row mb-4">
										<div class="col-12 text-center">
											<div class="service-icon mx-auto mb-3">
												<i class="icon-play"></i>
											</div>
											<h2 class="mb-3 text-warning" style="font-size: 2.5rem; font-weight: 700; line-height: 1.2;">
												🎬 Advanced Prompt Engineering<br/>
												with DaVinci Resolve Film Making
											</h2>
											<p class="mb-4" style="font-size: 1.2rem; max-width: 800px; margin: 0 auto;">Master the art of film making using advanced prompt engineering techniques combined with professional DaVinci Resolve workflows designed for content creators and filmmakers.</p>
										</div>
									</div>

									<!-- Large Video Section -->
									<div class="row mb-4">
										<div class="col-12">
											<div class="video-container position-relative" style="max-width: 1000px; margin: 0 auto;">
												<div class="ratio ratio-16x9" style="border-radius: 20px; overflow: hidden; box-shadow: 0 20px 40px rgba(255, 143, 42, 0.3);">
													<iframe 
														src="https://www.youtube.com/embed/TmlkE9ubwtI?si=Qd1U7xfMYvP5ELCc&rel=0&modestbranding=1" 
														title="Advanced Prompt Engineering with Davinci Resolve Film Making Course Preview" 
														allowfullscreen 
														style="border-radius: 20px;">
													</iframe>
												</div>
												<div class="video-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(0,0,0,0.2); border-radius: 20px;">
													<div class="text-center text-white">
														<i class="icon-play-circle" style="font-size: 4rem; opacity: 0.7;"></i>
														<p class="mt-3 mb-0" style="font-size: 1.1rem; font-weight: 600;">Course Preview</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Course Details in Columns -->
									<div class="row text-center">
										<div class="col-md-6 mb-4">
											<h6 class="text-warning mb-3" style="font-size: 1.2rem;">What You'll Learn:</h6>
											<ul class="list-unstyled">
												<li class="mb-2" style="font-size: 1rem;"><i class="icon-check text-warning me-2"></i> Advanced Prompt Engineering</li>
												<li class="mb-2" style="font-size: 1rem;"><i class="icon-check text-warning me-2"></i> DaVinci Resolve Professional Techniques</li>
												<li class="mb-2" style="font-size: 1rem;"><i class="icon-check text-warning me-2"></i> AI-Powered Film Production</li>
												<li class="mb-2" style="font-size: 1rem;"><i class="icon-check text-warning me-2"></i> Color Grading & Visual Effects</li>
											</ul>
										</div>
										<div class="col-md-6 mb-4">
											<h6 class="text-warning mb-3" style="font-size: 1.2rem;">Course Details:</h6>
											<ul class="list-unstyled">
												<li class="mb-2" style="font-size: 1rem;"><i class="icon-clock text-warning me-2"></i> Duration: 10 Weeks</li>
												<li class="mb-2" style="font-size: 1rem;"><i class="icon-users text-warning me-2"></i> Class Size: 12 Students</li>
												<li class="mb-2" style="font-size: 1rem;"><i class="icon-certificate text-warning me-2"></i> Professional Certificate</li>
												<li class="mb-2" style="font-size: 1rem;"><i class="icon-star text-warning me-2"></i> Industry Mentorship</li>
											</ul>
										</div>
									</div>
									
									<!-- Action Buttons -->
									<div class="text-center mt-4">
										<a class="btn btn-outline-warning btn-lg me-3 mb-2" href="../contact/" role="button" style="padding: 1rem 2rem;">
											<i class="icon-info me-2"></i> Get Course Details
										</a>
										<a class="btn btn-outline-light btn-lg mb-2" href="../contact/" role="button" style="padding: 1rem 2rem;">
											<i class="icon-user-plus me-2"></i> Enroll Now
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="row mt-5">
							<div class="col text-center">
								<a class="btn btn-outline-light animated-element text-hover-background-swipe-button btn-lg" href="../contact/" role="button">
									<i class="icon-user-plus me-2"></i> Enroll in This Course
								</a>
								<div class="mt-3">
									<p class="small text-muted">Professional certificate • Expert mentorship • Industry-ready skills</p>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Enhanced Student Success Stories Section -->
				<section class="success-story-section sk__parallax-background-section">
					<div class="sk__parallax-background-element sk__absolute sk__image-back-cover" style="background-image: url(../assets/images/Companyimages/whoWeAreBack.jpeg); opacity: 0.1;"></div>
					<div class="container sk__powercontainer">
						<div class="row">
							<div class="col text-center mb-5">
								<h4 class="h4-dark h4-shadow">Featured Graduate Success Story</h4>
								<span class="fat-divider dark-shade-4-bg"></span>
								<p class="p-v2 mt-4">Real achievement from our academy graduate</p>
							</div>
						</div>

						<div class="row justify-content-center">
							<div class="col-lg-12 col-xl-11">
								<div class="success-story-card">
									<!-- Graduate Profile Section - Wider Layout -->
									<div class="row mb-5">
										<div class="col-lg-4 mb-4">
											<div class="position-relative mb-3 overflow-hidden rounded">
												<img src="../vidimg/dinujaya.jpg" 
													 alt="Dinujaya Akalanka - Video Editor" 
													 class="student-image-large">
												<div class="success-badge">
													Graduate
												</div>
											</div>
											<h5 class="text-warning text-center mb-2" style="font-size: 1.3rem;">Dinujaya Akalanka</h5>
											<p class="text-center mb-2"><strong style="font-size: 1.1rem;">Professional Video Editor</strong></p>
											<p class="text-center text-muted small">Class of 2024</p>
										</div>
										
										<div class="col-lg-4 mb-4">
											<div class="position-relative mb-3 overflow-hidden rounded">
												<img src="../vidimg/cetificatedinujaya.png" 
													 alt="Dinujaya Akalanka Professional Certificate" 
													 class="certificate-image-large"
													 data-bs-toggle="modal" 
													 data-bs-target="#certificateModal">
												<div class="success-badge">
													Certificate
												</div>
											</div>
											<p class="text-center text-warning mb-2"><strong style="font-size: 1.1rem;">Professional Certificate</strong></p>
											<p class="text-center small text-muted">Click to view full certificate</p>
										</div>
										
										<div class="col-lg-4 d-flex align-items-center">
											<div class="w-100">
												<div class="mb-4">
													<h6 class="text-warning mb-3" style="font-size: 1.2rem;">Skills Mastered:</h6>
													<div class="mb-3">
														<span class="badge bg-secondary me-2 mb-2 tech-badge" style="font-size: 0.9rem; padding: 0.5rem 1rem;">DaVinci Resolve</span>
														<span class="badge bg-secondary me-2 mb-2 tech-badge" style="font-size: 0.9rem; padding: 0.5rem 1rem;">Color Grading</span>
														<span class="badge bg-secondary me-2 mb-2 tech-badge" style="font-size: 0.9rem; padding: 0.5rem 1rem;">AI Prompting</span>
														<span class="badge bg-secondary mb-2 tech-badge" style="font-size: 0.9rem; padding: 0.5rem 1rem;">Film Production</span>
													</div>
												</div>
												<div class="mb-4">
													<div class="d-flex align-items-center mb-3">
														<i class="icon-trophy text-warning me-2" style="font-size: 1.2rem;"></i>
														<span class="text-success" style="font-size: 1rem;">Successfully Graduated 2024</span>
													</div>
													<div class="d-flex align-items-center mb-3">
														<i class="icon-briefcase text-warning me-2" style="font-size: 1.2rem;"></i>
														<span style="font-size: 1rem;">Now Working as Professional Video Editor</span>
													</div>
												</div>
												<div class="d-grid">
													<a href="../contact/" class="btn btn-outline-light btn-lg">
														<i class="icon-user-plus me-2"></i> Join This Success
													</a>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Enhanced Testimonial Section -->
									<div class="row">
										<div class="col-12">
											<div class="text-center p-4" style="background: linear-gradient(135deg, rgba(255, 143, 42, 0.08), rgba(255, 235, 59, 0.03)); border-radius: 20px; border: 2px solid rgba(255, 143, 42, 0.2);">
												<h6 class="text-warning mb-4" style="font-size: 1.4rem; font-weight: 600;">Success Story</h6>
												<blockquote class="mb-0">
													<p class="mb-4" style="font-size: 1.2rem; line-height: 1.7; font-style: italic; max-width: 900px; margin: 0 auto;">"It was a really valuable course. I learned about advanced software like DaVinci Resolve very easily. They taught me how to color balance a video beautifully. I have created many videos at university using the techniques I learned in this course, and I will continue to do so. Thank you very much for this valuable opportunity at a reasonable price."</p>
													<footer class="text-warning">
														<strong style="font-size: 1.1rem;">- Dinujaya Akalanka, Professional Video Editor</strong>
													</footer>
												</blockquote>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row mt-5">
							<div class="col text-center">
								<a class="btn btn-outline-light animated-element text-hover-background-swipe-button btn-lg" href="../contact/" role="button">
									<i class="icon-users me-2"></i> Start Your Success Story
								</a>
								<div class="mt-3">
									<p class="small text-muted">Professional training • Real results • Career advancement</p>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Certificate Modal -->
				<div class="modal fade" id="certificateModal" tabindex="-1" aria-labelledby="certificateModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-xl modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title text-warning" id="certificateModalLabel">Professional Certificate - Dinujaya Akalanka</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body text-center p-4">
								<img src="../vidimg/cetificatedinujaya.png" 
									 alt="Dinujaya Akalanka Professional Certificate - Full View" 
									 class="certificate-modal-image">
								<div class="mt-4">
									<p class="text-white mb-2"><strong>Advanced Prompt Engineering with DaVinci Resolve Film Making</strong></p>
									<p class="text-muted small">Professional Certificate • 100 Academy by 100 International • 2024</p>
								</div>
							</div>
							<div class="modal-footer justify-content-center">
								<a href="../contact/" class="btn btn-outline-warning">
									<i class="icon-certificate me-2"></i> Earn Your Certificate
								</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Lecturer Section - Dark Black Background -->
				<section class="lecturer-section sk__py-l">
					<div class="lecturer-container">
						<div class="container sk__supercontainer">
							<!-- Section Title -->
							<div class="row text-center mb-5">
								<div class="col">
									<h2 class="h2-super text-white">Meet Our Lead Instructor</h2>
									<p class="p-super text-white">Learn from an industry expert with years of professional experience</p>
								</div>
							</div>
							
							<!-- Lecturer Profile -->
							<div class="row align-items-center">
								<!-- Lecturer Image -->
								<div class="col-12 col-lg-5">
									<div class="lecturer-image-wrapper">
										<img src="../assets/images/Companyimages/team/maurafull.png" alt="Mayura Athukorala - Lead Instructor" class="lecturer-image">
									</div>
								</div>
								
								<!-- Lecturer Content -->
								<div class="col-12 col-lg-7">
									<div class="lecturer-content">
										<h3 class="lecturer-title">Lead Instructor</h3>
										<h4 class="lecturer-name">Mayura Athukorala</h4>
										<p class="lecturer-description">
											CEO and Professional Level Mentor at 100 International. With a strong background in Mathematics and over a decade of industry experience, Mayura leads the Advanced Prompt Engineering with DaVinci Resolve Film Making course with deep expertise in AI-powered creative production, advanced video post-production, and innovative teaching methodologies. He brings real-world knowledge to every lesson, ensuring students learn practical skills that directly apply to their careers in the modern AI-driven film industry.
										</p>
										
										<div class="lecturer-stats">
											<div class="stat-group">
												<h6>Course Expertise</h6>
												<ul>
													<li>Advanced Prompt Engineering</li>
													<li>DaVinci Resolve Mastery</li>
													<li>AI-Powered Film Production</li>
													<li>Color Grading & VFX</li>
													<li>Creative Problem Solving</li>
												</ul>
											</div>
											<div class="stat-group">
												<h6>Professional Background</h6>
												<ul>
													<li>Mathematics Background</li>
													<li>10+ Years Industry Experience</li>
													<li>200+ Students Successfully Trained</li>
													<li>CEO of 100 International</li>
													<li>AI Film Production Expert</li>
												</ul>
											</div>
										</div>
										
										<a href="../contact/" class="lecturer-button">
											Start Learning with Mayura
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Certificate Showcase Section - Dark Black Background -->
				<section class="certificate-showcase sk__py-l">
					<div class="certificate-container">
						<div class="container sk__supercontainer">
							<div class="row text-center">
								<div class="col sk__heading-spacer-l">
									<h2 class="h2-super text-white">Your Professional Certificate</h2>
									<p class="p-super text-white">Professional A4-sized certificate awarded upon successful course completion</p>
								</div>
							</div>
							
							<!-- Large Certificate Display -->
							<div class="row justify-content-center mb-5">
								<div class="col-12 col-lg-10 col-xl-8">
									<div class="certificate-display-wrapper">
										<img src="../vidimg/cetificatedinujaya.png" 
											 alt="Professional Certificate - Advanced Prompt Engineering with DaVinci Resolve Film Making" 
											 class="certificate-showcase-image"
											 data-bs-toggle="modal" 
											 data-bs-target="#certificateShowcaseModal">
										<div class="certificate-overlay">
											<div class="certificate-overlay-content">
												<i class="icon-search text-white" style="font-size: 3rem; opacity: 0.9;"></i>
												<p class="text-white mt-3 mb-0" style="font-size: 1.2rem; font-weight: 600;">Click to View Full Certificate</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!-- Certificate Details -->
							<div class="row">
								<div class="col-12">
									<div class="certificate-details-card">
										<div class="row text-center">
											<div class="col-md-4 mb-4">
												<div class="certificate-feature">
													<div class="feature-icon">
														<i class="icon-certificate"></i>
													</div>
													<h5 class="text-warning mb-2">Professional Recognition</h5>
													<p class="text-white-50">Industry-standard certificate recognized by employers worldwide</p>
												</div>
											</div>
											<div class="col-md-4 mb-4">
												<div class="certificate-feature">
													<div class="feature-icon">
														<i class="icon-shield"></i>
													</div>
													<h5 class="text-warning mb-2">Digitally Verifiable</h5>
													<p class="text-white-50">Unique certification numbers with online verification system</p>
												</div>
											</div>
											<div class="col-md-4 mb-4">
												<div class="certificate-feature">
													<div class="feature-icon">
														<i class="icon-star"></i>
													</div>
													<h5 class="text-warning mb-2">Lifetime Valid</h5>
													<p class="text-white-50">Your achievement is permanently recognized and never expires</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row text-center mt-5">
								<div class="col">
									<p class="p-large text-white mb-4">All certificates are professionally printed on premium paper and digitally delivered. <a href="../contact/" class="text-primary">Contact us</a> to start your certification journey.</p>
									<a class="btn btn-outline-light btn-lg" href="../contact/" role="button">
										<i class="icon-certificate me-2"></i> Earn Your Certificate Today
									</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Certificate Showcase Modal -->
				<div class="modal fade" id="certificateShowcaseModal" tabindex="-1" aria-labelledby="certificateShowcaseModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-fullscreen">
						<div class="modal-content bg-dark">
							<div class="modal-header border-bottom-0">
								<h5 class="modal-title text-warning" id="certificateShowcaseModalLabel">Professional Certificate - Full View</h5>
								<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body d-flex align-items-center justify-content-center p-4">
								<div class="certificate-fullscreen-wrapper">
									<img src="../vidimg/cetificatedinujaya.png" 
										 alt="Professional Certificate - Advanced Prompt Engineering with DaVinci Resolve Film Making - Full View" 
										 class="certificate-fullscreen-image">
								</div>
							</div>
							<div class="modal-footer border-top-0 justify-content-center">
								<div class="text-center">
									<p class="text-white mb-3"><strong>Advanced Prompt Engineering with DaVinci Resolve Film Making</strong></p>
									<p class="text-muted small mb-3">Professional Certificate • 100 Academy by 100 International</p>
									<a href="../contact/" class="btn btn-outline-warning btn-lg">
										<i class="icon-user-plus me-2"></i> Start Your Certification Journey
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course Pricing Section -->
				<section class="sk__py-l dark-shade-3-bg">
					<div class="container sk__supercontainer">
						<div class="row text-center">
							<div class="col sk__heading-spacer-l">
								<h2 class="h2-super">Course Investment</h2>
								<p class="p-super">Professional AI-powered film making education pricing</p>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-12 col-md-8 col-lg-6">
								<div class="service-card text-center">
									<div class="service-icon">
										<i class="icon-play"></i>
									</div>
									<h4 class="text-warning mb-3">Advanced Prompt Engineering with DaVinci Resolve Film Making</h4>
									<div style="font-size: 3rem; font-weight: bold; color: #ff8f2a; margin: 1rem 0;">
										Contact for Pricing
									</div>
									<p class="text-muted mb-3">Premium Professional Course</p>
									<ul class="list-unstyled mb-4 text-start">
										<li class="mb-2">✓ <strong>10 Weeks Duration</strong> - Comprehensive program</li>
										<li class="mb-2">✓ <strong>Advanced Prompt Engineering</strong> - AI-powered creativity</li>
										<li class="mb-2">✓ <strong>DaVinci Resolve Professional</strong> - Industry-standard tools</li>
										<li class="mb-2">✓ <strong>AI Film Production Techniques</strong> - Cutting-edge methods</li>
										<li class="mb-2">✓ <strong>Color Grading & Visual Effects</strong> - Professional finishing</li>
										<li class="mb-2">✓ <strong>Limited Class Size (12 Students)</strong> - Personal attention</li>
										<li class="mb-2">✓ <strong>Professional Certificate</strong> - Industry recognition</li>
										<li class="mb-2">✓ <strong>Industry Mentorship</strong> - Expert guidance</li>
										<li class="mb-2">✓ <strong>Lifetime Course Access</strong> - Continue learning</li>
									</ul>
									<div class="d-grid gap-2">
										<a href="../contact/" class="btn btn-primary btn-lg">Get Course Information</a>
										<a href="../contact/" class="btn btn-outline-light">Schedule Consultation</a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 text-center">
								<p class="p-large mt-4">Flexible payment options available. <a href="../contact/" class="text-primary">Contact us</a> for detailed pricing and enrollment information.</p>
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
								<p class="p-v2 mw-440">Professional AI-powered film making education that unlocks your creative potential and drives career growth.</p>
							</div>
							<div class="col-md-6 col-lg-3 footer-main-small-col mb-4 mb-md-0">
								<h5 class="h5-elegant">Course</h5>
								<ul class="footer-list">
									<li><a href="../contact/">Advanced Prompt Engineering</a></li>
									<li><a href="../contact/">DaVinci Resolve Film Making</a></li>
									<li><a href="../contact/">AI Film Production</a></li>
									<li><a href="../contact/">View Certificate</a></li>
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

	<!-- Enhanced Animation Scripts -->
	<script>
		// Smooth Scrolling for Anchor Links
		document.querySelectorAll('a[href^="#"]').forEach(anchor => {
			anchor.addEventListener('click', function (e) {
				const target = document.querySelector(this.getAttribute('href'));
				if (target) {
					e.preventDefault();
					const headerHeight = 80;
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
				this.classList.toggle('active');
				// Add rotation and scale animation
				if (this.classList.contains('active')) {
					this.style.transform = 'scale(1.1) rotate(45deg)';
				} else {
					this.style.transform = 'scale(1) rotate(0deg)';
				}
			});

			// Remove active class when navbar is hidden
			document.addEventListener('click', function(e) {
				if (!navbarToggler.contains(e.target) && !document.querySelector('#navbarNavDropdown').contains(e.target)) {
					navbarToggler.classList.remove('active');
					navbarToggler.style.transform = 'scale(1) rotate(0deg)';
				}
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

		document.querySelectorAll('.service-card, .success-story-card').forEach(card => {
			card.style.opacity = '0';
			card.style.transform = 'translateY(30px)';
			card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
			observer.observe(card);
		});

		// Enhanced mobile nav link animations
		document.querySelectorAll('.navbar-nav .nav-link').forEach((link, index) => {
			link.addEventListener('mouseenter', function() {
				// Add stagger effect for mobile nav
				setTimeout(() => {
					this.style.transform = 'translateX(15px) scale(1.03)';
				}, index * 50);
			});

			link.addEventListener('mouseleave', function() {
				this.style.transform = 'translateX(0) scale(1)';
			});
		});

		// Certificate image modal enhancement
		document.querySelectorAll('.certificate-image-large').forEach(img => {
			img.addEventListener('click', function() {
				// Add click animation
				this.style.transform = 'scale(0.98)';
				setTimeout(() => {
					this.style.transform = 'scale(1.02)';
				}, 100);
			});
		});
	</script>

</body>
</html>