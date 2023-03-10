<?php
$name = $_POST['name'];
$vistors_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from= 'sablasjavier0@gmail.com';
$email_subject= 'new form submission';
$email_buddy= "user name: $name.\n".
                "user email: $visitor_email.\n". 
                "subject: $subject.\n". 
                "user message: $message.\";  
$to = 'sablasjavier0@gmail.com';
$header = "email_from" \r\n";
$header .= "reply-to: $visitor_email \r\n";
mail($to,$email_subject.$email_buddy,$header);
header("location: contact.html");


?>