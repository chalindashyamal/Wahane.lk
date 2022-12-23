<?php
include 'server.php';


// Create connection
$conn = new mysqli($servername, $username, $password, $database);

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$subject = $_POST["subject"];

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO complaint (Customer_Name, Customer_Email, Message, Subject) VALUES ('$name','$email','$message','$subject')";

if ($conn->query($sql) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM customer WHERE Customer_Name = '$name' AND Customer_Email = '$email'";
$result = $conn->query($sql);

if (intval($result->num_rows) > 0) {
  while($row = $result->fetch_assoc()) {
    $sql = "UPDATE customer SET Repair_Count = Repair_Count + 1 WHERE Customer_Name = '$name' AND Customer_Email = '$email'";
  }
} else {
    $sql = "INSERT INTO customer (Customer_Name, Customer_Email, Repair_Count) VALUES ('$name','$email', 1)";
}

if ($conn-> query($sql) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: success.php?message=Complaint Submitted Successfully');
?>

