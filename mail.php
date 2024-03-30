
<?php
$to = "nn9115987@gmail.com";
$subject = "Test Email";
$message = "This is a test email.";
$headers = "From: sender@example.com";

mail($to, $subject, $message, $headers);
?>
