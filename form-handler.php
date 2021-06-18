<?php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New from submission';

$email_body = "user Name : $name.\n".
              "user email : $visitor_email.\n".
              "user subject : $subject.\n".
              "user message : $message.\n";

 $to = 'vikramziox@gmail.com';
 
 $headers = "From : $email_from \r\n";

$headers .= "Replay-To: $visitor_email \r\n";

mail($to,$email_subject, $email_body, $headers);

header("location: contact.htm");


?>