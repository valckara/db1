<?php
$servername = 'localhost';
$username = 'root';
$password = 'gjhkghkHJJK987@';
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connection_error) {
	die("Connection failed: " . $conn->connection_error);
}
?>