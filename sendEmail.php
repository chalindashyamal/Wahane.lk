<?php

// get parameters from URL

$email = $_GET["email"];
$message = $_GET["message"];
$subject = $_GET["subject"];
$name = $_GET["name"];

// set parameters for email

$to = "engineer@email.com";
$from = "contact@wahane.lk";
$subject = "Complaint from $name";
$body = "Name: $name\n E-Mail: $email\n Message:\n $message";

// send email

$send = mail($to, $subject, $body, "From: $from");

// redirect to success page

if ($send) {
    header("Location: success.php?message=Complaint Submitted Successfully");
} else {
    header("Location: success.php?message=Complaint Submission Failed");
}

?>