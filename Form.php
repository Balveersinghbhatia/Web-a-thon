<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EventDB";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch data from form
$name = $_POST['name'];
$email = $_POST['email'];
$phone_no = $_POST['phone_no'];
$age = $_POST['age'];

// Insert data into database
$sql = "INSERT INTO LakhshyaFest (name, email,phone_no,age) VALUES ('$name', '$email','$phone_no','$age')";

if ($conn->query($sql) === TRUE) {
  echo "Your entry is registered now";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
