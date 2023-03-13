<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = "Email From Contact Form";

$message = $name . " " . $email . " wrote the following: " . "\n\n" . $_POST['message'];

mail($name, $subject, $message);

echo "Mail Sent. Thank you " . $name . ", will contact you shortly.";

?>

