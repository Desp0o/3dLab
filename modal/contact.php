<?php

$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$message = $_GET['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "tornike.despotashvili@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

?>