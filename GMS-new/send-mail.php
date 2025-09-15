<?php 

$otp = 123456;

// Include PHPMailer library files
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mail/src/Exception.php';
require 'mail/src/PHPMailer.php';
require 'mail/src/SMTP.php';

// Create a new PHPMailer instance
$mail = new PHPMailer();

// Configure SMTP settings
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'wwcode2023@gmail.com';
$mail->Password = 'nistfsjsioulpomw';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Set email content
$mail->setFrom('afc@gmail.com', 'Let verify you! ');
$mail->addAddress('amit.kasabe25@gmail.com');
$mail->Subject = 'Verification Code';
$mail->Body = "Your Verification Code : $otp";

// Send email and check for errors
if ($mail->send()) {
    echo 'Email sent successfully.';
} else {
    echo 'Email sending failed. Error message: ' . $mail->ErrorInfo;
}



?>