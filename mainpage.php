<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="mains.css">
</head>
<body>

<header>
	<div class="container">
		<div class="col6">
			<img src="logo2.png" class="logo" width="175" height="85">
			<div class="input-box">
				<i class="fa fa-map-marker"></i>
				<input type="text" placeholder="Tell us your location" />
				<button class="s-btn">
					<i class="fa fa-long-arrow-right"></i>
				</button>
			</div>
		</div>
		<div class="col6">
			<ul class="topnav">
				<!-- <li><a href="#">Ride</a></li> -->
				<!-- <li><a href="#">Drive</a></li> -->
				<li><a href="#">Help</a></li>
				<!-- <li><a href="#">Sign in</a></li> -->
				<li><button class="btn-r">Ride With RideKar</button></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>

	<div class="header-bottom">
		<div class="container">
			<ul class="bottomnav">
				<li class="active"><a href="#"><i class="fa fa-home"></i>  Home</a></li>
				<li><a href="#"><i class="fa fa-exclamation-circle"></i>  About</a></li>
				<!-- <li><a href="#"><i class="fa fa-gear"></i>  Our Services</a></li> -->
				<!-- <li><a href="#"><i class="fa fa-taxi"></i>  Our Vechicles</a></li> -->
				<li><a href="home.php"><i class="fa fa-gift"></i>  Publish Ride</a></li>
				<li><a href="#"><i class="fa fa-map-marker"></i>  Contact</a></li>
			</ul>
			<button class="b-btn">Become a Driver</button>
			<div class="clearfix"></div>
		</div>
	</div>
</header>


<section class="sec-1">
	<div class="container">
		<div class="col6">
            <h2>Hello, <?php echo $_SESSION['name']; ?></h2>
			<h1 class="heading">Earn. Connect.<br>Contribute to<br>Your University</h1>
			<p>Easy to Travel & connect Only for Chandigarh University</p>
			<br>
			<!-- <button class="btn-r">Sign up Now</button> -->
		</div>
		<div class="col6">
			<img src="taxi.png" class="taxi-img">
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<br>
<br>

<section class="sec-2">
	<div class="container">

		<h2 class="heading-2">How It Work</h2>
		<!-- <div class="border"><img src="image/border.png"></div> -->
		<br>
    <br>
<br>
		<div class="col3">
			<div class="box">
				<i class="fa fa-hand-o-up icon-1"></i>
			<h3>Search for Ride</h3>
			<p>Search for ride by entering destination and pickup point. </p>
			</div>
		</div>
		<div class="col3">
			<div class="box">
				<i class="fa fa-automobile icon-1"></i>
			<h3>Get a Ride</h3>
			<p>Get the appropriate rides for time interval. </p>
			</div>
		</div>
		<div class="col3">
			<div class="box">
				<i class="fa fa-map-o icon-1"></i>
			<h3>Contact The Driver</h3>
			<p>Contact the member to confirm your booking.</p>
			</div>
		</div>
		<div class="col3">
			<div class="box">
				<i class="fa fa-user icon-1"></i>
			<h3>Arrive Safely</h3>
			<p>Connect and arrive safely to your destination. </p>
			</div>
		</div>
		<div class="clearfix"></div>

	</div>
</section>	


<section class="sec-3">
	<br><br>
	<div class="container">
		<h2 class="heading-3">About us</h2>
		<!-- <img src="image/border.png"> -->
		<div class="clearfix"></div>
		<br><br>
		<div class="col6">
			<p class="p3">Welcome to RideKar! We're your university's carpooling and renting solution, connecting students, faculty, and staff. Carpool effortlessly, saving money and reducing environmental impact. Our trustworthy platform ensures verified users and fosters community building. Rent vehicles for short trips conveniently. Join us for a sustainable, connected campus environment.
        
			</p>
			<br><br>
			<button class="btn-r">Read More</button>
		</div>
		<div class="col6">
			<img src="chlo.png" style="width: 100%; margin-top: -100px;">
		</div>
		<div class="clearfix"></div>
	</div>
</section>

<br>
<br>

<!-- <section class="sec-4">
	<div class="container">

		<h2 class="heading-2">Download Carpool</h2>
		<div class="border"><img src="image/border.png"></div>
		<img src="image/download.png" style="float:left; padding-left: 13%;">
		<div class="content">
			<h2 class="heading-3">Download the Carpool mobile application</h2>
			<br>
			<p class="p3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.
			Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.		
			</p>
			<br>
			<img src="image/button.png">
		</div>
		<div class="clearfix"></div>

</div>
</section>


<section class="sec-5">
	<div class="container">
		<h2 class="heading-2" style="color: var(--white)">What About passenger says</h2>
		<div class="border"><img src="image/border.png"></div>

		<div class="testimonial">
			<p class="p5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.
			Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.
			Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.		
			</p>
		</div>
	</div>
</section> -->

<section class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d447986.853145337!2d76.81114849633596!3d28.692718881263545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d047309fff32f%3A0xfc5606ed1b5d46c3!2sDelhi!5e0!3m2!1sen!2sin!4v1646818342543!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>

<footer class="footer-distributed">

<div class="footer-right">

<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-github"></i></a>

</div>
 
<!-- <div class="footer-left">
<p class="footer-links">
<a class="link-1" href="#">Home</a>
<a href="#">Blog</a>
<a href="#">Pricing</a>
<a href="#">About</a>
<a href="#">Faq</a>
<a href="#">Contact</a>
</p>
<p>Carpool © 2015</p>
</div> -->

</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<script type="text/javascript">
	$('.bottomnav li').click(function(){
    $('.bottomnav li').removeClass("active");
    $(this).addClass("active");
});

	
</script>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>