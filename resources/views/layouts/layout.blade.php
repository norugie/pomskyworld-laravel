<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8" />
	<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport">

	<!-- Open Graph -->
	<meta property="og:title" content="Pomskyworld - Adipisicing pariatur anim officia et." />
	<meta property="og:url" content="https://pomskyworld.ca" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="https://pomskyworld.ca/images/logo.png" />
	<meta property="og:description" content="Aliqua velit aliquip nisi dolore labore eiusmod labore eiusmod laboris exercitation ea." />

	<!-- Twitter Theme -->
	<meta name="twitter:widgets:theme" content="light">
	
	<!-- Title &amp; Favicon -->
	<title>Pomskyworld - Adipisicing pariatur anim officia et.</title>
	<link rel="shortcut icon" type="image/x-icon" href="/images/logo.png">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700%7CHind+Madurai:400,500&amp;subset=latin-ext" rel="stylesheet">
	
	<!-- CSS -->
	<link rel="stylesheet" href="css/core.min.css" />
	<link rel="stylesheet" href="css/skin.css" />

	<!-- Author -->
	<link rel="author" href="/humans.txt">

	<!--[if lt IE 9]>
    	<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body class="shop blog home-page">

	<!-- Side Navigation Menu -->
	<aside class="side-navigation-wrapper enter-right" data-no-scrollbar data-animation="push-in">
		<div class="side-navigation-scroll-pane">
			<div class="side-navigation-inner">
				<div class="side-navigation-header">
					<div class="navigation-hide side-nav-hide">
						<a href="javascript:void(0);">
							<span class="icon-cancel medium"></span>
						</a>
					</div>
				</div>
				<nav class="side-navigation nav-block">
					<ul>
						<li class="current">
							<a href="/">Home</a>
						</li>
						<li>
							<a href="/pomsky" class="contains-sub-menu">What is a Pomsky?</a>
						</li>
						<li>
							<a href="/photos">Photos</a>
                        </li>
						<li>
							<a href="/available-puppies" class="contains-sub-menu">Puppies</a>
							<ul class="sub-menu">
								<li>
									<a href="/available-puppies">Available Puppies</a>
								</li>
								<li>
									<a href="/previous-puppies">Previous Puppies</a>
								</li>
								<li>
									<a href="/testimonials">Testimonials</a>
								</li>
							</ul>
                        </li>
                        <li>
							<a href="/parents">Parents</a>
						</li>
						<li>
							<a href="/guarantee" class="contains-sub-menu">Adoptions</a>
							<ul class="sub-menu">
								<li>
									<a href="/guarantee">Health Guarantee</a>
								</li>
								<li>
									<a href="/prices">Adoption Prices</a>
								</li>
								<li>
									<a href="/qualifications">Adoption Qualifications</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="/about" class="contains-sub-menu">Info</a>
							<ul class="sub-menu">
                                <li>
                                    <a href="/about">About Us</a>
                                </li>
								<li>
									<a href="/faq">Frequently Asked Questions</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="/contact">Contact Us</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</aside>
	<!-- Side Navigation Menu End -->

	<div class="wrapper reveal-side-navigation">
		<div class="wrapper-inner">

            <!-- Header -->
            @if( Request::is( '/' ) )
                {{-- Navbar for index page --}}
                <header class="header header-absolute header-fixed-on-mobile header-transparent" data-helper-in-threshold="200" data-helper-out-threshold="500" data-sticky-threshold="200" data-bkg-threshold="100" data-compact-threshold="100">
                    <div class="header-inner">
                        <div class="row nav-bar">
                            <div class="column width-12 nav-bar-inner">
                                <div class="logo">
                                    <div class="logo-inner">
                                        <a href="/"><img src="images/logo-dark.png" alt="Pomskyworld Logo" /></a>
                                        <a href="/"><img src="images/logo.png" alt="Pomskyworld Logo" /></a>
                                    </div>
                                </div>
                                <nav class="navigation nav-block secondary-navigation nav-right">
                                    <ul>
                                        <li class="aux-navigation hide">
                                            <!-- Aux Navigation -->
                                            <a href="#" class="navigation-show side-nav-show nav-icon">
                                                <span class="icon-menu"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <nav class="navigation nav-block primary-navigation nav-right">
                                    <ul>
                                        <li class="current">
                                            <a href="/">Home</a>
                                        </li>
                                        <li>
                                            <a href="/pomsky">What is a Pomsky?</a>
                                        </li>
                                        <li>
                                            <a href="/photos">Photos</a>
                                        </li>
                                        <li class="contains-sub-menu">
                                            <a href="/available-puppies">Puppies</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="/available-puppies">Available Puppies</a>
                                                </li>
                                                <li>
                                                    <a href="/previous-puppies">Previous Puppies</a>
                                                </li>
                                                <li>
                                                    <a href="/testimonials">Testimonials</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/parents">Parents</a>
                                        </li>
                                        <li class="contains-sub-menu">
                                            <a href="/guarantee">Adoptions</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="/guarantee">Health Guarantee</a>
                                                </li>
                                                <li>
                                                    <a href="/prices">Adoption Prices</a>
                                                </li>
                                                <li>
                                                    <a href="/qualifications">Adoption Qualifications</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="contains-sub-menu">
                                            <a href="/about">Info</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="/about">About Us</a>
                                                </li>
                                                <li>
                                                    <a href="/faq">Frequently Asked Questions</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/contact">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </header>
            @else
                {{-- Navbar for non-index page --}}
                <header class="header header-relative header-fixed-on-mobile nav-dark" data-bkg-threshold="100" data-sticky-threshold="0">
                    <div class="header-inner">
                        <div class="row nav-bar">
                            <div class="column width-12 nav-bar-inner">
                                <div class="logo">
                                    <div class="logo-inner">
                                        <a href="/"><img src="images/logo-dark.png" alt="Pomskyworld Logo" /></a>
                                        <a href="/"><img src="images/logo.png" alt="Pomskyworld Logo" /></a>
                                    </div>
                                </div>
                                <nav class="navigation nav-block secondary-navigation nav-right">
                                    <ul>
                                        <li class="aux-navigation hide">
                                            <!-- Aux Navigation -->
                                            <a href="#" class="navigation-show side-nav-show nav-icon">
                                                <span class="icon-menu"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <nav class="navigation nav-block primary-navigation nav-right">
                                    <ul>
                                        <li class="current">
                                            <a href="/">Home</a>
                                        </li>
                                        <li>
                                            <a href="/pomsky">What is a Pomsky?</a>
                                        </li>
                                        <li>
                                            <a href="/photos">Photos</a>
                                        </li>
                                        <li class="contains-sub-menu">
                                            <a href="/available-puppies">Puppies</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="/available-puppies">Available Puppies</a>
                                                </li>
                                                <li>
                                                    <a href="/previous-puppies">Previous Puppies</a>
                                                </li>
                                                <li>
                                                    <a href="/testimonials">Testimonials</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/parents">Parents</a>
                                        </li>
                                        <li class="contains-sub-menu">
                                            <a href="/guarantee">Adoptions</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="/guarantee">Health Guarantee</a>
                                                </li>
                                                <li>
                                                    <a href="/prices">Adoption Prices</a>
                                                </li>
                                                <li>
                                                    <a href="/qualifications">Adoption Qualifications</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="contains-sub-menu">
                                            <a href="/about">Info</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="/about">About Us</a>
                                                </li>
                                                <li>
                                                    <a href="/faq">Frequently Asked Questions</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/contact">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </header>
            @endif
			<!-- Header End -->

			<!-- Content -->
			<div class="content clearfix">

                @yield ( 'content' )

			</div>
			<!-- Content End -->

			<!-- Footer -->
			<footer class="footer footer-light">
				<div class="footer-top">
					<div class="row flex">
						<div class="column width-12">
							<div class="row flex two-columns-on-tablet">
								<div class="column width-4">
									<div class="widget">
										<div class="logo mb-20">
											<a href="/"><img src="images/logo-dark.png" alt="Pomskyworld Logo" /></a>
										</div>
										<address>
											POMSKYWORLD &amp; Co, Inc.<br>
											1234 Placeholder St., Kitimat<br>
											British Columbia, Canada<br>
											V8G 1A2
										</address>
									</div>
								</div>
								<div class="column width-8">
									<div class="row flex two-columns-on-tablet">
										<div class="column width-4">
											<div class="widget">
												<h3 class="widget-title mb-15">Discover</h3>
												<ul>
													<li><a href="/about">About us</a></li>
													<li><a href="/privacy">Privacy Notice</a></li>
												</ul>
											</div>
										</div>
										<div class="column width-4">
											<div class="widget">
												<h3 class="widget-title mb-15">Support</h3>
												<ul>
													<li><a href="/contact">Contact Us</a></li>
													<li><a href="/faq">Frequently Asked Questions</a></li>
												</ul>
											</div>
										</div>
										<div class="column width-4">
											<div class="widget">
												<h3 class="widget-title mb-15">Socialize</h3>
												<ul class="social-list list-horizontal">
													<li><a href="#"><span class="icon-twitter color-blue-light medium"></span></a></li>
													<li><a href="#"><span class="icon-facebook color-blue-light medium"></span></a></li>
													<li><a href="#"><span class="icon-instagram color-blue-light medium"></span></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row flex">
						<div class="column width-12">
							<hr class="mb-10 mb-mobile-30">
						</div>
						<div class="column width-12">
							<p class="mb-0">
								© <script>document.write(new Date().getFullYear());</script>. POMSKYWORLD
							</p>
						</div>
					</div>
				</div>
			</footer>
			<!-- Footer End -->

		</div>
	</div>

	<!-- Js -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/timber.master.min.js"></script>
</body>
</html>