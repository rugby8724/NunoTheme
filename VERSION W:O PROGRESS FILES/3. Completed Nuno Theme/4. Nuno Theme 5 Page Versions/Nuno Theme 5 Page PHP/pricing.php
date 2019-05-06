<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>

<?php $page = 'pricing';include 'includes/navbar-solid.php'; ?>

<div id="title-heading">
<div class="row">
	<div class="col-12 os-animation" data-animation="fadeInLeft">
	<h3 class="title-heading">Our Pricing</h3>
	<div class="title-heading-underline">
	</div>
</div>
</div>

<!--- Start Pricing Section -->
<div id="pricing" class="offset">

<!--- Start Jumbotron -->
<div class="jumbotron">
<div class="narrow">
<!---
	<div class="os-animation" data-animation="fadeInUp">
		<h3 class="heading">Pricing</h3>
		<div class="heading-underline"></div>
	</div>
-->
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

<div class="os-animation" data-animation="fadeInUp">
<div class="narrow text-center">
	<div class="col-12">
		<p class="lead">Get in contact with us to see more of our great portfolio design work in addition to web development projects such as websites, apps and more!</p>
		<a class="btn btn-secondary btn-sm" href="contact-us.php">Get In Touch</a>
	</div>
</div>
</div>

</div> <!--- End Narrow -->
</div>
<!--- End Jumbotron -->

</div>
<!--- End of Pricing Section -->

<?php include 'includes/footer.php'; ?>

<?php include 'includes/scripts.php'; ?>

</body>
</html>