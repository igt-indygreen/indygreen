<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mailer/vendor/autoload.php';


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

// Set SMTP settings
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'support@webclickdigital.com';
$mail->Password = 'trhfpjdnmkosklxl';
//$mail->SMTPSecure = 'ssl';
$mail->Port = 587;

// Set sender and recipient
$mail->setFrom($email, $name);
$mail->addAddress('rohit.webclickindia@gmail.com');

// Compose email message
$mail->Subject = $subject;
$mail->Body = 'Name: ' . $name . "<br>" .
              'Email: ' . $email . "<br>" .
              'Phone: ' . $phone . "<br>" .
              'Subject: ' . $subject . "<br>" .
              'Message: ' . $message;

// Send email
if ($mail->send()) {
  // Redirect to thank you page
  echo "Mail Sent";
  header('Location: sitemap.html');
} else {
  // Handle errors
  echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
}
?>
