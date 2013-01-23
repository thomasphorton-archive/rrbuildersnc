<? 
	$title="Timber Frame Homes in Blowing Rock, NC"; 
	include 'inc/html.header.php';
?>
<script src="scripts/jquery.flexslider-min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider'
  });
   
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: true,
    slideshow: true,
    sync: "#carousel"
  });
	})
</script>
<body>
<? include 'inc/header.php';?>
<div id="wrapper">
	<div id="content">
	<h1>Our Top Timber Frame Homes</h1>
	<h2><a href="gallery.php">Custom Homes Gallery</a></h2>
	<p>The Ledges at Firethorn</p>
	
	<div id="slider" class="flexslider gallery">
  <ul class="slides" id="bigPic">
    <li>
      <img src="images/page3/1.jpg" />
    </li>
    <li>
      <img src="images/page3/2.jpg" />
    </li>
    <li>
      <img src="images/page3/3.jpg" />
    </li>
    <li>
      <img src="images/page3/4.jpg" />
    </li>
  </ul>
</div>
<div id="carousel" class="flexslider gallery">
  <ul class="slides" id="smallPics">
   <li>
      <img src="images/page3/1.jpg" />
    </li>
    <li>
      <img src="images/page3/2.jpg" />
    </li>
    <li>
      <img src="images/page3/3.jpg" />
    </li>
    <li>
      <img src="images/page3/4.jpg" />
    </li>
  </ul>
</div>
	
	
	</div><!--#content-->
</div><!--#wrapper-->
<? include 'inc/footer.php'; ?>
</body>
</html>