<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='@imperialuniversity';
$email_subject='New Form Submission';
$email_body="User Name : $name .\n",
             "user Email : $visitor_email.\n",
             "user subject: $subject.\n",
             "user Message: $message.\n";
$to='sherurangrej783@gmail.com';
$header="From: $email_from \r\n";
$header.="Reply -To: $visitor_email \r\n;
mail( $to , $email_subject , $email_body , $headers);
header("Location : contect.html");




?>