<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	include 'address.php';
	$subject = 'Start a pray up team at your church form.';

	if(
		empty($_POST['name']) ||
		empty($_POST['email']) ||
		empty($_POST['message']) ||
		!empty($_POST['website'])
	){
		echo "Error: all fields are required!";
	} elseif (
		preg_match('/http|www/i',$_POST['message'])
	){
		echo "Error: URLS not allowed!";
	} else {
		$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
		$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

		// Header
		$headers = "From: $email\r\n";
		$headers .= "Reply-To: $email\r\n";
		$headers .= "X-Mailer: PHP/".phpversion();

		// Message
		$formContent="From: $name \n Email: $email \n Subject: $subject \n Message: $message";

		mail($to, $subject, $formContent, $headers);

		$subjectConfirm = "Thank you for contacting Pray Up. We will respond as soon as possible.";
		$formConfirmContent = "From: Pray Up \n $subjectConfirm \n";
		$headerConfirm = "From: info@prayuplife.com\r\n";
		$headerConfirm .= "Reply-To: info@prayuplife.com\r\n";
		$headerConfirm .= "X-Mailer: PHP/".phpversion();

		mail($email, $subjectConfirm, $formConfirmContent, $headerConfirm);

		$pageConfirmation = '
		<!DOCTYPE html>
		<html lang="en">
			<head>
				<meta charset="UTF-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1.0" />
				<link rel="stylesheet" href="../../css/style.css" />
				<title>Confirmation</title>
			</head>
			<body>
				<div class="form-confirmation">
					<h1>Thank you for contacting Pray Up. We will respond as soon as possible.</h1>
				</div>

				<script>
						window.setTimeout(function() {
								window.location.href="https://prayuplife.com/";
						}, 3000);
				</script>
			</body>
		</html>';
		echo $pageConfirmation;
	}
}
