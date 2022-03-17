<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$location = $_POST['location'];
$formcontent = "From: Prayup \n Name: $firstName $lastName \n Email: $email \n Mobile: $mobile \n Location: $prayerWalk \n Thank you for registering for the Marion Prayer Walk.";
$recipient = "joseph@prayuplife.com, Mininger.Kiva@gmail.com, $email";
$subject = "Prayer Walk Registration";
$mailheader = "From: info@prayuplife.com \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
// echo "Thank You!";
header('Location: https://prayuplife.com/confirmation_page.html');

$curl = curl_init();


curl_setopt_array($curl, array(
  CURLOPT_URL => "https://app2.simpletexting.com/v1/group/contact/add?token=6ed3ec48a0622a5c78bfcbf427239b7&group=$location&phone=$mobile&firstName=$firstName&lastName=$lastName&email=$email",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => array(
	"accept: application/json",
	"content-type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
