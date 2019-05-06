<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
</head>

<!---
5 Page Outline Per Original Theme Sections:
Page 1: Home/Features
Page 2: Portfolio
Page 3: Pricing
Page 4: Team/Skills
Page 5: Clients/Contact
-links to different pages
-Scrollspy removed for active nav links
-->

<body>

<!--- Start Home section -->
<div id="home">

<?php $page = 'home';include 'includes/navbar.php'; ?>

<!--- Start Landing Page Image -->
<div class="landing">
	<div class="home-wrap">
        <div class="home-inner">
		</div>
    </div>
</div>
<!--- End Landing Page Image -->

<!--- Start Landing Page Caption -->
<div class="caption text-center">

	<div class="os-animation" data-animation="bounceInUp" data-delay=".6s">
		<h1>Welcome to Nuno</h1>
	</div>

	<div class="os-animation" data-animation="bounceInUp" data-delay=".8s">
		<h3>Animated Bootstrap Theme</h3>
	</div>
			
	<div class="os-animation" data-animation="bounceInUp" data-delay="1s">
		<a class="btn btn-outline-light btn-lg" href="#features">Get Started</a>
	</div>

</div>
<!--- End Landing Page Caption -->

	<!--- Bouncing Down Arrow -->
	<a class="down-arrow" href="#features">
		<div class="arrow bounce d-none d-md-block">
			<i class="fas fa-angle-down" aria-hidden="true"></i>
		</div>
	</a>

</div>
<!--- End Home Section -->

<!--- Start Features Section -->
<div id="features" class="offset">

<!---Start Animation -->
<div class="os-animation" data-animation="fadeInUp">
<div class="narrow text-center">
	<div class="col-12">
		<h1>Nuno Responsive Bootstrap Theme</h1>
		<p class="lead">Bootstrap is an open-source front-end library with HTML and CSS based designs.  This website is built with HTML5, CSS3 and Bootstrap 4.</p>
		<a class="btn btn-secondary btn-sm" href="contact-us.php">Request A Quote</a>
		<a class="btn btn-turquoise btn-sm" href="portfolio.php">See Our Portfolio</a>
	</div>
</div>
</div>
<!--- End Animation -->

<!--- Start Jumbotron -->
<div class="jumbotron">
<div class="narrow">

	<div class="os-animation" data-animation="fadeInUp">
		<h3 class="heading">Features</h3>
		<div class="heading-underline"></div>
	</div>

<div class="row">
	
	<div class="col-sm-6 col-md-4">
		<div class="os-animation" data-animation="fadeInLeft">
			<div class="feature">
				<span class="fa-layers fa-4x">
  					<i class="fa fa-circle"></i>
  					<i class="fas fa-mobile-alt fa-inverse" data-fa-transform="shrink-6 right-.25"></i>
				</span>
				<h3>Mobile Friendly</h3>
				<p>Nuno features a mobie friendly, responsive first website layout using Bootstrap.</p>
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-md-4">
		<div class="os-animation" data-animation="fadeInUp">
			<div class="feature">
				<span class="fa-layers fa-4x">
					<i class="fa fa-circle"></i>
					<i class="fas fa-desktop fa-inverse" data-fa-transform="shrink-8 left-1."></i>
				</span>
				<h3>Full Screen Landing</h3>
				<p>Using Bootstrap, the Nuno theme features a full screen carousel landing page.</p>
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-md-4">
		<div class="os-animation" data-animation="fadeInRight">
			<div class="feature">
				<span class="fa-layers fa-4x">
					<i class="fa fa-circle"></i>
					<i class="fas fa-play fa-inverse" data-fa-transform="shrink-.5 right-1.3"></i>
				</span>
				<h3>Custom Animation</h3>
				<p>Animate.css and Waypoints.js allow for smooth animations scrolling down the site.</p>
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-md-4">
		<div class="os-animation" data-animation="fadeInLeft">
			<div class="feature">
				<span class="fa-layers fa-4x">
					<i class="fa fa-circle"></i>
					<i class="fas fa-angle-double-down fa-inverse" data-fa-transform="shrink-5.5 down-.3"></i>
				</span>
				<h3>Parallax Scrolling</h3>
				<p>Fixed background images allow the theme to have content-filled parallax scrolling sections.</p>
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-md-4">
		<div class="os-animation" data-animation="fadeInUp">
			<div class="feature">
				<span class="fa-layers fa-4x">
					<i class="fa fa-circle"></i>
					<i class="fas fa-sliders-h fa-inverse" data-fa-transform="shrink-8.5 right-.2"></i>
				</span>
				<h3>Content Slider</h3>
				<p>Owl.Carousel.js makes navigating content sliders seamless with it's content carousel navigation.</p>
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-md-4">
		<div class="os-animation" data-animation="fadeInRight">
			<div class="feature">
				<span class="fa-layers fa-4x">
					<i class="fa fa-circle"></i>
					<i class="fab fa-wpforms fa-inverse" data-fa-transform="grow-6 right-.5"></i>
				</span>
				<h3>Contact Form</h3>
				<p>The Bootsrap HTML form will send directly to your email address using PHPMailer.php.</p>
			</div>
		</div>
	</div>

</div> <!--- End Row -->

</div> <!--- End Narrow -->
</div>
<!--- End Jumbotron -->

<!--- Start Fixed Background IMG Dark -->
<div class="fixed-background">

<div class="row dark">

	<div class=" col-12 os-animation" data-animation="fadeInUp">
		<h3 class="heading">Built With Care</h3>
		<div class="heading-underline"></div>
	</div>

	<div class="col-md-4">
	<div class="os-animation" data-animation="fadeInLeft">
		<h3>HTML 5</h3>
		<div class="feature">
			<span class="fa-layers fa-3x">
				<i class="fas fa-code"></i>
			</span>
		</div>
		<p class="lead">Built with the latest, HTML 5.</p>
	</div>
	</div>

	<div class="col-md-4">
	<div class="os-animation" data-animation="fadeInUp">
		<h3>BOOTSTRAP 4</h3>
		<div class="feature">
			<span class="fa-layers fa-3x">
				<i class="fas fa-bold"></i>
			</span>
		</div>
		<p class="lead">Built with the latest, Bootstrap 4.</p>
	</div>
	</div>

	<div class="col-md-4">
	<div class="os-animation" data-animation="fadeInRight">
		<h3>CSS 3</h3>
		<div class="feature">
			<span class="fa-layers fa-3x">
				<i class="fab fa-css3"></i>
			</span>
		</div>
		<p class="lead">Built with the latest, CSS 3.</p>
	</div>
	</div>

</div> <!--- End of Row Dark -->

	<div class="fixed-wrap">
		<div id="fixed">
		</div>
	</div>
	
</div>
<!--- End Fixed Background IMG Dark -->

</div>
<!--- End of Features Section -->

<!--- Start Portfolio grid -->
<div class="row">

<div class="os-animation" data-animation="fadeInUp">
<div class="narrow text-center">
	<div class="col-12">
		<p class="lead">Get in contact with us to see more of our great portfolio design work in addition to web development projects such as websites, apps and more!</p>
		<a class="btn btn-secondary btn-sm" href="contact-us.php">Get In Touch</a>
	</div>
</div>
</div>

</div>
<!--- End of Portfolio Section -->

<?php include 'includes/footer.php'; ?>

<?php include 'includes/scripts.php'; ?>

</body>
</html>