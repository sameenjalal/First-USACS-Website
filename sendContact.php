<?php

	$from = "ru_cs@gmail.com";
	$from_name = "USACS";
	$subject = "Contact Form";
		
	$to = $_POST['email'];
	
	// collect data
	$body = "";
	foreach($_POST as $key => $val)
	{
		if($key != 'captcha')
			$body .= ucfirst($key).": ".$val."\r\n";
	}
	
	// construct MIME PLAIN Email headers
	$header = "MIME-Version: 1.0\n";
	$header .= "Content-type: text/plain; charset=utf-8\n";
	$header .= "From: $from_name <$from>\r\nReply-To: $from_name <$from>\r\nReturn-Path: <$from>\r\n";
				
	// send email
	$myfrom = "ru_cs@gmail.com\r\n";
	$mail_sent = mail("sameen.jalal@gmail.com", $subject, $body, "From: USACS_SITE@gmail.com\r\n");
	$mail_sent = mail("vverna@eden.rutgers.edu", $subject, $body, "From: USACS_SITE@gmail.com\r\n");
	$mail_sent = mail("dsymquen@gmail.com", $subject, $body, "From: USACS_SITE@gmail.com\r\n");
	$mail_sent = mail("yinglai3@gmail.com", $subject, $body, "From: USACS_SITE@gmail.com\r\n");
?>
