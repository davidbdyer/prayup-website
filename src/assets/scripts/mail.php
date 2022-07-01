<?php
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$formcontent="From: $name \n Email: \n Mobile: $mobile";
$recipient = "joseph@prayuplife.com";
$subject = "Contact Form";
$mailheader = "From: info@prayuplife.com \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
// echo "Thank You!";
header('Location: https://prayuplife.com/confirmation_page.html');
?>