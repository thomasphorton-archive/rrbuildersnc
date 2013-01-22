<? 
	$title="R and R Builders"; 
?>
<!DOCTYPE html>
<head>
<title><?=$title?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<link rel="stylesheet" type="text/css" href="style/style2.css" />
<link rel="stylesheet" type="text/css" href="style/flexslider.css" />
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="scripts/jquery.flexslider-min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.flexslider').flexslider({
			animation: "slide",
			animationLoop: true,
		})
	})
</script>
</head>
<body>
<header>
<img src="images/shadow.png" id="shadow"/>
<img src="images/trees.png" id="trees" />
<img src="images/frontrafter.png" id="frontRafter" />
<img src="images/backrafter.png" id="backRafter" />
<nav>
<ul id="primaryNav">
	<li><a href="index.php">Home</a></li>
	<li><a href="testimonials.php">Testimonials</a></li>
	<li><a href="floorplan.php">Floor Plans</a></li>
	<li><a href="about.php">About Us</a></li>
	<li><a href="contact.php">Contact</a></li>
</ul>
</nav>
</header>
<div id="wrapper">
		<div class="flexslider">
			<ul class="slides">
				<li><img src="images/slides/slide1.jpg" /></li>
				<li><img src="images/slides/slide2.jpg" /></li>
				<li><img src="images/slides/slide3.jpg" /></li>
				<li><img src="images/slides/slide4.jpg" /></li>
			</ul>
		</div>
	<div id="content">
	</div><!--#content-->
</div><!--#wrapper-->
</body>