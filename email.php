<?php
$subject = 'Marriage Wishes'; // Subject of your email
$to = 'hanzzhaneefa@gmail.com'; // Recipient's E-mail

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$msg = $_REQUEST['message'];

$email_from = $name . ' <' . $email . '>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: " . $email_from . "\r\n"; // Sender's E-mail
$headers .= "Reply-To: " . $email . "\r\n";

$message = 'Name: ' . $name . "<br>";
$message .= 'Email: ' . $email . "<br>";
$message .= 'Message: ' . $msg;

if (mail($to, $subject, $message, $headers)) {
    // Transfer the value 'sent' to your JavaScript function for showing a success message.
    echo 'sent';
} else {
    // Transfer the value 'failed' to your JavaScript function for showing an error message.
    echo 'failed';
}
?>
