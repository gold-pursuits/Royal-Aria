<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Royal Aria Conference Center</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
			<?php include_once('includes/header.php');?>
	
			<div class="w3layouts-banner">
				<div class="container">
					<div class="w3-banner-info">
						<div class="w3l-banner-text">
							<h2>BOOK A VENUE</h2>
							<p>One Venue. Limitless Possibilities</p>
						</div>
					</div>
				</div>
			</div>

			<div class="w3ls-banner-info-bottom">
				<div class="container">
					<div class="banner-address">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="agileits-heading">
				<h3>Welcome to Royal Aria Conference Center</h3>
			</div>
			<div class="w3-agileits-blog-grid">
				<p>This is where you can describe more about the conference center, its facilities, location, and any other relevant information.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner-bottom -->

	
	<?php include_once('includes/footer.php');?>
	<!-- jarallax -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- //jarallax -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
		});
	</script>
	<!-- //here ends scrolling icon -->
	<script src="js/modernizr.custom.js"></script>

</body>	
</html>
