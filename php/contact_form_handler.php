<?php
	/*From: rajivsr2309@gator4261.hostgator.com*/
	$name=$_POST['name'];
	$email_address = $_POST['email'];
	$subject='Civic Steel Replies';
	$phone=$_POST['phone'];
	$message=$_POST['msg'];
	$body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n ".
	"Email: $email_address\n Phone Number: $phone \n Message: $message \n ";
	
	mail('rajivsr2309@gmail.com,rajivsr5462@gmail.com', $subject, $body);
	$url="www.civicsteel.com";
	
	if(@mail($emailRecipient, $subject, $message, $headers))
	{
		$message = "Message Sent Successfully";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header( "Location: $url" );
		}else{
		echo "Mail Not Sent";
		header( "Location: $url" );
	}
?> 