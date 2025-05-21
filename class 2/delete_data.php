<?php
session_start();
$conn = new mysqli("localhost", "root", "", "basit_sabrii");

if ($conn->connect_error) {
    $_SESSION['error'] = "❌ Connection failed: " . $conn->connect_error;
    header("Location: records.php");
    exit();
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    // Optional: fetch image file name to delete from server
    $stmt = $conn->prepare("SELECT image_path FROM students WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($imageFile);
    $stmt->fetch();
    $stmt->close();

    $stmt = $conn->prepare("DELETE FROM students WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        if (!empty($imageFile) && file_exists("uploads/$imageFile")) {
            unlink("uploads/$imageFile");
        }
        $_SESSION['success'] = "✅ Record deleted successfully.";
    } else {
        $_SESSION['error'] = "❌ Error deleting record: " . $stmt->error;
    }

    $stmt->close();
} else {
    $_SESSION['error'] = "❌ Invalid ID provided.";
}

$conn->close();
header("Location: records.php");
exit();
