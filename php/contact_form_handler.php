<?php

$to = $_POST['email'];
$subject='Civic Steel Replies';
$message = $_POST['message'];


mail($to, $subject, $message);
?> 