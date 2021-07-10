<?php
	require "bm.phpmailer.php";
	$mail = new PHPMailer();  
    $mail->IsHTML(true);
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SetFrom('blackmountmailer@gmail.com');
	$mail->SMTPAuth = true;
	$mail->SMTPSecure="tls";
	$mail->Host = "smtp.gmail.com"; // sets the SMTP server
	$mail->Port = 587; //SMTP port
	$mail->Username   = 'blackmountmailer@gmail.com'; // SMTP account username
	$mail->Password   = "BM@M@ileR@123";
?>