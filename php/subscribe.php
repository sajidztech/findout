<?php
$subscribeemail = $_POST['subscribeemail'];

$formcontent="Subscriber Email Address: $subscribeemail";

$recipient = "sajidztech21@gmail.com";

$subject = "Subscriber Email Address";

$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>