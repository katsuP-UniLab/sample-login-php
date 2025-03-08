<?php
$servername = "";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


// Optional
$sql = "SELECT username, password FROM `users` WHERE username='" . $_POST['username'] . "' AND password='" . $_POST['password'] . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo 'Login Sucesss';
} else {
  echo 'Something Error';
}
// End of Optional

$conn->close();
