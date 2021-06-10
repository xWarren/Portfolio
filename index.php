<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome!</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<?php

	include 'mod.php';
	if(isset($_SESSION['user_id'])) {
		$userData = $userClass->userData($_SESSION['user_id']);
		 }
	?>
	<nav class="navbar navbar-expand-lg navbar-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="index.php">MCC Food Company</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li><a class="nav-link" <?php 
                              echo isset($_SESSION['user_id']) ? ' data-toggle="modal" data-target="#adminModal" ' : "";      
                               ?> href="#">Admin Panel</a></li>
					<li class="nav-item">
						<a class="nav-link" href="ordernow.php">Order Now</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Cart</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="login.php">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="carousel slide" data-ride="carousel" id="war">
		<ol class="carousel-indicators">
			<li class="active" data-slide-to="0" data-target="#war"></li>
			<li data-slide-to="1" data-target="#war"></li>
			<li data-slide-to="2" data-target="#war"></li>
            <li data-slide-to="3" data-target="#war"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="First slide" class="d-block w-100" src="images/cakes.jpg">
				<div class="carousel-caption d-none d-md-block">
					<h5>Slider Item</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="Second slide" class="d-block w-100" src="images/starbuck.jpg"">
				<div class="carousel-caption d-none d-md-block">
					<h5>Slider Item</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="Third slide" class="d-block w-100" src="images/fries.jpg">
				<div class="carousel-caption d-none d-md-block">
					<h5>Slider Item</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
				</div>
			</div>
            <div class="carousel-item">
				<img alt="Third slide" class="d-block w-100" src="images/chicken.jpg">
				<div class="carousel-caption d-none d-md-block">
					<h5>Slider Item</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
				</div>
			</div>
		</div><a class="carousel-control-prev" data-slide="prev" href="#war" role="button">
            <span aria-hidden="true" class="carousel-control-prev-icon"></span> 
        <span class="sr-only">Previous</span></a> 
        <a class="carousel-control-next" data-slide="next" href="#war" role="button">
            <span aria-hidden="true" class="carousel-control-next-icon"></span> 
            <span class="sr-only">Next</span></a>
	</div>
    <script>
$(document).ready(function(){
  // Activate Carousel
  $("#war").carousel();
    
  // Enable Carousel Indicators
  $("carousel-item").click(function(){
    $("#warl").carousel(0);
  });
  $("carousel-item").click(function(){
    $("#war").carousel(1);
  });
  $("carousel-item").click(function(){
    $("#war").carousel(2);
  });
  $("carousel-item").click(function(){
    $("#war").carousel(3);
  });
    
  // Enable Carousel Controls
  $(".left").click(function(){
    $("#war").carousel("prev");
  });
  $(".right").click(function(){
    $("#war").carousel("next");
  });
});
</script>
</body>
</html>