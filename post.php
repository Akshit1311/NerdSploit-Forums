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






<link rel="stylesheet" type="text/css" href="styles/post_nosidebar.css">
<link rel="stylesheet" type="text/css" href="styles/post_nosidebar_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<?php
		include "header.html"
	?>
	
	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="#">Avision</a></div>
		<div class="search">
			<form action="#">
				<input type="search" class="header_search_input menu_mm" required="required" placeholder="Type to Search...">
				<img class="header_search_icon menu_mm" src="images/search_2.png" alt="">
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.html">home</a></li>
				<li class="menu_mm"><a href="#">Fashion</a></li>
				<li class="menu_mm"><a href="#">Gadgets</a></li>
				<li class="menu_mm"><a href="#">Lifestyle</a></li>
				<li class="menu_mm"><a href="#">Video</a></li>
				<li class="menu_mm"><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/post_nosidebar.jpg" data-speed="0.8"></div>
		<div class="home_content">
			<div class="post_category trans_200"><a href="category.html" class="trans_200">sport</a></div>
			<div class="post_title">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</div>
			<div class="post_author d-flex flex-row align-items-center justify-content-center">
				<div class="author_image"><div><img src="images/author.jpg" alt=""></div></div>
				<div class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></div>
			</div>
		</div>
	</div>
	
	<!-- Page Content -->

	<div class="page_content">
		<div class="container">
			<div class="row">

				<!-- Post Content -->

				<div class="col-lg-10 offset-lg-1">
					<div class="post_content">

						<!-- Post Body -->

						<div class="post_body">
							<p class="post_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus eget purus id felis dignissim convallis. Suspendisse et augue dui. Morbi gravida sed justo vel venenatis. Ut tempor pretium maximus. Donec libero diam, faucibus vitae lectus nec, accumsan gravida dui. Nam interdum mi eget lacus aliquet, sit amet ultricies magna pharetra. In ut odio a ligula egestas pretium et quis sapien. Etiam faucibus magna eu porta vulputate. Aliquam euismod rhoncus malesuada. Nunc rutrum hendrerit semper.</p>
							<figure>
								<img src="images/post_body.jpg" alt="">
								<figcaption>Lorem Ipsum Dolor Sit Amet</figcaption>
							</figure>
							<p class="post_p">Maecenas vitae sem varius, imperdiet nisi a, tristique nisi. Sed scelerisque suscipit leo cursus accumsan. Donec vel turpis quam. Mauris non nisl nec nunc gravida ullamcorper id vestibulum magna. Donec non velit finibus, laoreet arcu nec, facilisis augue. Aliquam sed purus id erat accumsan congue. Mauris semper ullamcorper nibh non pellentesque. Aenean euismod purus sit amet quam vehicula ornare.</p>
							<div class="post_quote">
								<p class="post_p">Aliquam auctor lacus a dapibus pulvinar. Morbi in elit erat. Quisque et augue nec tortor blandit hendrerit eget sit amet sapien. Curabitur at tincidunt metus, quis porta ex. Duis lacinia metus vel eros cursus pretium eget.</p>
								<div class="post_quote_source">Robert Morgan</div>
							</div>
							<p class="post_p">Donec orci dolor, pretium in luctus id, consequat vitae nibh. Quisque hendrerit, lorem sit amet mollis malesuada, urna orci volutpat ex, sed scelerisque nunc velit et massa. Sed maximus id erat vel feugiat. Phasellus bibendum nisi non urna bibendum elementum. Aenean tincidunt nibh vitae ex facilisis ultrices. Integer ornare efficitur ultrices. Integer neque lectus, venenatis at pulvinar quis, aliquet id neque. Mauris ultrices consequat velit, sed dignissim elit posuere in. Cras vitae dictum dui.</p>

							<!-- Post Tags and Share-->
							<div class="tags_share d-flex flex-row align-items-center justify-content-start">
								<div class="post_tags">
									<ul>
										<li class="post_tag"><a href="#">Liberty</a></li>
										<li class="post_tag"><a href="#">Manual</a></li>
										<li class="post_tag"><a href="#">Interpretation</a></li>
										<li class="post_tag"><a href="#">Recommendation</a></li>
									</ul>
								</div>
								<div class="post_share ml-sm-auto">
									<span>share</span>
									<ul class="post_share_list">
										<li class="post_share_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li class="post_share_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li class="post_share_item"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
								
						</div>
					</div>
				</div>

			</div>

			<div class="row d-none">
				<div class="col">
					<!-- Similar Posts -->
					<div class="similar_posts">
						<div class="grid clearfix">

							<!-- Small Card With Image -->
							<div class="card card_small_with_image grid-item">
								<img class="card-img-top" src="images/post_2.jpg" alt="https://unsplash.com/@jakobowens1">
								<div class="card-body">
									<div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
									<small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
								</div>
							</div>

							<!-- Small Card With Image -->
							<div class="card card_small_with_image grid-item">
								<img class="card-img-top" src="images/post_13.jpg" alt="https://unsplash.com/@jakobowens1">
								<div class="card-body">
									<div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
									<small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
								</div>
							</div>

							<!-- Small Card With Image -->
							<div class="card card_small_with_image grid-item">
								<img class="card-img-top" src="images/post_26.jpg" alt="https://unsplash.com/@jakobowens1">
								<div class="card-body">
									<div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
									<small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
								</div>
							</div>

							<!-- Small Card With Image -->
							<div class="card card_small_with_image grid-item">
								<img class="card-img-top" src="images/post_27.jpg" alt="https://unsplash.com/@jakobowens1">
								<div class="card-body">
									<div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
									<small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
								</div>
							</div>

						</div>
					</div>
					
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 offset-lg-3">

					<!-- Post Comment -->
					<div class="post_comment">
						<div class="post_comment_title">Post Comment</div>
						<div class="post_comment_form_container">
							<form action="#">
								<input type="text" class="comment_input comment_input_name" placeholder="Your Name" required="required">
								<input type="email" class="comment_input comment_input_email" placeholder="Your Email" required="required">
								<textarea class="comment_text" placeholder="Your Comment" required="required"></textarea>
								<button type="submit" class="comment_button">Post Comment</button>
							</form>
						</div>
					</div>

					<!-- Comments -->
					<div class="comments">
						<div class="comments_title">Comments <span>(12)</span></div>
						<div class="comments_container">
							<ul class="comment_list">
								<li class="comment">
									<div class="comment_body">
										<div class="comment_panel d-flex flex-row align-items-center justify-content-start">
											<div class="comment_author_image"><div><img src="images/comment_author_1.jpg" alt=""></div></div>
											<small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
											<button type="button" class="reply_button ml-auto">Reply</button>
										</div>
										<div class="comment_content">
											<p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened.</p>
										</div>
									</div>

									<!-- Reply -->
									<ul class="comment_list">
										<li class="comment">
											<div class="comment_body">
												<div class="comment_panel d-flex flex-row align-items-center justify-content-start">
													<div class="comment_author_image"><div><img src="images/comment_author_2.jpg" alt=""></div></div>
													<small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
													<button type="button" class="reply_button ml-auto">Reply</button>
												</div>
												<div class="comment_content">
													<p>Nulla facilisi. Aenean porttitor quis tortor id tempus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus molestie varius tincidunt. Vestibulum congue sed libero ac sodales.</p>
												</div>
											</div>

											<!-- Reply -->
											<ul class="comment_list">
												
											</ul>
										</li>
									</ul>
								</li>
								<li class="comment">
									<div class="comment_body">
										<div class="comment_panel d-flex flex-row align-items-center justify-content-start">
											<div class="comment_author_image"><div><img src="images/comment_author_1.jpg" alt=""></div></div>
											<small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
											<button type="button" class="reply_button ml-auto">Reply</button>
										</div>
										<div class="comment_content">
											<p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened.</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="load_more">
						<div id="load_more" class="load_more_button text-center trans_200">Load More</div>
					</div>
				</div>
			</div>
		</div>

	</div>

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