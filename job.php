<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$doing = $_POST['doing'];
$job = $_POST['job'];


$email_from = 'growup@company.com';

$email_subject = 'New Message From User';

$email_body = "User Name : $name.\n".
          "User Email : $visitor_email.\n".
          "User Doing : $doing.\n".
          "Job Want : $job.\n";


$to='balajibalaji8681014395@gmail.com';

$headers = "From: $email_from \r\n";



$headers .="Reply-To: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);


header("Location:home.html");



?>