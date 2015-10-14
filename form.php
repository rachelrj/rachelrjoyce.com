<?php
// define variables and set to empty values
$name = $email = $website = $message = "";

$name      = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
$email     = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$website   = filter_var($_POST["website"], FILTER_SANITIZE_STRING);
$message   = filter_var($_POST["message"], FILTER_SANITIZE_STRING);

$body = $name . " wrote " . $message . ". Reply to " . $email;
$to = "rachelrj@umich.edu";
$subj = "Message from Personal Website";

$headers = "From: mywebsite@rachelrjoyce.com";
$sendMail = mail($to,$subj,$body,$headers);

if(!$sendMail) {
    exit('error');
}
else {
    exit('success');
}
?>