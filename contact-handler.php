<?php

$email = $_POST['email'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "thakshilannanayakkara@gmail.com";
$body = "";

$body .= "Email: ".$email. "\r\n";
$body .= "From: ".$name. "\r\n";
$body .= "Message: ".$message. "\r\n";

mail($to, $subject, $body);


?>