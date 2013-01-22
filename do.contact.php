<?

	include("resources/php/class.phpmailer.php");

	$mail = new PHPMailer();
	
	//$mail->IsSMTP();                                     	// set mailer to use SMTP
	$mail->Host = "184.173.174.10";  			// specify main and backup server
	$mail->SMTPAuth = "true";     							// turn on SMTP authentication
	$mail->Username = "info@rrbuildersnc.com";  		// SMTP username
	$mail->Password = "L0ganR1ddle";						// SMTP password
	
	$mail->SetFrom("info@rrbuildersnc.com","R&R Builders");
		
	//print_r($_POST);
		
	/////////////////////// 	 	
	$mail->AddAddress("info@rrbuildersnc.com");
	///////////////////////
	
	$mail->WordWrap = 80;                                 	// set word wrap to 50 characters
	$mail->IsHTML(true);                                  	// set email format to HTML
	
	$mail->Subject = "A New Online Lead";

	$message = "Name: " . $_POST['nameField'] . "<br>";
	$message.= "E-mail: " . $_POST['emailField'] . "<br>";
	$message.= "Phone: " . $_POST['phoneField'] . "<br>";
	$message.= "City: " . $_POST['cityField'] . "<br>";		
	$message.= "Comments: " . $_POST['comments'] . "<br>";
	
	$mail->Body    = $message;
	$mail->AltBody = $message;

	$mail->Send();
	
	function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

	 // validation expected data exists
    if(!isset($_POST['nameField']) ||
        !isset($_POST['emailField']) ||
        !isset($_POST['phoneField']) ||
        !isset($_POST['cityField'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }

  $name = $_POST['nameField'];
	$email = $_POST['emailField'];	
	$phone = $_POST['phoneField'];	
	$city = $_POST['cityField'];		
	$comments = $_POST['comments'];
	$test = $_POST['test'];
	
	$error_message = "";
	if($test!=''){
		$error_message .= "You're being sketchy. Please submit the form correctly. <br>";
	}
	
	if ((strpos($name,'<') !== false)||(strpos($name,'>') !== false)  || (strpos($name, 'www') !== false)) {
    	$error_message .= 'No web addresses or HTML allowed in the forms, sorry! <br>';
	}
	if ((strpos($email,'<') !== false)||(strpos($email,'>') !== false)  || (strpos($email, 'www') !== false)) {
    	$error_message .= 'No web addresses or HTML allowed in the forms, sorry! <br>';
	}
	if ((strpos($phone,'<') !== false)||(strpos($phone,'>') !== false)  || (strpos($phone, 'www') !== false)) {
    	$error_message .= 'No web addresses or HTML allowed in the forms, sorry! <br>';
	}
	if ((strpos($email,'<') !== false)||(strpos($model,'>') !== false)  || (strpos($model, 'www') !== false)) {
    	$error_message .= 'No web addresses or HTML allowed in the forms, sorry! <br>';
	}
	if ((strpos($comments,'<') !== false)||(strpos($comments,'>') !== false)  || (strpos($comments, 'www') !== false)) {
    	$error_message .= 'No web addresses or HTML allowed in the forms, sorry! <br>';
	}
	
	if (strlen($error_message) > 0){
		died($error_message);
	}
		
	$mail2 = new PHPMailer();
	
	//$mail->IsSMTP();                                     	// set mailer to use SMTP
	$mail2->Host = "184.173.174.10";  			// specify main and backup server
	$mail2->SMTPAuth = "true";     							// turn on SMTP authentication
	$mail2->Username = "info@rrbuildersnc.com";  		// SMTP username
	$mail2->Password = "L0ganR1ddle";						// SMTP password
	
	$mail2->SetFrom("info@rrbuildersnc.com","R&R Builders");
		
	//print_r($_POST);
		
	/////////////////////// 	
	$mail2->AddAddress($email);
	///////////////////////
	
	$mail2->WordWrap = 80;                                 	// set word wrap to 50 characters
	$mail2->IsHTML(true);                                  	// set email format to HTML
	
	$mail2->Subject = "Thank You For Your Interest in R&R Builders!";

	$message = '<p>Hello '.$name.', <br /><br />Thank you for your interest in R&R Builders! We\'re incredibly proud of our work, and we\'re glad to have piqued your interest. We usually respond to online inquiries within 24 hours. Until then, please review the information you submitted to use. If you have any corrections or additional comments, please send them in a reply to this email.<br /><br />
	Cheers!<br />
	The R&R Builders Team</p>';
	
	$mail2->Body    = $message;
	$mail2->AltBody = $message;

	$mail2->Send();

	
	header("Location: index.php");
	//echo "1";
?>