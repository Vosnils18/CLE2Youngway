<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require './vendor/autoload.php';

$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

$mail->Port = 587;

//STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

$mail->SMTPAuth = true;

//Full email address for gmail
$mail->Username = 'vosnils18@gmail.com';

//Password
$mail->Password = 'nilsisgoed1';

$mail->isHTML(true);

//Set who the message is to be sent from
$mail->setFrom('vosnils18@gmail.com', 'Nils Vos');

//Set who the message is to be sent to
$mail->addAddress('vosnils4@gmail.com', 'Nils Vos');

//Set the subject line
$mail->Subject = 'PHPMailer GMail SMTP test';

$mail->Body = 'HAAAAAAAAAAAAAAAAAAAAAA';

//Attach an image file
$mail->addAttachment('images/Youngway_logo.png');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    // if (save_mail($mail)) {
    //     echo "Message saved!";
    // }
}