<?php
$name = $_POST['name'];
$visiter_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@sherozch.com';

$email_subject = 'New from Submission';

$email_body = "User Name: $name./n".
              "User email: $visiter_email./n".
               "Subject: $subject./n".
              "User Message: $message./n";

$to = 'sherozch355@gmail.com';

$header = "From: $email_from /r/n";

$header .= "Reply_to: $visiter_email /r/n";

mail($to,$email_subject,$email_body,$header);

header("location: contact.html.html");


?>