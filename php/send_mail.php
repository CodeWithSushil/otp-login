<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once("../vendor/autoload.php");

$mail = new PHPMailer(true);

try {
  // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'rahulnand306@gmail.com';
  $mail->Password = 'rjecdltlhrumtwkk';
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  $mail->Port = 465;
  $mail->setFrom('rahulnand306@gmail.com','Mailer');
  $mail->addAddress($email, "Rahul Nand");
  $mail->isHTML(true);
  $mail->Subject = "$subject";
  $mail->Body = "$html";
  $mail->send();
  
  echo "sent";

} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {
  $mail->ErrorInfo
}";
}
