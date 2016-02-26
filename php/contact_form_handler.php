<?php

$to      = $_POST['name'];
$subject='Civic Steel Replies';
$message = $_POST['message'];


mail($to, $subject, $message);
?> 