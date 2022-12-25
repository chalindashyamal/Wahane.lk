<?php

include "server.php";

// Create connection

$conn = new mysqli($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Use ../database.sql to create database

$sql = file_get_contents("database.sql");

if ($conn->multi_query($sql) === true) {
	echo "Database created successfully";
} else {
	echo "Error creating database: " . $conn->error;
}

$conn->close();

?>
