<?php
$servername = "localhost";
$username = "wahanene_admin";
$password = "f,N}{FOuvs,t";
$database = "wahanene_wahane.net";

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

$sql = "INSERT INTO complaint (Customer_Name, Customer_Email, Message, Subject) VALUES ('$name','$email','$message','$subject')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// check if customer exists from name and email
$sql = "SELECT * FROM customer WHERE Customer_Name = '$name' AND Customer_Email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // increase customer Repair_Count by 1
    $sql = "UPDATE customer SET Repair_Count = Repair_Count + 1 WHERE Customer_Name = '$name' AND Customer_Email = '$email'";
  }
} else {
    // Add data to customer table Customer_Name, Customer_Email, Repair_Count
    $sql = "INSERT INTO customer (Customer_Name, Customer_Email, Repair_Count) VALUES ('$name','$email', 1) ON DUPLICATE KEY UPDATE Repair_Count = Repair_Count + 1";
}

if ($conn-> query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: success.php?message=Complaint Submitted Successfully');
?>

