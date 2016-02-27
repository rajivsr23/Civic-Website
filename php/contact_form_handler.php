<?php
	$name=$_POST['name'];
	$email_address = $_POST['email'];
	$subject='Civic Steel Replies';
	$message = "You have received a new message. ".
	" Here are the details:\n Name: $name \n ".
	"Email: $email_address\n Message \n $_POST['msg']";
	
	mail('rajivsr2309@gmail.com', $subject, $message);
?> 