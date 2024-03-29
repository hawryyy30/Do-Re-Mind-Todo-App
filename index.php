<?php 
  include 'includes/config.php';
  session_start();

  if(isset($_SESSION["user_username"])) {
    header("Location: dashboard.php");
    die();
  }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Bootstrap-->
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
		/>
		<!-- Custom CSS -->
		<link rel="stylesheet" href="./assets/css/style.css" />
		<!-- Google fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap"
			rel="stylesheet"
		/>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,100;1,200;1,300;1,400;1,700&display=swap"
			rel="stylesheet"
		/>
		<!-- Javascript -->
		<script src="js/app.js" defer></script>
		<script
			src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
			integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
			integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
			crossorigin="anonymous"
		></script>
		<!-- font awesome's kit code -->
		<script
			src="https://kit.fontawesome.com/bc44dd7ee2.js"
			crossorigin="anonymous"
			defer
		></script>
		<!-- Title and icons -->
		<link rel="icon" type="image/x-icon" href="./assets/image/favicon.png" />
		<title>Do-re-mind | Productivity on point</title>
	</head>
	<body>
		<!-- navbar -->
		<header>
			<nav class="navbar navbar-expand-lg fixed-top">
				<div class="container-fluid">
					<a class="navbar-brand ps-5" href="#">Do-re-mind</a>
					<button
						class="navbar-toggler"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent"
						aria-expanded="false"
						aria-label="Toggle navigation"
					>
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ms-auto mb-2 mt-2 mb-lg-0 navitem">
							<li class="nav-item">
								<a class="nav-link px-5" href="#about-us">About Us</a>
							</li>
							<li class="nav-item">
								<a class="nav-link px-5" href="#features">Features</a>
							</li>
							<li class="nav-item">
								<a class="nav-link px-5" href="#testimonies">Testimonies</a>
							</li>
							<li class="nav-item">
								<a class="nav-link px-5" href="#contact-us">Contact Us</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<!-- Hero Section -->
		<section id="hero">
			<div class="container h-100">
				<div class="row h-100 justify-content-center">
					<div class="col-md-6 my-auto">
						<h3>It’s as easy as singin’</h3>
						<h1>Do-re-mind</h1>
						<h3>Never let your productivity be interfered ever again</h3>
						<button data-modal-target="#modal" class="btn-lg bttn shadow-lg">
							LET’S DIVE IN
						</button>
					</div>

					<div class="col-md-6 my-auto">
						<img
							src="./assets/image/illustrate1.png"
							alt=""
							class="illustration"
						/>
					</div>
				</div>
			</div>
		</section>

		<!-- login form section -->
		<div class="popup" id="modal">
			<button data-close-button class="close-btn">&times;</button>
			<h1 class="fw-bold">Do-re-mind</h1>
			<h3>Login to your account</h3>
			<form action="login.php" method="post">
				<div class="form-element">
					<input type="text" name="username" id="username" placeholder="username" required />
				</div>
				<div class="form-element">
					<input
						type="password"
            name="password"
						id="password"
						placeholder="password"
						required
					/>
				</div>
				<button name="submit" class="login bttn">Login</button>
			</form>
		</div>
		<div id="overlay"></div>
		<!-- login form section -->

		<!-- About-Us Start -->
		<section id="about-us">
			<div class="container mt-5 mb-5">
				<div class="row justify-content-center">
					<div class="col-md-6 my-auto">
						<h1 class="text-start">
							What is <span id="doremind">Do-re-mind</span> ?
						</h1>
						<p class="about-us-desc">
							<span id="doremind">Do-re-mind</span> is a simple web based
							Todolist app aimed to ensure your productivity. We know that in
							this flashy and fast era, being focus is not easy.
							<span id="doremind">Do-re-mind</span> helps you to get your
							productivity seamlessly on point. Say goodbye to distraction !
						</p>
					</div>
					<div class="col-md-6">
						<img src="./assets/image/about-us-section/splash.png" alt="" />
					</div>
				</div>
			</div>
		</section>

		<!-- About Us End-->
		<!-- Features Section -->
		<section id="features">
			<div data-aos="fade-up" class="container">
				<div class="row justify-content-center">
					<h1 class="p-4 text-center">Features</h1>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<img
								src="./assets/image/features-section/organizetask.png"
								class="card-img-top"
								alt="..."
							/>
							<div class="card-body">
								<h5 class="card-title">Flexible Task Organizing</h5>
								<a
									class="btn bttn"
									type="button"
									data-toggle="collapse"
									data-target="#collapseExample1"
									aria-expanded="false"
									aria-controls="collapseExample"
									>See Details >
								</a>
								<div class="collapse" id="collapseExample1">
									<div class="card card-body justify-content-center">
										<div class="row pt-2mx-auto my-auto">
											<p class="card-description">
												<span id="doremind">Do-re-mind</span> is a web-based
												todolist app. Access your task anywhere at anytime.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img
								src="./assets/image/features-section/schedulereminder.png"
								class="card-img-top"
								alt="..."
							/>
							<div class="card-body">
								<h5 class="card-title">Scheduled Reminder</h5>
								<a
									class="btn bttn"
									type="button"
									data-toggle="collapse"
									data-target="#collapseExample2"
									aria-expanded="false"
									aria-controls="collapseExample"
									>See Details >
								</a>
								<div class="collapse" id="collapseExample2">
									<div class="card card-body justify-content-center">
										<div class="row pt-2mx-auto my-auto">
											<p class="card-description">
												Get a reminder notification sent right into your email
												to ensure your productivity.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img
								src="./assets/image/features-section/filterbytag.png"
								class="card-img-top img-thumb"
								alt="..."
							/>
							<div class="card-body">
								<h5 class="card-title">Filter by Categories</h5>
								<a
									class="btn bttn"
									type="button"
									data-toggle="collapse"
									data-target="#collapseExample3"
									aria-expanded="false"
									aria-controls="collapseExample"
									>See Details ></a
								>
								<div class="collapse" id="collapseExample3">
									<div class="card card-body justify-content-center">
										<div class="row mx-auto my-auto">
											<p class="card-description">
												Having too many task can be stressing. Filter them by
												categories, tags, or date.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Features Section end -->

		<!-- Testimonies section -->
		<section id="testimonies" class="carousel-wrapper mt-5">
			<h2 class="carousel-title text-center fw-bold mb-4">What our customer says</h2>
			<div
				id="carouselExampleCaptions"
				class="carousel slide"
				data-bs-ride="false"
			>
				<div class="carousel-indicators">
					<button
						type="button"
						data-bs-target="#carouselExampleCaptions"
						data-bs-slide-to="0"
						class="active"
						aria-current="true"
						aria-label="Slide 1"
					></button>
					<button
						type="button"
						data-bs-target="#carouselExampleCaptions"
						data-bs-slide-to="1"
						aria-label="Slide 2"
					></button>
					<button
						type="button"
						data-bs-target="#carouselExampleCaptions"
						data-bs-slide-to="2"
						aria-label="Slide 3"
					></button>
					<button
						type="button"
						data-bs-target="#carouselExampleCaptions"
						data-bs-slide-to="3"
						aria-label="Slide 4"
					></button>
					<button
						type="button"
						data-bs-target="#carouselExampleCaptions"
						data-bs-slide-to="4"
						aria-label="Slide 5"
					></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img
							src="assets/image/cover1.jpg"
							class="d-block w-100"
							alt="..."
						/>
						<div class="carousel-caption d-none d-md-block">
							<h5>Ramona Erickson</h5>
							<p>
								"I used to have a hard time staying organized and on top of my
								tasks, but since I started using Do-re-mind, I feel so much more
								productive and in control. It's been a lifesaver!"
							</p>
						</div>
					</div>
					<div class="carousel-item">
						<img
							src="assets/image/cover2.jpg"
							class="d-block w-100"
							alt="..."
						/>
						<div class="carousel-caption d-none d-md-block">
							<h5>Matt Schultz</h5>
							<p>
								"I love how easy it is to add new tasks and prioritize them in
								Do-re-mind. It's helped me stay on track and make sure I don't
								miss any important deadlines."
							</p>
						</div>
					</div>
					<div class="carousel-item">
						<img
							src="assets/image/cover3.jpg"
							class="d-block w-100"
							alt="..."
						/>
						<div class="carousel-caption d-none d-md-block">
							<h5>Iris Chasey</h5>
							<p>
								"I'm a busy woman with a lot on my plate, and Do-re-mind has
								been a game-changer for me. It's helped me keep track of all the
								things I need to do for my family, and I never have to worry
								about forgetting something important."
							</p>
						</div>
					</div>
					<div class="carousel-item">
						<img
							src="assets/image/cover4.jpg"
							class="d-block w-100"
							alt="..."
						/>
						<div class="carousel-caption d-none d-md-block">
							<h5>Louise Hudson</h5>
							<p>
								"I'm not the most organized person, but Do-re-mind makes it so
								easy to keep track of my tasks and stay on top of things. I love
								being able to see everything in one place, and the reminders
								really help me stay on track."
							</p>
						</div>
					</div>
					<div class="carousel-item">
						<img
							src="assets/image/cover5.jpg"
							class="d-block w-100"
							alt="..."
						/>
						<div class="carousel-caption d-none d-md-block">
							<h5>Carl Dawson</h5>
							<p>
								"I've tried a few different to-do apps, but this one is by far
								my favorite. It's user-friendly, has all the features I need,
								and it even integrates with my calendar. I can't recommend it
								enough!"
							</p>
						</div>
					</div>
				</div>
				<button
					class="carousel-control-prev"
					type="button"
					data-bs-target="#carouselExampleCaptions"
					data-bs-slide="prev"
				>
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button
					class="carousel-control-next"
					type="button"
					data-bs-target="#carouselExampleCaptions"
					data-bs-slide="next"
				>
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</section>
		<!-- testimonies section -->

		<!-- contact section -->
		<footer id="contact-us" class="footer-section">
			<div class="container">
				<div class="footer-cta pt-5 pb-5">
					<div class="row">
						<div class="col-xl-4 col-md-4 mb-30">
							<div class="single-cta">
								<i class="fas fa-map-marker-alt"></i>
								<div class="cta-text">
									<h4>Find us</h4>
									<span>Jamin Ginting Street, Medan</span>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-4 mb-30">
							<div class="single-cta">
								<i class="fas fa-phone"></i>
								<div class="cta-text">
									<h4>Call us</h4>
									<span>+62 813 8439 9901</span>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-4 mb-30">
							<div class="single-cta">
								<i class="far fa-envelope-open"></i>
								<div class="cta-text">
									<h4>Mail us</h4>
									<span>Doremind@gmail.com</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-content pt-5 pb-5">
					<div class="row">
						<div class="col-xl-4 col-lg-4 mb-50">
							<div class="footer-widget">
								<div class="footer-logo">
									<a href="index.html" class="footer-title"
										><h2><span id="doremind">Do-re-mind</span></h2></a
									>
								</div>
								<div class="footer-text">
									<p>
										Welcome to Do-re-mind! We know how busy and overwhelming
										life can get, and that's why we created this tool to help
										you stay organized and on top of your tasks. With our app,
										you can easily add new items to your to-do list, prioritize
										them, set reminders, and track your progress. Give it a try
										and see how much easier it can make your life!
									</p>
								</div>
								<div class="footer-social-icon">
									<span>Follow us</span>
									<a href="#"
										><i class="fa-brands fa-facebook-f facebook-bg"></i
									></a>
									<a href="#"
										><i class="fa-brands fa-twitter twitter-bg"></i
									></a>
									<a href="#"
										><i class="fa-brands fa-instagram instagram-bg"></i
									></a>
									<a href="#"><i class="fa-brands fa-tiktok tiktok-bg"></i></a>
									<a href="#"
										><i class="fa-brands fa-linkedin-in linkedin-bg"></i
									></a>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6 mb-30">
							<div class="footer-widget">
								<div class="footer-widget-heading">
									<h3>Useful Links</h3>
								</div>
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">about</a></li>
									<li><a href="#">services</a></li>
									<li><a href="#">portfolio</a></li>
									<li><a href="#">Contact</a></li>
									<li><a href="#">About us</a></li>
									<li><a href="#">Our Services</a></li>
									<li><a href="#">Expert Team</a></li>
									<li><a href="#">Contact us</a></li>
									<li><a href="#">Latest News</a></li>
								</ul>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6 mb-50">
							<div class="footer-widget">
								<div class="footer-widget-heading">
									<h3>Subscribe</h3>
								</div>
								<div class="footer-text mb-25">
									<p>
										Don’t miss to subscribe to our new feeds, kindly fill the
										form below.
									</p>
								</div>
								<div class="subscribe-form">
									<form action="#">
										<input type="text" placeholder="Email Address" />
										<button><i class="fab fa-telegram-plane"></i></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright-area">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-6 text-center text-lg-left">
							<div class="copyright-text">
								<p>
									Copyright &copy; 2022, All Right Reserved
									<a href="">Do-re-mind</a>
								</p>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
							<div class="footer-menu">
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">Terms</a></li>
									<li><a href="#">Privacy</a></li>
									<li><a href="#">Policy</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- contact section -->

		<!-- Optional JavaScript; choose one of the two! -->

		<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
		<script
			src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
			integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
			crossorigin="anonymous"
		></script>

		<!-- Option 2: Separate Popper and Bootstrap JS -->
		<!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
	</body>
</html>
