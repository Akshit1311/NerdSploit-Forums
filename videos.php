<!DOCTYPE html>
<html lang="en">
<head>
<title>Post</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">



<!-- Bootstrap CDN-->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">

<!-- jQuery -->
<link rel="stylesheet" type="text/css" href="plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>





<link rel="stylesheet" type="text/css" href="styles/post.css">
<link rel="stylesheet" type="text/css" href="styles/post_responsive.css">


<!-- Custom CSS -->
<link rel="stylesheet" href="./styles/virtual-styles.css">
<link rel="stylesheet" href="./styles/videos-styles.css">


</head>




<body>

<div class="super_container">

	<!-- Header -->

	<?php 

		include("header.html");

	?>

	
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="./images/virtual/bg.PNG" data-speed="0.8"></div>
		<div class="home_content">
			<div class="post_category trans_200"><a href="category.html" class="trans_200">sport</a></div>
			<div class="post_title">Videos</div>
		</div>
	</div>

	<br><br>
	

	<section class="videos">

		
	<div class="row">
		<div class="col-lg-2">
			<div class="prev">
				<i class="fa fa-arrow-left prev-btn"></i>
			</div>
		</div>

		<div class="col-lg-8">
			<div id="vid-1" class="video-container">
				<h1 class="text-center text-white">Video 1</h1>
				<br>
				<iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/GRQ43F2E1QE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>


			<div id="vid-2" class="video-container">

				<h1 class="text-center text-white">Video 2</h1>
				<br>
				<iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/d8nBzrhd8Ro" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

			</div>
		</div>

		<div class="col-lg-2">
			<div class="next">
				<i class="fa fa-arrow-right prev-btn"></i>
			</div>
		</div>
	</div>
		
	<br>
	<br>

	</section>
	
	

	<!-- Footer -->

	<?php
		include("footer.html");
	?>


</div>


<script>

	$(".next").click(function(){
		$("#vid-1").fadeOut();
		$("#vid-2").fadeIn();
	});

	$(".prev").click(function(){
		$("#vid-2").fadeOut();
		$("#vid-1").fadeIn();
	});

	$

</script>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/masonry/masonry.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/post.js"></script>
</body>
</html>