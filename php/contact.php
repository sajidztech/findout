<?php
$contactusname = $_POST['contactusname'];
$contactusemail = $_POST['contactusemail'];
$contactussubject = $_POST['contactussubject'];
$contactuswebsite = $_POST['contactuswebsite'];
$contactusmessage = $_POST['contactusmessage'];

$formcontent="Name: $contactusname \n Email: $contactusemail \n Subject: $contactussubject \n Website: $contactuswebsite \n Message: $contactusmessage";

$recipient = "sajidztech21@gmail.com";

$subject = "Contact Form";

$mailheader = "From: $contactusemail \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>