<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
			rel="stylesheet"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
		/>
		<link href="css/app.css" rel="stylesheet" />
		<title>@yield('title')</title>
		@vite('resources/js/app.js')
	</head>
	<body>
		<!-- header start -->
		<header id="navbar">
			<div class="navbar__container container">
				<div class="navbar__brand">
					<a href="{{ url('/') }}" class="navbar__brand-link">Donable</a>
				</div>
				<ul class="navbar__links">
					<li class="navbar__link-item">
						<a href="{{ url('/') }}" class="navbar__link">Home</a>
					</li>
					<li class="navbar__link-item">
						<a href="{{ url('charities') }}" class="navbar__link">Charities</a>
					</li>
					<li class="navbar__link-item">
						<a href="{{ url('about') }}" class="navbar__link">About</a>
					</li>
					<li class="navbar__link-item">
						<a href="{{ url('contact') }}" class="navbar__link">Contact</a>
					</li>
					<li class="navbar__link-item">
						<a href="{{ url('login') }}" class="navbar__link">Login</a>
					</li>
					<li class="navbar__link-item">
						<a href="{{ url('signup') }}" class="navbar__link">Signup</a>
					</li>
				</ul>
			</div>
		</header>
		<!-- header end -->

    <!-- content start -->
    @yield('content')
    <!-- content end -->

		<!-- footer start -->
		<footer id="footer">
			<div class="footer__container container">
				<div class="footer__top">
					<div class="footer__brand">
						<h3 class="footer__brand-title">Donable</h3>
						<p class="footer__brand-text">
							<!-- Lorem ipsum dolor sit amet consectetur adipisicing
							elit. Quisquam, voluptatum. -->
              Our mission is to make a positive impact on the lives of those in need, and it all starts with your generosity. Together, we can create a world where no one is left behind.
						</p>
					</div>
					<div class="footer__grid">
						<div class="footer__item">
							<h3 class="footer__item-title">Quick Links</h3>
							<ul class="footer__item-links">
								<li class="footer__item-link-item">
									<a href="{{ url('/') }}" class="footer__item-link"
										>Home</a
									>
								</li>
								<li class="footer__item-link-item">
									<a href="{{ url('charities') }}" class="footer__item-link"
										>Charities</a
									>
								</li>
								<li class="footer__item-link-item">
									<a href="{{ url('about') }}" class="footer__item-link"
										>About</a
									>
								</li>
							</ul>
						</div>
						<div class="footer__item">
							<h3 class="footer__item-title">Get In Touch</h3>
							<ul class="footer__item-links">
								<li class="footer__item-link-item">
									<a href="{{ url('contact') }}" class="footer__item-link"
										>Contact Us</a
									>
								</li>
								<li class="footer__item-link-item">
									<a href="#" class="footer__item-link"
										>Blog</a
									>
								</li>
							</ul>
						</div>
						<div class="footer__item">
							<h3 class="footer__item-title">Social</h3>
							<ul class="footer__item-links footer__item-social">
								<li class="footer__item-link-item">
									<a href="#" class="footer__item-link"
										><i class="fab fa-facebook-f"></i
									></a>
								</li>
								<li class="footer__item-link-item">
									<a href="#" class="footer__item-link"
										><i class="fab fa-twitter"></i
									></a>
								</li>
								<li class="footer__item-link-item">
									<a href="#" class="footer__item-link"
										><i class="fab fa-instagram"></i
									></a>
								</li>
								<li class="footer__item-link-item">
									<a href="#" class="footer__item-link"
										><i class="fab fa-youtube"></i
									></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer__bottom">
					<p class="footer__bottom-text">
						&copy; 2021 Donable. All Rights Reserved.
					</p>
					<p>
						Made with <i class="fas fa-heart"></i> by
						<span>Donable</span>
					</p>
				</div>
			</div>
		</footer>
		<!-- footer end -->
		
		<!-- script start -->
		<script src="{{ asset('js/dynamic-container-height.js') }}"></script>
		<!-- script end -->
	</body>
</html>
