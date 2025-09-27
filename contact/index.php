<!DOCTYPE html>
<html lang="en-US">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="description" content="Contact 100 International - Get in touch with our creative team">
	<meta name="author" content="100 International">
	<meta name="keywords" content="100 international, contact, creative agency, video editing, web development, academy, courses" />

	<meta property="og:title" content="100 International - Contact Us" />
	<meta property="og:description" content="Get in touch with 100 International - Your creative partner for video editing, web development, and digital innovation." />
	<meta property="og:image" content="../assets/images/Companyimages/logo.png" />

	<title>100 International | Contact Us</title>

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

	<!-- Enhanced Navigation & Contact Page Styles -->
	<style>
		/* Navigation Styles */
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

		.navbar-toggler {
			border: none;
			padding: 0.5rem;
			background: rgba(255, 143, 42, 0.1);
			border-radius: 8px;
			backdrop-filter: blur(10px);
			transition: all 0.3s ease;
		}

		.navbar-toggler:hover {
			background: rgba(255, 143, 42, 0.2);
			transform: scale(1.05);
		}

		.navbar-toggler:focus {
			box-shadow: 0 0 0 0.2rem rgba(255, 143, 42, 0.3);
		}

		.navbar-collapse {
			border-radius: 12px;
			margin-top: 1rem;
			background: linear-gradient(135deg, rgba(0, 0, 0, 0.95), rgba(20, 20, 20, 0.95));
			backdrop-filter: blur(15px);
			border: 1px solid rgba(255, 143, 42, 0.2);
			box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
			animation: slideDown 0.3s ease-out;
		}

		@keyframes slideDown {
			from {
				opacity: 0;
				transform: translateY(-10px);
			}
			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		.navbar-nav .nav-link {
			color: #fff !important;
			padding: 0.75rem 1.5rem !important;
			margin: 0.25rem 0 !important;
			border-radius: 8px !important;
			transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
			position: relative;
			font-weight: 500;
			overflow: hidden;
		}

		.navbar-nav .nav-link:hover {
			background: linear-gradient(135deg, rgba(255, 143, 42, 0.15), rgba(255, 235, 59, 0.1));
			color: #ff8f2a !important;
			transform: translateX(5px) scale(1.02);
			box-shadow: 0 4px 12px rgba(255, 143, 42, 0.2);
		}

		.navbar-nav .nav-link.active {
			background: linear-gradient(135deg, rgba(255, 143, 42, 0.3), rgba(255, 235, 59, 0.2));
			color: #ff8f2a !important;
			font-weight: 600;
			box-shadow: 0 4px 15px rgba(255, 143, 42, 0.3);
			border-left: 3px solid #ff8f2a;
		}

		/* Contact Page Specific Styles */
		.contact-hero {
			padding: 120px 0 80px;
			background: linear-gradient(135deg, rgba(0, 0, 0, 0.8), rgba(20, 20, 20, 0.9)), 
			            url('../assets/images/Companyimages/backImg.webp') center/cover;
			position: relative;
			overflow: hidden;
		}

		.contact-hero::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: radial-gradient(circle at center, transparent 0%, rgba(0, 0, 0, 0.4) 100%);
			z-index: 1;
		}

		.contact-hero-content {
			position: relative;
			z-index: 2;
		}

		.contact-title {
			font-size: 4rem;
			font-weight: 800;
			background: linear-gradient(45deg, #ff8f2a, #FFEB3B, #ff8f2a);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			background-clip: text;
			margin-bottom: 1rem;
			text-transform: uppercase;
			letter-spacing: 3px;
		}

		.contact-subtitle {
			font-size: 1.3rem;
			color: rgba(255, 255, 255, 0.8);
			margin-bottom: 2rem;
			max-width: 600px;
			margin-left: auto;
			margin-right: auto;
		}

		.contact-main {
			padding: 80px 0;
			background: #0a0a0a;
		}

		.contact-info-card {
			background: linear-gradient(135deg, rgba(255, 143, 42, 0.1), rgba(20, 20, 20, 0.9));
			border: 1px solid rgba(255, 143, 42, 0.2);
			border-radius: 20px;
			padding: 40px 30px;
			text-align: center;
			transition: all 0.3s ease;
			position: relative;
			overflow: hidden;
			backdrop-filter: blur(10px);
			margin-bottom: 30px;
		}

		.contact-info-card::before {
			content: '';
			position: absolute;
			top: 0;
			left: -100%;
			width: 100%;
			height: 100%;
			background: linear-gradient(90deg, transparent, rgba(255, 143, 42, 0.1), transparent);
			transition: left 0.6s ease;
		}

		.contact-info-card:hover::before {
			left: 100%;
		}

		.contact-info-card:hover {
			transform: translateY(-10px);
			box-shadow: 0 20px 40px rgba(255, 143, 42, 0.3);
			border-color: rgba(255, 143, 42, 0.4);
		}

		.contact-icon {
			width: 80px;
			height: 80px;
			border-radius: 50%;
			background: linear-gradient(45deg, #ff8f2a, #FFEB3B);
			display: flex;
			align-items: center;
			justify-content: center;
			margin: 0 auto 25px;
			font-size: 2rem;
			color: #000;
			transition: all 0.3s ease;
		}

		.contact-info-card:hover .contact-icon {
			transform: scale(1.1) rotate(5deg);
		}

		.contact-info-title {
			font-size: 1.5rem;
			font-weight: 600;
			color: #ff8f2a;
			margin-bottom: 15px;
		}

		.contact-info-text {
			color: rgba(255, 255, 255, 0.8);
			font-size: 1rem;
			line-height: 1.6;
		}

		.contact-form-section {
			background: linear-gradient(135deg, rgba(10, 10, 10, 0.95), rgba(30, 30, 30, 0.95));
			border-radius: 25px;
			padding: 50px;
			border: 1px solid rgba(255, 143, 42, 0.2);
			backdrop-filter: blur(15px);
			position: relative;
			overflow: hidden;
		}

		.contact-form-section::before {
			content: '';
			position: absolute;
			top: -50%;
			left: -50%;
			width: 200%;
			height: 200%;
			background: radial-gradient(circle, rgba(255, 143, 42, 0.05) 0%, transparent 70%);
			animation: float 6s ease-in-out infinite;
		}

		@keyframes float {
			0%, 100% { transform: translateY(0px) rotate(0deg); }
			50% { transform: translateY(-10px) rotate(5deg); }
		}

		.form-title {
			font-size: 2.5rem;
			font-weight: 700;
			color: #fff;
			margin-bottom: 10px;
			position: relative;
		}

		.form-subtitle {
			color: rgba(255, 255, 255, 0.7);
			margin-bottom: 40px;
			font-size: 1.1rem;
		}

		.modern-form-group {
			margin-bottom: 30px;
			position: relative;
		}

		.modern-form-input, .modern-form-textarea {
			width: 100%;
			padding: 18px 20px;
			background: rgba(255, 255, 255, 0.1);
			border: 2px solid rgba(255, 143, 42, 0.2);
			border-radius: 12px;
			color: #fff;
			font-size: 1rem;
			transition: all 0.3s ease;
			backdrop-filter: blur(10px);
		}

		.modern-form-input:focus, .modern-form-textarea:focus {
			outline: none;
			border-color: #ff8f2a;
			background: rgba(255, 143, 42, 0.1);
			box-shadow: 0 0 20px rgba(255, 143, 42, 0.3);
		}

		.modern-form-input::placeholder, .modern-form-textarea::placeholder {
			color: rgba(255, 255, 255, 0.5);
		}

		.modern-form-label {
			position: absolute;
			left: 20px;
			top: 50%;
			transform: translateY(-50%);
			color: rgba(255, 255, 255, 0.6);
			font-size: 1rem;
			transition: all 0.3s ease;
			pointer-events: none;
			background: rgba(10, 10, 10, 0.8);
			padding: 0 8px;
		}

		.modern-form-input:focus + .modern-form-label,
		.modern-form-input:not(:placeholder-shown) + .modern-form-label {
			top: 0;
			transform: translateY(-50%);
			font-size: 0.85rem;
			color: #ff8f2a;
		}

		.modern-submit-btn {
			background: linear-gradient(45deg, #ff8f2a, #FFEB3B);
			color: #000;
			border: none;
			padding: 18px 40px;
			border-radius: 50px;
			font-size: 1.1rem;
			font-weight: 600;
			cursor: pointer;
			transition: all 0.3s ease;
			position: relative;
			overflow: hidden;
			text-transform: uppercase;
			letter-spacing: 1px;
		}

		.modern-submit-btn::before {
			content: '';
			position: absolute;
			top: 0;
			left: -100%;
			width: 100%;
			height: 100%;
			background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
			transition: left 0.6s ease;
		}

		.modern-submit-btn:hover::before {
			left: 100%;
		}

		.modern-submit-btn:hover {
			transform: translateY(-3px);
			box-shadow: 0 10px 25px rgba(255, 143, 42, 0.4);
		}

		.contact-map {
			background: linear-gradient(135deg, rgba(20, 20, 20, 0.9), rgba(40, 40, 40, 0.9));
			border-radius: 20px;
			padding: 60px 40px;
			text-align: center;
			border: 1px solid rgba(255, 143, 42, 0.2);
			margin-top: 50px;
		}

		.map-title {
			font-size: 2rem;
			font-weight: 600;
			color: #fff;
			margin-bottom: 20px;
		}

		.map-placeholder {
			background: linear-gradient(135deg, rgba(255, 143, 42, 0.1), rgba(30, 30, 30, 0.9));
			height: 300px;
			border-radius: 15px;
			display: flex;
			align-items: center;
			justify-content: center;
			color: rgba(255, 255, 255, 0.6);
			font-size: 1.2rem;
			border: 2px dashed rgba(255, 143, 42, 0.3);
		}

		.social-connect {
			padding: 60px 0;
			background: linear-gradient(135deg, #0a0a0a, #1a1a1a);
		}

		.social-title {
			font-size: 2.5rem;
			font-weight: 700;
			color: #fff;
			margin-bottom: 30px;
			text-align: center;
		}

		.social-links {
			display: flex;
			justify-content: center;
			gap: 20px;
			flex-wrap: wrap;
		}

		.social-link {
			width: 60px;
			height: 60px;
			border-radius: 50%;
			background: linear-gradient(45deg, #ff8f2a, #FFEB3B);
			display: flex;
			align-items: center;
			justify-content: center;
			color: #000;
			font-size: 1.5rem;
			text-decoration: none;
			transition: all 0.3s ease;
		}

		.social-link:hover {
			transform: translateY(-5px) scale(1.1);
			box-shadow: 0 10px 25px rgba(255, 143, 42, 0.4);
			color: #000;
		}

		/* Responsive Design */
		@media (max-width: 991px) {
			.custom-header.d-none.d-md-none.d-lg-block {
				display: none !important;
			}
		}

		@media (max-width: 768px) {
			.contact-title {
				font-size: 2.5rem;
			}
			
			.contact-form-section {
				padding: 30px 20px;
			}
			
			.form-title {
				font-size: 2rem;
			}
			
			.contact-info-card {
				padding: 30px 20px;
			}
		}

		.custom-header.scrolled {
			background: rgba(0, 0, 0, 0.95);
			backdrop-filter: blur(15px);
			border-bottom: 1px solid rgba(255, 143, 42, 0.2);
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
		<div class="sk__mobile-menu-bar headerBackkGround overflow-hidden customAnimation"></div>

		<!-- Mobile Logo -->
		<a class="sk__mobile-main-logo" href="../"><img alt="Website logo." src="../assets/images/Companyimages/logo.png"></a>
		
		<!-- Desktop Navigation Bar -->
		<div class="custom-header d-none d-md-none d-lg-block">
			<div class="custom-nav-links">
				<a class="custom-link text-hover-background-swipe" href="../">Home</a>
				<!-- <a class="custom-link text-hover-background-swipe" href="../course/">Courses</a> -->
				<a class="custom-link text-hover-background-swipe" href="../web-development/">Web/App/Software</a>
				<a class="custom-link text-hover-background-swipe" href="../academy/">Academy</a>
				<a class="custom-link text-hover-background-swipe" href="../about/">About</a>
				<!-- <a class="custom-link text-hover-background-swipe" href="../companies/">Companies</a> -->
				<a class="custom-link text-hover-background-swipe" href="../team/">Team</a>
				<a class="custom-link text-hover-background-swipe gradiendColorAdd" href="#">Contact</a>
			</div>
		</div>

		<!-- Mobile Navigation -->
		<nav class="navbar navbar-expand-lg bg-body-tertiary d-lg-none d-md-block d-block custom-header">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"></a>
				<button class="navbar-toggler text-white" style="z-index: 100;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fs-2">&#9776;</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav p-3">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="../">
								<span style="margin-right: 8px;">🏠</span>Home
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../web-development/">
								<span style="margin-right: 8px;">💻</span>Web/App/Software
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../academy/">
								<span style="margin-right: 8px;">🎓</span>Academy
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../about/">
								<span style="margin-right: 8px;">ℹ️</span>About
							</a>
						</li>
		
						<li class="nav-item">
							<a class="nav-link" href="../team/">
								<span style="margin-right: 8px;">👥</span>Team
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="#">
								<span style="margin-right: 8px;">📞</span>Contact
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div id="smooth-wrapper" class="pushable-content">
			<div id="smooth-content">

				<!-- Contact Hero Section -->
				<section class="contact-hero">
					<div class="container">
						<div class="row">
							<div class="col-12 text-center contact-hero-content">
								<h1 class="contact-title">Get In Touch</h1>
								<p class="contact-subtitle">Ready to bring your creative vision to life? Let's connect and create something amazing together.</p>
							</div>
						</div>
					</div>
				</section>

				<!-- Contact Information Section -->
				<section class="contact-main">
					<div class="container">
						<div class="row mb-5">
							<div class="col-lg-4 col-md-6">
								<div class="contact-info-card">
									<div class="contact-icon">
										📞
									</div>
									<h3 class="contact-info-title">Call Us</h3>
									<div class="contact-info-text">
										<p><strong>+94 76 368 7242</strong></p>
										<p>Iruni Kalupahana<br>(Director of Internationals)</p>
										<p>Mon - Fri: 9:00 AM - 6:00 PM</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="contact-info-card">
									<div class="contact-icon">
										✉️
									</div>
									<h3 class="contact-info-title">Email Us</h3>
									<div class="contact-info-text">
										<p><strong>info@100-international.com</strong></p>
										<p>creative@100-international.com</p>
										<p>We'll respond within 24 hours</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12">
								<div class="contact-info-card">
									<div class="contact-icon">
										📍
									</div>
									<h3 class="contact-info-title">Visit Us</h3>
									<div class="contact-info-text">
										<p><strong>100 International</strong></p>
										<p>School of Creativity<br>Colombo, Sri Lanka</p>
										<p>Open for appointments</p>
									</div>
								</div>
							</div>
						</div>

						<!-- Contact Form & Map Row -->
						<div class="row">
							<div class="col-lg-8">
								<div class="contact-form-section">
									<h2 class="form-title">Send Us A Message</h2>
									<p class="form-subtitle">Have a project in mind? Fill out the form below and we'll get back to you soon.</p>
									
									<form id="contactForm" class="position-relative">
										<div class="row">
											<div class="col-md-6">
												<div class="modern-form-group">
													<input type="text" class="modern-form-input" id="firstName" name="firstName" placeholder=" " required>
													<label class="modern-form-label" for="firstName">First Name *</label>
												</div>
											</div>
											<div class="col-md-6">
												<div class="modern-form-group">
													<input type="text" class="modern-form-input" id="lastName" name="lastName" placeholder=" " required>
													<label class="modern-form-label" for="lastName">Last Name *</label>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-6">
												<div class="modern-form-group">
													<input type="email" class="modern-form-input" id="email" name="email" placeholder=" " required>
													<label class="modern-form-label" for="email">Email Address *</label>
												</div>
											</div>
											<div class="col-md-6">
												<div class="modern-form-group">
													<input type="tel" class="modern-form-input" id="phone" name="phone" placeholder=" ">
													<label class="modern-form-label" for="phone">Phone Number</label>
												</div>
											</div>
										</div>
										
										<div class="modern-form-group">
											<input type="text" class="modern-form-input" id="subject" name="subject" placeholder=" " required>
											<label class="modern-form-label" for="subject">Subject *</label>
										</div>
										
										<div class="modern-form-group">
											<select class="modern-form-input" id="service" name="service" required>
												<option value="">Select Service of Interest</option>
												<option value="video-editing">Video Editing Course</option>
												<option value="web-development">Web Development</option>
												<option value="academy">Academy Programs</option>
												<option value="company-setup">Company Setup</option>
												<option value="consultation">Creative Consultation</option>
												<option value="other">Other</option>
											</select>
										</div>
										
										<div class="modern-form-group">
											<textarea class="modern-form-textarea" id="message" name="message" rows="6" placeholder="Tell us about your project or inquiry..." required></textarea>
										</div>
										
										<div class="text-center">
											<button type="submit" class="modern-submit-btn">
												Send Message
											</button>
										</div>
									</form>
								</div>
							</div>
							
							<div class="col-lg-4">
								<div class="contact-map">
									<h3 class="map-title">Our Location</h3>
									<div class="map-placeholder">
										<div>
											<i class="icon-map-pin" style="font-size: 3rem; margin-bottom: 15px; color: #ff8f2a;"></i>
											<p>Interactive Map<br>Coming Soon</p>
										</div>
									</div>
									<p class="mt-3" style="color: rgba(255,255,255,0.7);">
										Located in the heart of Colombo, we're easily accessible for in-person consultations and meetings.
									</p>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Social Connect Section -->
				<section class="social-connect">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h2 class="social-title">Connect With Us</h2>
								<div class="social-links">
									<a href="#" class="social-link" target="_blank" title="Facebook">
										<span class="icon-facebook1"></span>
									</a>
									<a href="#" class="social-link" target="_blank" title="Instagram">
										<span class="icon-instagram1"></span>
									</a>
									<a href="#" class="social-link" target="_blank" title="YouTube">
										<span class="icon-youtube1"></span>
									</a>
									<a href="#" class="social-link" target="_blank" title="LinkedIn">
										<span class="icon-linkedin1"></span>
									</a>
									<a href="#" class="social-link" target="_blank" title="Twitter">
										<span class="icon-twitter1"></span>
									</a>
									<a href="#" class="social-link" target="_blank" title="Behance">
										<span class="icon-behance1"></span>
									</a>
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
										<a href="#" class="footer-main-links gradient-links">Contact Us</a>
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
													<a class="social-icons" href="#" target="_blank"><span><span class="icon-linkedin1"></span></span></a>
													<a class="social-icons" href="#" target="_blank"><span><span class="icon-youtube1"></span></span></a>
													<a class="social-icons" href="#" target="_blank"><span><span class="icon-instagram1"></span></span></a>
													<a class="social-icons" href="#" target="_blank"><span><span class="icon-pinterest1"></span></span></a>
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
								<a class="footer-bottom-right-links" href="#" target="_blank">Contact</a>
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

	<!-- Enhanced Contact Page JavaScript -->
	<script>
		// Navigation scroll effect
		window.addEventListener('scroll', function() {
			const header = document.querySelector('.custom-header');
			if (header) {
				if (window.scrollY > 100) {
					header.classList.add('scrolled');
				} else {
					header.classList.remove('scrolled');
				}
			}
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

		// Form handling
		document.getElementById('contactForm').addEventListener('submit', function(e) {
			e.preventDefault();
			
			// Get form data
			const formData = new FormData(this);
			const data = {};
			formData.forEach((value, key) => {
				data[key] = value;
			});

			// Simple validation
			const requiredFields = ['firstName', 'lastName', 'email', 'subject', 'message', 'service'];
			let valid = true;

			requiredFields.forEach(field => {
				const input = document.getElementById(field);
				if (!input.value.trim()) {
					input.style.borderColor = '#ff4444';
					valid = false;
				} else {
					input.style.borderColor = 'rgba(255, 143, 42, 0.2)';
				}
			});

			if (valid) {
				// Show success message (replace with actual form submission logic)
				const submitBtn = document.querySelector('.modern-submit-btn');
				const originalText = submitBtn.innerHTML;
				
				submitBtn.innerHTML = '✓ Message Sent!';
				submitBtn.style.background = 'linear-gradient(45deg, #4CAF50, #8BC34A)';
				
				setTimeout(() => {
					submitBtn.innerHTML = originalText;
					submitBtn.style.background = 'linear-gradient(45deg, #ff8f2a, #FFEB3B)';
					this.reset();
				}, 3000);
			} else {
				// Show error message
				alert('Please fill in all required fields.');
			}
		});

		// Form input animations
		document.querySelectorAll('.modern-form-input, .modern-form-textarea').forEach(input => {
			input.addEventListener('focus', function() {
				this.parentNode.classList.add('focused');
			});
			
			input.addEventListener('blur', function() {
				if (!this.value) {
					this.parentNode.classList.remove('focused');
				}
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

		// Animate contact cards on scroll
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

		document.querySelectorAll('.contact-info-card').forEach(card => {
			card.style.opacity = '0';
			card.style.transform = 'translateY(30px)';
			card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
			observer.observe(card);
		});
	</script>

</body>

</html>