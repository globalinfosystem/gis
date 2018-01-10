<?php
$email = 'sharmahemant487@gmail.com';
$message = '<html><body>';
$message .= '<img src="https://cdn.shopify.com/s/files/1/1753/5945/t/2/assets/logo.png?16322613379499737833" alt="Choose me Option" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Welcome</strong> </td></tr>";
$message .= "<tr><td><strong>URL:</strong> </td><td>https://chooseme.co.za/pages/quizz</td></tr>";
$message .= "</table>";
$message .= "</body></html>";



//   CHANGE THE BELOW VARIABLES TO YOUR NEEDS

$to = 'sharmahemant487@gmail.com';

$subject = 'Choose me option';

$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

if (@mail($to, $subject, $message, $headers)) {
    die('done');
} else {
    die('error');
}
?>