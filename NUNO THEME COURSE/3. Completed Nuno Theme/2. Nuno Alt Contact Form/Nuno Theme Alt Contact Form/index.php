<?php 
error_reporting(E_ALL ^ E_NOTICE); // hide all basic notices from PHP

//If the form is submitted
if(isset($_POST['submitted'])) {
	
	// require a name from user
	if(trim($_POST['contactName']) === '') {
		$nameError =  'Forgot your name!'; 
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}
	
	// need valid email
	if(trim($_POST['email']) === '')  {
		$emailError = 'Forgot your e-mail address.';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$emailError = 'Invalid email address!';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}
		
	// we need at least some content
	if(trim($_POST['comments']) === '') {
		$commentError = 'Forgot your message!';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}
		
	// upon no failure errors let's email now!
	if(!isset($hasError)) {
		
		$emailTo = 'email@gmail.com'; // ADD YOUR EMAIL ADDRESS HERE FOR CONTACT FORM!
		$subject = 'Submitted message from '.$name; // ADD YOUR EMAIL SUBJECT LINE HERE FOR CONTACT FORM!
		$sendCopy = trim($_POST['sendCopy']);
		$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
		$headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
        
        // set our boolean completion value to TRUE
		$emailSent = true;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nuno - Responsive Bootstrap Theme</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/lightbox.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
	<link rel="stylesheet" href="css/arrow.css">
	<link rel="stylesheet" href="css/fixed.css">
	<link rel="stylesheet" href="css/waypoints.css">
</head>

<body data-spy="scroll" data-target="#navbarResponsive">

<!--- Start Home section -->
<div id="home">

<!--- Navigation -->
<nav class="navbar navbar-expand-lg fixed-top">
<div class="container-fluid">
	<a class="navbar-brand" href="#"><img src="img/nuno.png" alt=""></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="custom-toggler-icon"><i class="fas fa-bars"></i></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="#home">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#features">Features</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#portfolio">Portfolio</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#pricing">Pricing</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#team">Team</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#skills">Skills</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#clients">Clients</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#contact">Contact</a>
			</li>
		</ul>
	</div>
</div>
</nav>
<!--- End Navigation -->

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
		<a class="btn btn-secondary btn-sm" href="#contact">Request A Quote</a>
		<a class="btn btn-turquoise btn-sm" href="#portfolio">See Our Portfolio</a>
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

<!--- Start Portfolio Section -->
<div id="portfolio" class="offset">

<div class="row padding">

	<div class="col-12 os-animation" data-animation="fadeInUp">
		<h3 class="heading">Portfolio</h3>
		<div class="heading-underline"></div>
	</div>

</div> <!--- End Row -->

<!--- Start Portfolio Grid -->
<div class="container-fluid">
<div class="row no-padding">
	
	<div class="col-sm-6 col-md-3">
	<div class="os-animation" data-animation="bounceInLeft" data-delay=".2s">
		<div class="portfolio-item">
			<a href="img/portfolio/1.png" data-lightbox="example-set" data-title="My Portfolio Image Description">
				<img class="example-image" src="img/portfolio/1.png" alt="">
			</a>
		</div>
	</div>
	</div>

	<div class="col-sm-6 col-md-3">
	<div class="os-animation" data-animation="bounceInLeft">
		<div class="portfolio-item">
			<a href="img/portfolio/2.png" data-lightbox="example-set">
				<img class="example-image" src="img/portfolio/2.png" alt="">
			</a>
		</div>
	</div>
	</div>

	<div class="col-sm-6 col-md-3">
	<div class="os-animation" data-animation="bounceInRight">
		<div class="portfolio-item">
			<a href="img/portfolio/3.png" data-lightbox="example-set">
				<img class="example-image" src="img/portfolio/3.png" alt="">
			</a>
		</div>
	</div>
	</div>

	<div class="col-sm-6 col-md-3">
	<div class="os-animation" data-animation="bounceInRight" data-delay=".2s">
		<div class="portfolio-item">
			<a href="img/portfolio/4.png" data-lightbox="example-set">
				<img class="example-image" src="img/portfolio/4.png" alt="">
			</a>
		</div>
	</div>
	</div>

	<div class="col-sm-6 col-md-3">
	<div class="os-animation" data-animation="bounceInLeft" data-delay=".2s">
		<div class="portfolio-item">
			<a href="img/portfolio/5.png" data-lightbox="example-set">
				<img class="example-image" src="img/portfolio/5.png" alt="">
			</a>
		</div>
	</div>
	</div>

	<div class="col-sm-6 col-md-3">
	<div class="os-animation" data-animation="bounceInLeft">
		<div class="portfolio-item">
			<a href="img/portfolio/6.png" data-lightbox="example-set">
				<img class="example-image" src="img/portfolio/6.png" alt="">
			</a>
		</div>
	</div>
	</div>

	<div class="col-sm-6 col-md-3">
	<div class="os-animation" data-animation="bounceInRight">
		<div class="portfolio-item">
			<a href="img/portfolio/7.png" data-lightbox="example-set">
				<img class="example-image" src="img/portfolio/7.png" alt="">
			</a>
		</div>
	</div>
	</div>

	<div class="col-sm-6 col-md-3">
	<div class="os-animation" data-animation="bounceInRight" data-delay=".2s">
		<div class="portfolio-item">
			<a href="img/portfolio/8.png" data-lightbox="example-set">
				<img class="example-image" src="img/portfolio/8.png" alt="">
			</a>
		</div>
	</div>
	</div>

</div> <!--- End Row -->
</div> <!--- End Container -->
<!--- End Portfolio Grid -->

<div class="os-animation" data-animation="fadeInUp">
<div class="narrow text-center">
	<div class="col-12">
		<p class="lead">Get in contact with us to see more of our great portfolio design work in addition to web development projects such as websites, apps and more!</p>
		<a class="btn btn-secondary btn-sm" href="#contact">Get In Touch</a>
	</div>
</div>
</div>

</div>
<!--- End of Portfolio Section -->

<!--- Start Pricing Section -->
<div id="pricing" class="offset">

<!--- Start Jumbotron -->
<div class="jumbotron">
<div class="narrow">

	<div class="os-animation" data-animation="fadeInUp">
		<h3 class="heading">Pricing</h3>
		<div class="heading-underline"></div>
	</div>

<!--- Start Pricing Columns -->
<div class="row justify-content-md-center">

	<div class="col-md-6 col-lg-4">
	<div class="os-animation" data-animation="fadeInLeft">
		<div class="pricing-column text-center">
			<h3>BASIC</h3>
			<p>The Basic Plan, the best plan to get you started off.</p>
			<div class="pricing-features">
				<h4><span class="item">Domain Names</span>: 1</h4>
				<h4><span class="item">Email Addresses</span>: 1</h4>
				<h4><span class="item">Hard Drive</span>: 50GB</h4>
			</div>
			<h1>$49</h1>
			<a class="btn btn-secondary btn-sm" href="#contact">Buy Now</a>
		</div>
	</div>
	</div>

	<div class="col-md-6 col-lg-4">
	<div class="os-animation" data-animation="fadeInUp">
		<div class="pricing-column text-center">
			<div class="ribbon">Best Value</div>
			<h3>PRO</h3>
			<p>The Pro Plan, the best overall value you can get.</p>
			<div class="pricing-features">
				<h4><span class="item">Domain Names</span>: 5</h4>
				<h4><span class="item">Email Addresses</span>: 3</h4>
				<h4><span class="item">Hard Drive</span>: 100GB</h4>
			</div>
			<h1>$99</h1>
			<a class="btn btn-turquoise btn-sm" href="#contact">Buy Now</a>
		</div>
	</div>
	</div>

	<div class="col-md-6 col-lg-4">
	<div class="os-animation" data-animation="fadeInRight">
		<div class="pricing-column text-center">
			<h3>PREMIUM</h3>
			<p>Go Premium if you need a little extra space.</p>
			<div class="pricing-features">
				<h4><span class="item">Domain Names</span>: 10</h4>
				<h4><span class="item">Email Addresses</span>: 5</h4>
				<h4><span class="item">Hard Drive</span>: 150GB</h4>
			</div>
			<h1>$149</h1>
			<a class="btn btn-secondary btn-sm" href="#contact">Buy Now</a>
		</div>
	</div>
	</div>

</div>
<!--- End Pricing Columns -->

</div> <!--- End Narrow -->
</div>
<!--- End Jumbotron -->

</div>
<!--- End of Pricing Section -->

<!--- Start Team Section -->
<div id="team" class="offset">

<!--- Start Fixed Background IMG Light -->
<div class="fixed-background">

<div class="row light">

	<div class="col-12 os-animation" data-animation="fadeInUp">
		<h3 class="heading">Meet the Team</h3>
		<div class="heading-underline"></div>
	</div>

	<div class="col-md-12">
		<div class="os-animation" data-animation="fadeInUp">
		<div id="team-slider" class="owl-carousel owl-theme">

			<div class="card text-center">
				<img class="card-img-top" src="img/team/team1.png" alt="">
				<div class="card-body">
					<h4>John Lee</h4>
					<h5>CEO</h5>
					<p>John is an entrepreneur with almost 20 years of experience.</p>
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-linkedin"></i></a>
				</div>
			</div>

			<div class="card text-center">
				<img class="card-img-top" src="img/team/team2.png" alt="">
				<div class="card-body">
					<h4>Jessica Miller</h4>
					<h5>President</h5>
					<p>John has over 10 years of experience in a technology role.</p>
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-linkedin"></i></a>
				</div>
			</div>

			<div class="card text-center">
				<img class="card-img-top" src="img/team/team3.png" alt="">
				<div class="card-body">
					<h4>Charles Davis</h4>
					<h5>Vice President</h5>
					<p>Charles went to business school and worked his way up the ladder.</p>
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-linkedin"></i></a>
				</div>
			</div>

			<div class="card text-center">
				<img class="card-img-top" src="img/team/team4.png" alt="">
				<div class="card-body">
					<h4>Cindy Wilson</h4>
					<h5>CFO</h5>
					<p>Cindy has an established financial operations background.</p>
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-linkedin"></i></a>
				</div>
			</div>

		</div> <!--- End Team Slider -->
		</div> <!--- End Animation -->
	</div> <!--- End col-md-12 -->

</div> <!--- End of Row Light -->

	<div class="fixed-wrap">
		<div id="fixed-2">
		</div>
	</div>

</div>
<!--- End Fixed Background IMG Light -->

</div>
<!--- End Team Section -->

<!--- Start Skills Section -->
<div id="skills" class="offset">

<!--- Start Jumbotron -->
<div class="jumbotron">
<div class="narrow">

	<div class="col-12 os-animation" data-animation="fadeInUp">
		<h3 class="heading">Our Skills</h3>
		<div class="heading-underline"></div>
	</div>

	<div class="os-animation" data-animation="fadeInUp">
	<div class="row text-center">

		<div class="col-sm-6 col-md-3">
			<div class="skill">
				<span class="fa-layers fa-4x">
					<i class="fas fa-clock"></i>
				</span>
				<h3><span class="counter">457</span></h3>
				<p>Class Minutes</p>
			</div>
		</div>

		<div class="col-sm-6 col-md-3">
			<div class="skill">
				<span class="fa-layers fa-4x">
					<i class="fab fa-codepen"></i>
				</span>
				<h3><span class="counter">199</span></h3>
				<p>Web Dev Files</p>
			</div>
		</div>

		<div class="col-sm-6 col-md-3">
			<div class="skill">
				<span class="fa-layers fa-4x">
					<i class="fas fa-users" data-fa-transform="left-2"></i>
				</span>
				<h3><span class="counter">365</span></h3>
				<p>24/7 Support</p>
			</div>
		</div>

		<div class="col-sm-6 col-md-3">
			<div class="skill">
				<span class="fa-layers fa-4x">
					<i class="fas fa-cloud-download-alt" data-fa-transform="left-1"></i>
				</span>
				<h3><span class="counter">101</span></h3>
				<p>Resources</p>
			</div>
		</div>

	</div> <!--- End of Row -->
	</div> <!--- End of Animation -->

	<div class="os-animation" data-animation="fadeInUp">
	<div class="narrow text-center">
		<div class="col-12">
			<p class="lead">Want to learn more about our design and development skills?</p>
			<a class="btn btn-turquoise btn-sm" href="#contact">Contact Us</a>
		</div>
	</div>
	</div>

</div> <!--- End Narrow -->
</div> <!--- End Jumbotron -->

</div>
<!--- End of Skills Section -->

<!--- Start Clients Section -->
<div id="clients" class="offset">

<div class="container-fluid">
<div class="row padding">

	<div class="col-12 os-animation" data-animation="fadeInUp">
		<h3 class="heading">Our Clients</h3>
		<div class="heading-underline"></div>
	</div>

	<div class="col-md-12">
		<div class="os-animation" data-animation="fadeInUp">
		<div id="clients-slider" class="owl-carousel owl-theme">

			<div class="row clients">
				<div class="col-md-4">
					<img src="img/clients/client1.png" alt="">
				</div>
				<div class="col-md-8">
					<blockquote>
						<i class="fas fa-quote-left"></i>
						I see Nuno support as more of a partner to my company than a resource. I can pick up the phone and talk to anyone at any time and the way that they interact with us as a business makes it really simple.
						<hr class="clients-hr">
						<cite>&#8212; Eric, Small Business Owner</cite>
					</blockquote>
				</div>
			</div>

			<div class="row clients">
				<div class="col-md-4">
					<img src="img/clients/client2.png" alt="">
				</div>
				<div class="col-md-8">
					<blockquote>
						<i class="fas fa-quote-left"></i>
						The great thing about Nuno is it's not just a design, it's a responsive Bootstrap theme with animation. Nuno's layout is seamless the smooth parallax scrolling and a pop-up portfolio section for my images.
						<hr class="clients-hr">
						<cite>&#8212; Rachel, Professional Photographer</cite>
					</blockquote>
				</div>
			</div>	

			<div class="row clients">
				<div class="col-md-4">
					<img src="img/clients/client3.png" alt="">
				</div>
				<div class="col-md-8">
					<blockquote>
						<i class="fas fa-quote-left"></i>
						This theme is fantastic!  It has all of the great website elements found throughout professional templates.  I've learned a lot through developing and designing it while adding my own touches to the design.
						<hr class="clients-hr">
						<cite>&#8212; Ricky, Aspiring Developer</cite>
					</blockquote>
				</div>
			</div>

		</div> <!--- End Clients Slider -->
		</div> <!--- End Animation -->
	</div> <!--- End col-md-12 -->

</div> <!--- End of Row -->
</div> <!--- End of Container -->

</div>
<!--- End of Clients Section -->

<!--- Start Contact Section -->
<div id="contact" class="offset">

<footer>
<div class="row">

	<div class="col-md-5">
		<img src="img/nuno.png" alt="">
		<p>At our core is a collection of design and development solutions that represent everything your business needs to compete in the modern marketplace.</p>
		<strong>Our Location</strong>
		<p>100 Street Name<br/>Our City, AA 10000</p>
		<strong>Contact Info</strong>
		<p>(888) 888-8888<br>email@nuno.com</p>
		<a href="#"><i class="fab fa-facebook-square"></i></a>
		<a href="#"><i class="fab fa-twitter-square"></i></a>
		<a href="#"><i class="fab fa-instagram"></i></a>
		<a href="#"><i class="fab fa-reddit-square"></i></a>
		<a href="#"><i class="fab fa-linkedin"></i></a>
	</div>

	<div class="col-md-7">
		<h3>Contact Us</h3>
		
<!-- Start Contact Form -->
	<div id="contact-area">
	<div class="section">
		<div class="container content">
	        <?php if(isset($emailSent) && $emailSent == true) { ?>
                <h5 class="info">Thanks! Your email has been delivered!</h5>
            <?php } else { ?>		
				</div>	
				<div id="contact-form">
					<?php if(isset($hasError) || isset($captchaError) ) { ?>
                        <p class="alert">Error submitting the form</p>
                    <?php } ?>
				
					<form id="contact-us" action="index.php#bottom" method="post">
						<div class="formblock">
							<input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="txt requiredField" placeholder="Enter your name." />
							<?php if($nameError != '') { ?>
								<br /><span class="error"><?php echo $nameError;?></span> 
							<?php } ?>
						</div>
                        <div class="clearfix"></div>
						<div class="formblock">
							<input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="txt requiredField email" placeholder="Enter your email." />
							<?php if($emailError != '') { ?>
								<br /><span class="error"><?php echo $emailError;?></span>
							<?php } ?>
						</div>
                        <div class="clearfix"></div>
						<div class="formblock">
							 <textarea name="comments" id="commentsText" class="txtarea requiredField" placeholder="Add your message." rows="4"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
							<?php if($commentError != '') { ?>
								<br /><span class="error"><?php echo $commentError;?></span> 
							<?php } ?>
						</div>
                      <div class="clearfix"></div>  
							<button name="submit" type="submit" class="subbutton btn btn-outline-light">SEND MESSAGE</button>
							<input type="hidden" name="submitted" id="submitted" value="true" />
					</form>			
			<?php } ?>
		</div>
    </div>
<script>
	<!--//--><![CDATA[//><!--
	$(document).ready(function() {
		$('form#contact-us').submit(function() {
			$('form#contact-us .error').remove();
			var hasError = false;
			$('.requiredField').each(function() {
				if($.trim($(this).val()) == '') {
					var labelText = $(this).prev('label').text();
					$(this).parent().append('<span class="error">Forgot your '+labelText+'!</span>');
					$(this).addClass('inputError');
					hasError = true;
				} else if($(this).hasClass('email')) {
					var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					if(!emailReg.test($.trim($(this).val()))) {
						var labelText = $(this).prev('label').text();
						$(this).parent().append('<span class="error">Sorry! Invalid '+labelText+'!</span>');
						$(this).addClass('inputError');
						hasError = true;
					}
				}
			});
			if(!hasError) {
				var formInput = $(this).serialize();
				$.post($(this).attr('action'),formInput, function(data){
					$('form#contact-us').slideUp("fast", function() {				   
						$(this).before('<p class="tick"><h3>Thanks! Your email has been delivered!</h3></p>');
					});
				});
			}
			
			return false;	
		});
	});
	//-->!]]>
</script>
	</div>
<!-- End Contact Form -->

	</div>

	<hr class="socket">
	&copy; Nuno Theme.

</div> <!--- End of Row -->
</footer> <!--- End of Footer -->

</div>
<!--- End of Contact Section -->

<!--- Top Scroll -->
<a href="#home" class="top-scroll">
	<i class="fas fa-angle-up"></i>
</a>
<!--- End of Top Scroll -->

<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.8.1/js/all.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/waypoints.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.counterup.js"></script>
<script src="js/validator.js"></script>
<!--- End of Script Source Files -->

<!--- Reload Page After Contact Form Submit at Bottom of Page -->
<div id="bottom"></div>
</body>
</html>