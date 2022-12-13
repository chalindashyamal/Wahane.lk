<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "wahane.lk";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$subject = $_POST["subject"];

echo "Received $name, $email, $message, $subject -> Writing";

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

$sql = "INSERT INTO complaint (Customer_name, Customer_email, Message, Subject) VALUES ('$name','$email','$message','$subject')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: success.php?message=Complaint Submitted Successfully');
?>

