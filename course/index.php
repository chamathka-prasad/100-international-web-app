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

	<title>100 international | Our Courses</title>

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
	<style>
		.product-card {
			margin: 30px auto;

		}

		.details-container {
			background-color: rgba(0, 0, 0, 0.05);
			height: 100%;
			padding: 20px;
			display: flex;
			flex-direction: column;
			justify-content: center;
		}

		.product-image {
			width: 100%;
			height: auto;
			object-fit: cover;

		}

		.buy-button {
			background-color: #ffc107;
			border: none;
			color: #000;
			font-weight: bold;
			padding: 10px 0;
			margin-top: 15px;
			width: 100%;
		}

		.buy-button:hover {
			background-color: #ffca2c;
			color: #000;
		}

		.price {
			font-size: 24px;
			font-weight: bold;
		}

		.product-name {
			font-size: 28px;
			margin-bottom: 15px;
		}

		@media (max-width: 767px) {
			.details-container {
				margin-top: 15px;
			}
		}

		.modal-content {
			background-color: rgba(30, 30, 30, 0.95);
			color: #e0e0e0;
			border: 1px solid #333;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
			position: relative;
			overflow: hidden;
		}

		.modal-background {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			opacity: 0.4;
			z-index: 0;
			background-position: center;
			background-size: cover;
			filter: grayscale(30%);
		}

		.modal-header,
		.modal-body,
		.modal-footer {
			position: relative;
			z-index: 1;
		}

		.modal-header {
			border-bottom: 1px solid #333;
			background-color: rgba(18, 18, 18, 0.7);
		}

		.modal-footer {
			border-top: 1px solid #333;
			background-color: rgba(18, 18, 18, 0.7);
		}

		.btn-primary {
			background-color: #5e35b1;
			border-color: #5e35b1;
			transition: all 0.3s ease;
		}

		.btn-primary:hover {
			background-color: #7c4dff;
			border-color: #7c4dff;
			transform: translateY(-2px);
			box-shadow: 0 5px 15px rgba(124, 77, 255, 0.4);
		}

		.btn-close {
			filter: invert(1);
			z-index: 2;
		}

		.bank-details {
			background-color: rgba(37, 37, 37, 0.8);
			padding: 20px;
			border-radius: 8px;
			margin-bottom: 20px;
			backdrop-filter: blur(5px);
		}

		.bank-details h5 {
			color: #bb86fc;
			margin-bottom: 15px;
			font-weight: 600;
		}

		.detail-item {
			margin-bottom: 10px;
			display: flex;
		}

		.detail-label {
			font-weight: 600;
			color: #bb86fc;
			width: 140px;
		}

		.contact-details {
			background-color: rgba(37, 37, 37, 0.8);
			padding: 20px;
			border-radius: 8px;
			backdrop-filter: blur(5px);
		}

		.contact-item {
			display: flex;
			align-items: center;
			margin-bottom: 10px;
		}

		.contact-icon {
			margin-right: 10px;
			color: #bb86fc;
		}

		.top-image-container {
			width: 100%;
			display: flex;
			justify-content: center;
			margin-bottom: 20px;
			position: relative;
		}

		.top-image-container img {
			width: 100%;
			max-height: 200px;
			object-fit: cover;
			border-radius: 8px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
		}

		.highlight {
			color: #cf6679;
			font-weight: 600;
		}

		.modal-title {
			color: #bb86fc;
			font-weight: 700;
			letter-spacing: 1px;
		}
		.dark-button {
			z-index: 1;
            background-color: #333;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-family: Arial, sans-serif;
            font-size: 16px;
        
            align-items: center;
            gap: 8px;
            transition: background-color 0.3s;
        }
        
        .dark-button:hover {
            background-color: #555;
        }
	</style>

</head>

<body class="sk__elements-hero-slide-show-page dark-shade-1-bg">

	<main id="primary" class="site-main">

		<!-- Master Curtain Effect -->
		<section class="sk__master-curtain">
			<div class="mcurtain mcurtain-left"></div>
			<!-- <div class="mcurtain mcurtain-center"></div> -->
			<div class="mcurtain mcurtain-right"></div>
		</section>

		<!-- Back to top button -->
		<div class="sk__back-to-top-wrap">
			<a class="sk__back-to-top" href="#smooth-content"><span class="sk__back-to-top"></span></a>
		</div>

		<!-- Navigation Menu
		================================================== -->


		<!-- Dynamically controlled with JS! -->
		<a class="sk__mobile-main-logo" href="../"><img alt="Website logo." src="../assets/images/Companyimages/logo.png"></a>
		<!-- Navigation Bar -->
		<div class="custom-header d-none d-md-none d-lg-block" style="z-index:3;">
			<div class="custom-nav-links me-5 ">
				<a class="custom-link text-hover-background-swipe " href="../">Home</a>
				<a class="custom-link text-hover-background-swipe gradiendColorAdd" href="#">Courses</a>
				<a class="custom-link text-hover-background-swipe" href="../about/">About</a>
				<a class="custom-link text-hover-background-swipe" href="../companies/">Companies</a>
				<a class="custom-link text-hover-background-swipe" href="../team/">Team</a>
				<a class="custom-link text-hover-background-swipe" href="../contact/">Contact</a>
			</div>
			<div class="mirror-container"></div>

		</div>

		<div class="sk__mobile-menu-bar headerBackkGround overflow-hidden customAnimation" style="z-index: 1;"></div>


		<!-- nav -->

		<nav class="navbar navbar-expand-lg bg-body-tertiary d-lg-none d-md-block d-block custom-header">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"></a>
				<button class="navbar-toggler text-white" style="z-index: 100;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fs-2">&equiv;</span>
				</button>
				<div class="collapse navbar-collapse bg-black" id="navbarNavDropdown">
					<ul class="navbar-nav p-3">
						<li class="nav-item ">
							<a class="nav-link active" aria-current="page" href="../">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Courses</a>
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

		<!-- nav -->


		<div id="smooth-wrapper" class="pushable-content">
			<div id="smooth-content">


				<!-- Hero Section / Hero Slider
				================================================== -->
				<section class="sk__hero-section">
					<!-- Carousel -->
					<div id="sk__hero-carousel-slider" class="carousel slide dark-shade-1-bg">

						<!-- Hero Dots Navigation Bootstrap 5 -->
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#sk__hero-carousel-slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#sk__hero-carousel-slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#sk__hero-carousel-slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
							<button type="button" data-bs-target="#sk__hero-carousel-slider" data-bs-slide-to="3" aria-label="Slide 4"></button>
							<button type="button" data-bs-target="#sk__hero-carousel-slider" data-bs-slide-to="4" aria-label="Slide 5"></button>
							<button type="button" data-bs-target="#sk__hero-carousel-slider" data-bs-slide-to="5" aria-label="Slide 6"></button>

						</div>

						<!-- Slides -->
						<div class="carousel-inner">

							<!-- Slide 1 -->
							<div class="carousel-item zooming active hero-slide-1 sk__hero-slider-item sk__image-back-cover">

								<section class="sk__parallax-background-section sk__hero-item-theme-style">

									<!-- Parallax background -->
									<div class="sk__parallax-background-element sk__absolute sk__image-back-cover d-none d-md-block" style="background-image: url(../assets/images/Companyimages/courses/smCourse1.jpeg);"></div>
									<div class="sk__parallax-background-element sk__absolute sk__image-back-cover d-block d-md-none" style="background-image: url(../assets/images/Companyimages/courses/mob1.jpg);"></div>
									<div class="flex-helper-div"></div>

									<!-- Main hero heading -->
									<div class="hero-h1-box">
										<div class="cover-text-wrapper">
											<h1 class="hero-h1 animated-element phase-1 text-center text-md-start text-white">Advanced<br /> Video Editing<br />And <br />Cinema Course</h1>
											<button class="">
												<i class="fas fa-external-link-alt"></i> Open New Tab
											</button>
											<a class="btn btn-danger animated-element phase-1 mb-2 " href="#"  onclick="window.open('register', '_blank')" role="button"> <i class="fas fa-external-link-alt"></i>&nbsp;&nbsp; REGISTER</a>
											<a class="btn btn-primary btn-lg animated-element phase-1 mb-2" data-bs-toggle="modal" data-bs-target="#bankDetailsModal" href="#about-us" role="button"><i class="fas fa-university me-2"></i> View Bank Details</a>
										</div>
									</div>


									<!-- Bottom Left box -->
									<div class="hero-box-bottom-left text-center text-sm-start">

										<!-- <a class="btn btn-outline-light animated-element phase-1 mb-4 text-hover-background-swipe-button" href="https://sandbox.payhere.lk/pay/o64ac371e" target="_blank" role="button">Enroll</a> -->

										<div class="cover-text-wrapper">
											<h3 class="animated-element phase-1 text-center text-sm-start text-white">By <strong>100 international</strong></h3>
										</div>

										<!-- <div class="cover-text-wrapper">
											<p class="hero-box-p animated-element phase-1 text-center text-sm-start text-white">Salvia vape blue bottle bespoke wolf celiac quinoa cloud bread letterpress hammock photo booth. Palo santo vexillologist venmo shaman pitchfork tote bag.</p>
										</div> -->
									</div>

									<!-- Bottom Right Box -->
									<div class="hero-box-bottom-right text-center text-sm-start">
										<div class="cover-text-wrapper">
											<span class="big-abbreviated-heading animated-element phase-2 text-white">Project</span>
										</div>
										<!-- <div class="cover-text-wrapper">
											<p class="animated-element phase-2 text-white">Follow the white rabbit Neo, and you’ll end up in Darkshade</p>
										</div> -->
										<div class="cover-text-wrapper">
											<h4 class="animated-element phase-2 text-white">Professional Video Editors</h4>
										</div>
									</div>

								</section>
							</div>
							<!-- /.hero-slide-1 -->




							<!-- Slide 4 -->
							<div class="carousel-item zooming hero-slide-2 sk__hero-slider-item sk__image-back-cover">
								<section class="sk__parallax-background-section sk__hero-item-center-center">
									<div class="sk__parallax-background-element sk__absolute sk__image-back-cover d-none d-md-block" style="background-image: url(../assets/images/Companyimages/courses/smCourse2.jpeg);"></div>
									<div class="sk__parallax-background-element sk__absolute sk__image-back-cover d-block d-md-none" style="background-image: url(../assets/images/Companyimages/courses/mob2.jpg);"></div>



									<!-- Main hero heading -->
									<div class="hero-h1-box">
										<div class="cover-text-wrapper">
											<h1 class="hero-h1 animated-element phase-1 text-center text-md-start text-white">
												MASTETR IN <br><span class="text-warning">DAVINCI RESOLVE</span>, <br><span class="text-warning">ADOBE PRIMERE</span> WITH <br><span class="text-warning">AFTER EFFECTS</span> ANIMATIONS
											</h1>
										</div>
									</div>



								</section>
							</div>
							<!-- /.hero-slide-4 -->



							<div class="carousel-item zooming hero-slide-3 sk__hero-slider-item sk__image-back-cover">
								<section class="sk__parallax-background-section sk__hero-item-center-center">
									<div class="sk__parallax-background-element sk__absolute sk__image-back-cover d-none d-md-block" style="background-image: url(../assets/images/Companyimages/courses/smCourse3.jpeg);"></div>
									<div class="sk__parallax-background-element sk__absolute sk__image-back-cover d-block d-md-none" style="background-image: url(../assets/images/Companyimages/courses/mob3.jpg);"></div>

									<!-- Hero content -->
									<div class="mb-2 text-center">
										<span class="animated-element phase-1"></span>
										<span class="animated-element phase-1"></span>
										<div class="cover-text-wrapper">
											<h1 class="hero-h1 animated-element phase-1">PROFESSIONAL SKILL SET IN 1 MONTHS</h1>
										</div>

										<div class="cover-text-wrapper">
											<!-- <a class="btn btn-lg btn-outline-light animated-element phase-1" href="#" role="button">SOME LINK -></a> -->
										</div>
									</div>

								</section>
							</div>



							<div class="carousel-item zooming hero-slide-4 sk__hero-slider-item sk__image-back-cover">
								<section class="sk__parallax-background-section sk__hero-item-center-center">
									<div class="sk__parallax-background-element sk__absolute sk__image-back-cover d-none d-md-block" style="background-image: url(../assets/images/Companyimages/courses/smCourse4.jpeg);"></div>
									<div class="sk__parallax-background-element sk__absolute sk__image-back-cover d-block d-md-none" style="background-image: url(../assets/images/Companyimages/courses/mob4.jpg);"></div>

									<!-- Hero content -->
									<div class="mb-2 text-center">
										<span class="animated-element phase-1"></span>
										<span class="animated-element phase-1"></span>
										<div class="cover-text-wrapper">
											<h1 class="hero-h1 animated-element phase-1">BY NEXT LEVEL VIDEO EDITORS IN INDUSTRY</h1>

										</div>

										<div class="cover-text-wrapper">
											<a class="btn btn-outline-light animated-element phase-1 mb-4 text-hover-background-swipe-button" href="#" onclick="downloadPdf()" target="_blank" role="button">Check this Handbook for More details</a>
										</div>


									</div>

								</section>
							</div>

							<div class="carousel-item zooming hero-slide-5 sk__hero-slider-item sk__image-back-cover">
								<section class="sk__parallax-background-section sk__hero-item-center-center">
									<div class="sk__parallax-background-element sk__absolute sk__image-back-cover d-none d-md-block" style="background-image: url(../assets/images/Companyimages/courses/smCourse5.jpeg);"></div>
									<div class="sk__parallax-background-element sk__absolute sk__image-back-cover d-block d-md-none" style="background-image: url(../assets/images/Companyimages/courses/mob5.jpg);"></div>

									<!-- Hero content -->
									<!-- Hero content -->
									<div class="mb-2 text-center">
										<span class="animated-element phase-1"></span>
										<span class="animated-element phase-1"></span>
										<div class="cover-text-wrapper">
											<h1 class="hero-h1 animated-element phase-1">REGISTER NOW ! <br> <br>
												BE <span class="text-warning">CINEMATIC !</span></h1>
										</div>

										<div class="cover-text-wrapper">
											<!-- <a class="btn btn-lg btn-outline-light animated-element phase-1" href="#" role="button">SOME LINK -></a> -->
										</div>
									</div>

								</section>
							</div>


							<div class="carousel-item zooming hero-slide-6 sk__hero-slider-item sk__image-back-cover">
								<section class="sk__parallax-background-section sk__hero-item-center-center">
									<div class="sk__parallax-background-element sk__absolute sk__image-back-cover d-none d-md-block" style="background-image: url(../assets/images/Companyimages/courses/paymentBack.jpg);"></div>
									<div class="sk__parallax-background-element sk__absolute sk__image-back-cover d-block d-md-none" style="background-image: url(../assets/images/Companyimages/courses/paymentBack.jpg);"></div>

									<!-- Hero content -->
									<div class="mb-2">
										<span class="animated-element phase-1"></span>
										<span class="animated-element phase-1"></span>

										<div class="product-card animated-element phase-1">
											<div class="row">
												<!-- On mobile, this column will appear second -->
												<div class="col-lg-12 col-xl-6 order-xl-1 order-lg-2">
													<div class="details-container">
														<h1 class="product-name text-center text-warning" style="font-size: xx-large;">ONLY</h1>
														<p class="price text-center text-warning">9000 LKR</p>
														<p class="description">This price is very affordable for any person who willing to be a professional. The Course is providing top-notch training at an affordable price. Additionally, it serves as your pathway to join an exclusive Advanced Internship Program with the globally recognized company, 100 International.
														</p>
														<ul>

														</ul>
													</div>
												</div>
												<!-- On mobile, this column will appear first -->
												<div class="col-lg-12 col-xl-6 order-xl-2 order-lg-1 " style="background-image: url(../assets/images/Companyimages/courses/courseCover.jpg);background-size: contain;background-repeat: no-repeat;height:200px">

												</div>
											</div>
											<div class="row">
												<div class="col-12 text-center">
													<button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#bankDetailsModal">
														<i class="fas fa-university me-2"></i> View Bank Details
													</button>
													<!-- <button class="btn buy-button btn-warning">BUY NOW</button> -->
												</div>
											</div>
										</div>
										<!-- <div class="cover-text-wrapper">
											<h1 class="hero-h1 animated-element phase-1 fs-1">
												REGISTER NOW ! <br> <span class="fs-3">AND YOU CAN PAY COURSE FEE BEFORE STARTING</span>
												<br> <span class="text-warning fs-3">DATE 1 <sup>st</sup> OF APRIL 2025</span> <br>
											</h1>

											<h1 class="hero-h1 animated-element phase-1 text-danger">

												REGISTRATION FEE RS. 1000/=<br>
												COURSE FEE RS. 9000/=</h1>

										</div> -->


										<!-- <div class="cover-text-wrapper">

											<p class="animated-element phase-1 fs-6 fw-bold text-black text-center" style="background-color:rgba(239, 242, 253, 0.47);">
												<strong>BANK TRANSFER</strong><br><br>
												ACCOUNT NO: 0086018840<br>
												MISS I H KALUPAHANA<br>
												HASARA 1ST LANE,
												WELIPITIMODARA,
												GINTOTA 80280<br>
												BOC<br>
												BRANCH CODE/NAME: 089 GALLE CITY<br>
												CURRENCY: LKR <br><br>
												<strong>CONTACT </strong>
												<br>
												+94 76 368 7242 - Iruni Kalupahana (Director of Internationals) -->
										<!-- <strong>OPTION 2-</strong> -->
										<!-- <img src="../assets/images/Companyimages/courses/bank.jpeg" style="height:200px;" alt=""> -->

										<!-- </p> -->
										<!-- <a class="btn btn-outline-light animated-element phase-1 mb-4 text-hover-background-swipe-button" href="https://sandbox.payhere.lk/pay/o64ac371e" target="_blank" role="button">Purchase The Course Through The Payment Gateway</a> -->
										<!-- </div> -->
									</div>

								</section>
							</div>



							<!-- Modal -->
							<div class="modal fade" id="bankDetailsModal" tabindex="-1" aria-labelledby="bankDetailsModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<!-- Background image (forest) -->
										<div class="modal-background" style="background-image: url('../assets/images/Companyimages/courses/paymentBack.jpg');"></div>

										<div class="modal-header">
											<h5 class="modal-title" id="bankDetailsModalLabel">BANK TRANSFER DETAILS</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<!-- Top image (lion) -->
											<div class="top-image-container">
												<img src="../assets/images/Companyimages/courses/courseCover.jpg" alt="Lion" class="img-fluid">
											</div>

											<div class="bank-details">
												<h5><i class="fas fa-university me-2"></i>BANK INFORMATION</h5>
												<div class="detail-item">
													<span class="detail-label">ACCOUNT NO:</span>
													<span class="detail-value">0086018840</span>
												</div>
												<div class="detail-item">
													<span class="detail-label">ACCOUNT NAME:</span>
													<span class="detail-value">I H KALUPAHANA</span>
												</div>
												<div class="detail-item">
													<span class="detail-label">ADDRESS:</span>
													<span class="detail-value">HASARA 1ST LANE, WELIPITIMODARA, GINTOTA 80280</span>
												</div>
												<div class="detail-item">
													<span class="detail-label">BANK:</span>
													<span class="detail-value">BOC</span>
												</div>
												<div class="detail-item">
													<span class="detail-label">BRANCH:</span>
													<span class="detail-value">089 GALLE CITY</span>
												</div>
												<div class="detail-item">
													<span class="detail-label">CURRENCY:</span>
													<span class="detail-value">LKR</span>
												</div>
												<div class="detail-item">
												<img src="../assets/images/Companyimages/courses/bank.jpeg"  alt="">
												</div>
											</div>

											<div class="contact-details">
												<h5><i class="fas fa-phone-alt me-2"></i>CONTACT INFORMATION (Mobile And Whatsapp)</h5>
												<div class="contact-item">
													<span class="contact-icon"><i class="fab fa-whatsapp"></i></span>
													<span><span class="highlight">078 133 16 44</span> - Mayura Athukorala / Chief Executive Officer (CEO)</span>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

										</div>
									</div>
								</div>
							</div>






							<!-- Slide 4 -->
							<!-- <div class="carousel-item zooming hero-slide-7 sk__hero-slider-item sk__image-back-cover">
								<section class="sk__parallax-background-section sk__hero-item-center-center">
									<div class="sk__parallax-background-element sk__absolute sk__image-back-cover" style="background-image: url(assets/images/hero-image-09.webp);"></div>

									
									<div class="mb-2 text-center">
										<span class="animated-element phase-1"></span>
										<span class="animated-element phase-1"></span>
										<div class="cover-text-wrapper">
											<h1 class="hero-h1 animated-element phase-1">Start Exploring Dark&#8198;star</h1>
										</div>
										<div class="cover-text-wrapper">
											<h2 class="h2-regular thin animated-element phase-1">Salvia vape blue bottle bespoke wolf celiac quinoa cloud bread letterpress hammock.</h2>
										</div>
										<div class="cover-text-wrapper">
											<a class="btn btn-lg btn-outline-light animated-element phase-1" href="#" role="button">SOME LINK -></a>
										</div>


									</div>

								</section>
							</div> -->
							<!-- /.hero-slide-4 -->



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
					<!-- /#sk__hero-carousel-slider -->
				</section>
				<!-- /.sk__hero-section -->



				<section class="sk__parallax-background-section sk__parallax-fixer-section sk__parallax-fixer-ignore-height overflow-hidden" style="max-height: 0;">
					<div class="sk__parallax-background-element"></div>
				</section>


				<!-- Footer
				================================================== -->
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
								<a class="footer-bottom-right-links" href="#" target="_blank">Contact</a>
							</div>
						</div>
					</div>

				</footer>


				<!-- Helper div for inserting before scripts
				================================================== -->
				<div class="sk__body-end"></div>

			</div>
			<!-- /#smooth-content -->

		</div>
		<!-- /#smooth-wrapper -->

	</main>
	<!-- /main#primary.site-main -->


	<!-- Scripts / Body End
	================================================== -->
	<!-- Vendor Scripts -->
	<script src="../assets/vendor/bootstrap/5.1.3/bootstrap.min.js"></script>
	<script src="../assets/vendor/offcanvas-nav/hc-offcanvas-nav.js"></script>
	<script src="../assets/vendor/greensock/gsap.min.js"></script>
	<script src="../assets/vendor/greensock/ScrollTrigger.min.js"></script>
	<script src="../assets/vendor/greensock/ScrollSmoother.min.js"></script>
	<script src="../assets/vendor/greensock/ScrollToPlugin.min.js"></script>
	<script src="../assets/vendor/slick/1.8.1/slick.min.js"></script>
	<script src="../assets/vendor/parallax/3.1.0/parallax.min.js"></script>

	<!-- Font Awesome for icons -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
	<!-- Delivery Form Scripts -->
	<!-- <script src="assets/vendor/simple-forms/js/simple-forms-translations.js"></script> -->
	<!-- <script src="assets/vendor/simple-forms/js/simple-forms.min.js"></script> -->
	<!-- <script src="assets/js/form.js"></script> -->

	<!-- Main Theme JS File -->
	<script src="../assets/js/theme.js"></script>



	<!-- Theme Preview Only CSS -->
	<link href="../assets/vendor/spectrum/spectrum.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>

	<script src="../assets/custom/js/script.js"></script>
	<script>
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
	</script>
</body>

</html>