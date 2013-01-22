<? 
	$title="Timber Frame Homes in Blowing Rock, NC"; 
	include 'html.header.php';
?>
<body>
<? include 'inc/header.php';?>
<div id="wrapper">
	<div id="content">
	<h2>Build a Custom Home with R and R Builders Today!</h2>
	<p>Are you interested in our custom timber-frame home services in the Blowing Rock area? We'd love to hear from you! Please fill out the form below, and we will get in contact with you to discuss how we can work together to build the home of your dreams.</p>
	<form method="post" action="do.contact.php">
		<input type="text" placeholder="Name:" id="nameField" name="nameField"/>
		<input type="text" placeholder="Phone Number:" id="phoneField" name="phoneField"/>
		<input type="text" placeholder="Email Address:" id="emailField" name="emailField"/>
		<input type="text" placeholder="City and State:" id="cityField" name="cityField"/>
		<input type="hidden" id="test" value='' name="test"/>
		<input type="submit" value="Submit Information" id="submitButton"/>
	</form>
	<p></p>
	</div><!--#content-->
</div><!--#wrapper-->
<? include 'inc/footer.php'; ?>
</body>
</html>