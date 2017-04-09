<?php
	
	$Name = $_GET['name'];
	$email =  $_GET['email'];
	$message = $_GET['message'];
	
	$mailmessage = 'You have got mail from: '.$name;
	
	$to = 'emonaljamee3@gmail.com'
	$subject = 'Omnikage Contact'
	$headers = 'From: '.$email;
	
	mail($to,$subject,$message,$mailmessage,$headers);
    header('Location: contact.html');

?> 