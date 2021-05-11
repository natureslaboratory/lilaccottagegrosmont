<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
	<title><?php if(!perch_get('s')){perch_pages_title();}else{perch_blog_post_field(perch_get('s'), 'postTitle');} ?></title>
	<?php perch_page_attributes(); ?>
	
	<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" media="print" onload="this.media='all'" />
	<noscript>
	  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet"> 
	</noscript> 
	
	<link href="/assets/css/stylesheet.css?v=<?php echo rand(); ?>" rel="stylesheet" />
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" defer></script>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js" defer></script>
</head>
<body>
	<header class="background-secondary-light">
		<div class="restrict">
			<div>
				<a class="button" href="/book-online/">Book Online</a>
			</div>
			<nav>
				<button class="menu button">&#8801; Menu</button>
				<?php perch_pages_navigation(); ?>
			</nav>
			<div>
				<p>01347 878 386<br />
				<a href="https://www.instagram.com/hallfarmhousebnb/" target="_blank"><i class="fa fa-instagram"></i><span class="icon">Follow us on Instagram</span></a> <a href="https://www.facebook.com/HallFarmBedBreakfast?ref=ts&fre=ts"><i class="fa fa-facebook-square"></i><span class="icon">Like us on Facebook</span></a> <a href="https://twitter.com/intent/follow?original_referer=https%3A%2F%2Fwww.hallfarmhouseyork.co.uk%2F&ref_src=twsrc%5Etfw&screen_name=HallFarmYork&tw_p=followbutton"><i class="fa fa-twitter"></i><span class="icon">Follow us on Twitter</span></a> <a href="http://www.tripadvisor.co.uk/Hotel_Review-g4560643-d4545806-Reviews-Hall_Farm_Bed_Breakfast-Sheriff_Hutton_North_Yorkshire_England.html"><i class="fa fa-tripadvisor"></i><span class="icon">Read reviews on Tripadvisor</span></a>
			</div>
		</div>
	</header>