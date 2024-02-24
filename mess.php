<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


$email_from = 'growup@company.com';

$email_subject = 'New Message From User';

$email_body = "User Name : $name.\n".
              "User Email : $visitor_email.\n".
              "User Subeject : $subject.\n".
              "User Message : $message.\n";


$to='balajibalaji8681014395@gmail.com';

$headers = "From: $email_from \r\n";



$headers .="Reply-To: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);


header("Location:contact.html");

?>