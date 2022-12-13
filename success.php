<?php

$message = $_GET["message"];

echo "$message";

// Wait 10 seconds and re-direct to home page

header('Refresh: 5; URL=/index.html#contact');

?>