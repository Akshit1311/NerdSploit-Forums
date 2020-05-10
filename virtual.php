<!DOCTYPE html>
<html lang="en">
<head>
<title>Post</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css">
<link rel="stylesheet" type="text/css" href="styles/post.css">
<link rel="stylesheet" type="text/css" href="styles/post_responsive.css">


<!-- Custom CSS -->
<link rel="stylesheet" href="./styles/virtual-styles.css">


</head>




<body>

<div class="super_container">

	<!-- Header -->

	<?php 

		include("header.html");

	?>

	
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="./images/gifs/virtual.webp" data-speed="0.8"></div>
		<div class="home_content">
			<div class="post_category trans_200"><a href="category.html" class="trans_200">sport</a></div>
			<div class="post_title">Virtual Lab</div>
		</div>
	</div>

	<br>
	<br>
	

	<section class="virtual-lab">

		<div class="container lab-intro">
			<div class="row">

				<div class="col-lg-6">
					<iframe id="yt-intro" src="https://www.youtube.com/embed/8VL0K0rFgxw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>

				<div class="col-lg-1"></div>

				<div class="col-lg-5">

					<h1 class="text-left text-white">
						Kali Linux
					</h1>

					<br>

					<p class="description text-white">

						Kali Linux is a Debian-derived Linux distribution designed for digital forensics and penetration testing. It is maintained and funded by Offensive Security. <br>
						It was developed by Mati Aharoni and Devon Kearns of Offensive Security through the rewrite of BackTrack, their previous information security testing Linux distribution based on Knoppix, originally it was designed with a focus on kernel auditing, from which it got its name Kernel Auditing LInux.

					</p>
				</div>


			</div>
			

			
		</div>

		<div class="container tutorial">

			<h1 class="text-white">Setting up Kali Linux In Virtual Box</h1>
			<br>
			<br>


			<!-- Step 1 -->
			<h2 class="text-white">Step 1 :</h2>
			<br>

			<a href="https://www.virtualbox.org/wiki/Downloads" target="_blank">
				<button class="btn btn-primary">Download Virtual Box</button>
			</a>

			<br>
			<br>

			<h6 class="text-white">Install Virtual Box from the link provided above.</h6>

			<br><br>


			<!-- Step 2 -->

			<h2 class="text-white">Step 2 :</h2>
			<br>
			<h6 class="text-white">Now select the platform on which you want to download virtual box.</h6>

			<br>

			<img src="./images/virtual/step-2.png" class="img" alt="">

			<br><br><br>


			<!-- Step 3 -->

			<h2 class="text-white">Step 3 :</h2>
			<br>

			<h6 class="text-white">Now run the executable for virtual box and let it install for a while. After installing virtual box it will look like this.</h6>

			<br>

			<img src="./images/virtual/step-3.png" class="img" alt="">

			<br>
			<br>
			<br>

			<!-- Step 4 -->

			<h2 class="text-white">Step 4 :</h2>
			<br>
			<h6 class="text-white">After that we have to download the iso file of kali for virtual box.</h6>

			<br>

			<img src="./images/virtual/step-4.png" class="img" alt=""> 
			<br>
			<br>
			<a href="https://www.offensive-security.com/kali-linux-vm-vmware-virtualbox-image-download/#1572305786534-030ce714-cc3b" target="_blank">
				<button class="btn btn-primary">Download Kali ISO Disk Image</button>
			</a>


			<br>
			<br>
			<br>

			<!-- Step 5 -->

			<h2 class="text-white">Step 5 :</h2>
			<br>
			<h6 class="text-white">After downloading open the ova file downloaded from the site.</h6>

			<br>

			<img src="./images/virtual/step-5.png" class="img" alt=""> 

			<br>
			<br>
			<br>

			<!-- Step 6 -->

			<h2 class="text-white" >Step 6 :</h2>
			<br>
			<h6 class="text-white">After downloading open the ova file downloaded from the site.After clicking on the ova file the virtual box will open automatically and click on the import button.</h6>

			<br>
			<br>
			<br>

			<!-- Step 6 -->

			<h2 class="text-white">Step 7 :</h2>
			<br>
			<h6 class="text-white">
				After the system is successfully imported login with the default credentials that are: <br> <br>
				Username:-kali <br> <br>
				Password:-kali 


			</h6>

			<br>
			<br>
			<br>

			<!-- Step 6 -->

			<h2 class="text-white">Troubleshooting :</h2>
			<br>
			<h6 class="text-white">
				If any issue comes while opening the system after it has been imported check if the virtualisation is enabled in the bios settings. <br> <br>
				If you don’t know how to open bios settings on your system just google it along with the brand name of the system and you will get to know how to open bios settings.
			</h6>

			

		</div>

		

	</section>
	
	

	<!-- Footer -->

	<?php
		include("footer.html");
	?>


</div>

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