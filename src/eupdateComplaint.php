<?php
include 'server.php';

$conn = new mysqli($servername, $username, $password, $database);

$complaintID = $_GET["id"];

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE complaint SET e_comp = 1 WHERE Complaint_ID = '$complaintID'";

if ($conn-> query($sql) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: /engineer');
?>