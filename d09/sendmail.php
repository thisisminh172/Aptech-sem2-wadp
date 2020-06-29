<!--
Send mail demo
can send many people
-->
<?php
$to = 'minhl93172@gmail.com';
$subject = 'Testing sendmail.exe';
$message = 'Hi, you just received an email using sendmail!';
$headers = 'From: YourEmail@gmail.com';
if(mail($to, $subject, $message, $headers))
 echo "Email sent";
else
 echo "Email sending failed";
?>

