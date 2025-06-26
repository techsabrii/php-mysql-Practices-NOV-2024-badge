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

$usernameFilter = isset($_GET['username']) ? $conn->real_escape_string($_GET['username']) : '';

if ($usernameFilter) {
    $sql = "SELECT id, fullname, username, email, created_at FROM users WHERE username = '$usernameFilter' ORDER BY id DESC";
} else {
    $sql = "SELECT id, fullname, username, email, created_at FROM users ";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-bordered table-striped'>";
    echo "<thead class='table-dark'><tr><th>ID</th><th>Full Name</th><th>Username</th><th>Email</th><th>Created At</th><th>Action</th></tr></thead><tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['fullname'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['created_at'] . "</td>";
        echo "<td><button class='btn btn-warning edit-btn' data-record='" . json_encode($row) . "'>Edit</button></td>";
        echo "</tr>";
    }
    echo "</tbody></table>";
} else {
    echo "<p>No records found.</p>";
}

$conn->close();
?>
