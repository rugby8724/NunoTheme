<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>

<?php $page = 'portfolio';include 'includes/navbar-solid.php'; ?>

<div id="title-heading">
<div class="row">
	<div class="col-12 os-animation" data-animation="fadeInLeft">
	<h3 class="title-heading">Our Portfolio</h3>
	<div class="title-heading-underline">
	</div>
</div>
</div>

<!--- Start Portfolio Section -->
<div id="portfolio" class="offset">

<div class="row padding">
<!---
	<div class="col-12 os-animation" data-animation="fadeInUp">
		<h3 class="heading">Portfolio</h3>
		<div class="heading-underline"></div>
	</div>
-->
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