
<?php

$to_email = "prajyothalingale05@gmail.com";
$subject = "Enquiry";
$body = $_POST['name'];
$body .= $_POST['number'];
$body .= $_POST['msg'];
$headers = "From: prajyothalingale05@gmail.com";
echo 'ji';
if (mail($to_email, $subject, $body, $headers)) {
  echo '<script language='javascript'>
    alert();
  </script>';
} else {
    echo "Email sending failed";
}	

?>