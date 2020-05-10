<!DOCTYPE html>
<html lang="en">
<head>
<title>Tools</title>
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

<!-- Styles -->
<!-- <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css"> -->
<link rel="stylesheet" type="text/css" href="styles/post_nosidebar.css">
<link rel="stylesheet" type="text/css" href="styles/post_nosidebar_responsive.css">


<!-- Custom CSS -->
<link rel="stylesheet" href="./styles/tools-styles.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<?php
		include "header.html"
	?>
	
	
	
	<!-- Home -->

	<div class="home">
		<img id="kali-logo" src="./images/tools/kali-logo.png" alt="">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="./images/tools/kali-bg.jpg" data-speed="0.8"></div>
		<div class="slide-tools"></div>
		<div class="home_content">
			<!-- <div class="post_category trans_200"><a href="category.html" class="trans_200">sport</a></div>
			<div class="post_title">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</div>
			<div class="post_author d-flex flex-row align-items-center justify-content-center">
				<div class="author_image"><div><img src="images/author.jpg" alt=""></div></div>
				<div class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></div> -->
			</div>
		</div>
	</div>
	
	<!-- Page Content -->

	

	

	<div class="page_content">
		 
	<h1 class="text-center text-dark tool-heading ">Tools</h1>

		<div class="container">

		
			<div class="row">



				<!-- Post Content -->

				<div class="col-lg-10 offset-lg-1">
					<div class="post_content">

						<div class="row">

							<div class="card-container">
								<img src="./images/tools/tool1.jfif" alt="Avatar" class="image">
								<div class="card-overlay">
								<div class="text">				
									John the Ripper
									<br>

									<br>
									<br>
								<a href="https://www.openwall.com/john/" class="icon"><i class="fa fa-angle-right"></i></a>
								</div>
								
								</div>
							</div>


							<div class="card-container">
								<img src="./images/tools/tool2.png" alt="Avatar" class="image">
								<div class="card-overlay">
								<div class="text">				
									Metasploit Project
									<br>

									<br>
									<br>
								<a href="https://www.metasploit.com/" class="icon"><i class="fa fa-angle-right"></i></a>
								</div>
								
								</div>
							</div>

						</div>

						<div class="row">
							<div class="card-container">
								<img src="./images/tools/tool3.jpg" alt="Avatar" class="image">
								<div class="card-overlay">
								<div class="text">				
									Snort
									<br>

									<br>
									<br>
								<a href="https://www.snort.org/" class="icon"><i class="fa fa-angle-right"></i></a>
								</div>
								
								</div>
							</div>

							<div class="card-container">
								<img src="./images/tools/tool4.jpg" alt="Avatar" class="image">
								<div class="card-overlay">
								<div class="text">				
									Wireshark
									<br>

									<br>
									<br>
								<a href="https://www.wireshark.org/" class="icon"><i class="fa fa-angle-right"></i></a>
								</div>
								
								</div>
							</div>
						</div>

						<!-- Post Body -->

						
					</div>
				</div>

			</div>

			

			
		</div>

	</div>

	<br>
	<br>

	<!-- Footer -->

	<?php
		include "footer.html"

	?>

	
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/masonry/masonry.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/post_nosidebar.js"></script>
</body>
</html>