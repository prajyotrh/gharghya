
<?php



$to_email = "prajyothalingale05@gmail.com,gharghya99@gmail.com";

$subject = "Enquiry";
$body = $_POST['name'];
$body .= $_POST['number'];
$body .= $_POST['message'];
$headers = "From: prajyothalingale05@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
	echo 'mail sent succesfully';
} else {
    echo "Email sending failed";
}	

?>