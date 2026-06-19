<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "db_simulasi_pbo_trpl-1a_danangtriyatno";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>