<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "wahane.lk";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

$complaintID = $_POST["complaintID"];

echo "Received $complaintID -> Deleting";

// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

$sql = "DELETE FROM complaint WHERE Complaint_ID = '$complaintID'";

if ($conn-> query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: success.php?message=Complaint Deleted Successfully');

?>