<?php
$servername = 'localhost';
$username = 'root';
$password = 'gjhkghkHJJK987@';
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connection_error) {
	die("Connection failed: " . $conn->connection_error);
}

$sql = "SELECT id, first_name, last_name FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo 'id: ' . $row['id']. ' - Name: ' . $row['first_name']. ' ' . $row['last_name']. '<br>';
	  }
	} else {
	  echo "0 results";
	}
	$conn->close();
	?>