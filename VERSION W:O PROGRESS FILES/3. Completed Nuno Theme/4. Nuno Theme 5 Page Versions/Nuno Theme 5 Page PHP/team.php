<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>

<?php $page = 'team';include 'includes/navbar-solid.php'; ?>

<div id="title-heading">
<div class="row">
	<div class="col-12 os-animation" data-animation="fadeInLeft">
	<h3 class="title-heading">Our Portfolio</h3>
	<div class="title-heading-underline">
	</div>
</div>
</div>

<!--- Start Team Section -->
<div id="team" class="offset">

<!--- Start Fixed Background IMG Light -->
<div class="fixed-background">

<div class="row light">
<!---
	<div class="col-12 os-animation" data-animation="fadeInUp">
		<h3 class="heading">Meet the Team</h3>
		<div class="heading-underline"></div>
	</div>
-->
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

<?php include 'includes/footer.php'; ?>

<?php include 'includes/scripts.php'; ?>

</body>
</html>