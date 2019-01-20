<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$service = $_POST['service'];
	$message = $_POST['message'];
	$myemail = "bruxellclean@gmail.com";
$to = $myemail;
$subject = "Bruxell Cleaning - From: " .$name." Job: " . $service; 
$body = "Name: " . $name . " Phone: " . $phone . " Email: " . $email . " Job: " . $service . " Message: " . $message	;
	mail($myemail, $subject, $body);
	?>