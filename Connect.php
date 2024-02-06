<?php
$name = $_POST['name'];
$studentID = $_POST['studentID'];
$season = $_POST['season'];
$newPassword = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);

$conn = new mysqli('localhost', 'root', '', 'test');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO reg (name, studentID, season, newPassword) VALUES ('$name', '$studentID', '$season', '$newPassword')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
