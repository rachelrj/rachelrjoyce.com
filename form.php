<?php
// define variables and set to empty values
$name = $email = $website = $message = "";

$name = $_POST["name"];
$email = $_POST["email"];
$website = $_POST["website"];
$message = $_POST["message"];

$body = $name . " wrote " . $message . ". Reply to " . $email;
$to = "rachelrj@umich.edu";
$subj = "Message from Personal Website";

$headers = "From: mywebsite@rachelrjoyce.com";
mail($to,$subj,$body,$headers);

header('Location:index.php#contact');

//function test_input($data) {
//  $data = trim($data);
//  $data = stripslashes($data);
//  $data = htmlspecialchars($data);
//  return $data; }
?>
