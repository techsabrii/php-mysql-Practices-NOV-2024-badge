<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basit_sabrii";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT DISTINCT username FROM users ORDER BY username ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['username'] . "'>" . $row['username'] . "</option>";
    }
}

$conn->close();
?>
