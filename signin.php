<?php
session_start();

// Database Connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Login Form Handling
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
  $user = mysqli_fetch_assoc($result);
  if (password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    echo "Login successful";
  } else {
    echo "Invalid password";
  }
} else {
  echo "Invalid email";
}

?>