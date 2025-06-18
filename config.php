<!-- config.php -->

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_donation_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// else{
//   echo "Connected successfully.<br>";
// }
?>