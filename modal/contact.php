<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "tornike.despotashvili@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

?>