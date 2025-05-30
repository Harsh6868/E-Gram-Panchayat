<?php
$conn = new mysqli('localhost', 'root', '', 'mysql');

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO complaints (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Complaint Submitted Successfully."); window.location.href="2index.html";</script>';
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();
?>