<?php
$name = $_POST['name'];
$customer_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@student.xxx';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
              "User Email: $customer_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n".

$to = 'ars00031@laurea.fi';
$headers = "From: $email_from \r\n";
$headers = "Reply to: $customer_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("location: contact.html");


?>