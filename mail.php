<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = "contacted via website";
$message = $_POST['subject'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "hussein.kansoh@mail.mcgill.ca";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

?>
