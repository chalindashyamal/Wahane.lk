<?php

$message = $_POST["message"];

echo $message;

// Wait 10 seconds and re-direct to home page

header('Refresh: 10; URL=/index.php');

?>