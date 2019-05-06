<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>

<?php $page = 'contact-us';include 'includes/navbar-solid.php'; ?>

<div id="title-heading">
<div class="row">
	<div class="col-12 os-animation" data-animation="fadeInLeft">
	<h3 class="title-heading">Contact Us</h3>
	<div class="title-heading-underline">
	</div>
</div>
</div>

<!--- Start Clients Section -->
<div id="clients" class="offset">

<div class="container-fluid">
<div class="row padding">
<!---
	<div class=" col-12 os-animation" data-animation="fadeInUp">
		<h3 class="heading">Our Clients</h3>
		<div class="heading-underline"></div>
	</div>
-->
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

<?php include 'includes/footer-contact.php'; ?>

<?php include 'includes/scripts.php'; ?>

</body>
</html>