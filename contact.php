<? 
	$title="Timber Frame Homes in Blowing Rock, NC"; 
	include 'inc/html.header.php';
?>
<body>
<? include 'inc/header.php';?>
<div id="wrapper">
	<div id="content">
	<h1>Contact Us</h1>
	<h2>Build a Custom Home with R & R Builders Today!</h2>
	<p class="indent">Are you interested in our custom timber-frame home services? We'd love to hear from you! Please fill out the form below, and we will get in contact with you to discuss how we can work together to build the home of your dreams.</p>
	<form method="post" action="do.contact.php">
		<input type="text" placeholder="Name:" id="nameField" name="nameField"/>
		<input type="text" placeholder="Phone Number:" id="phoneField" name="phoneField"/>
		<input type="text" placeholder="Email Address:" id="emailField" name="emailField"/>
		<input type="text" placeholder="City and State:" id="cityField" name="cityField"/>
		<input type="hidden" id="test" value='' name="test"/>
		<input type="submit" value="Submit Information" id="submitButton"/>
	</form>
	<center>
	<p>Or contact us at:</p>
	<h3>R&R Builders Co.</h3>
	<p>(828) 434.0864</p>
	<p>P.O. Box 2068<br />
	Blowing Rock, NC 28605</p>
	</center>
	</div><!--#content-->
</div><!--#wrapper-->
<? include 'inc/footer.php'; ?>
</body>
</html>