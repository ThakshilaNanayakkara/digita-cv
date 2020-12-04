<?php
$name = $_POST['f-name'];
$email = $_POST['f-email'];
$topic = $_POST['f-subject'];
$message = $_POST['message'];


$email_from = "tnn@web.com";

$email_subject = "New Submission";

$email_body = "User Name: $name.\n". 
"User Email: $email.\n". 
"User Subject: $topic.\n". 
"User Message: $message.\n";

$to = "thakshilannanayakkara@gmail.com";
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $email \r\n";

mail($to,$email_subject,$email_body, $headers);
header("Location: Index.html");

?>