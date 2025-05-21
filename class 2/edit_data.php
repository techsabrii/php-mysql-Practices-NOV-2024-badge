<?php
session_start();
$conn = new mysqli("localhost", "root", "", "basit_sabrii");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']);
    $fullname = $conn->real_escape_string($_POST['fullname']);
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $dob = $_POST['date_of_birth'];
    $age = intval($_POST['age']);
    $city = $conn->real_escape_string($_POST['city']);

    // Default image name
    $imageName = null;

    // Check if new image uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['image'];
        $target_dir = 'uploads/';
        $imageName = uniqid('img_', true) . '.' . strtolower(pathinfo($image["name"], PATHINFO_EXTENSION));
        $target_file = $target_dir . $imageName;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        $check = getimagesize($image["tmp_name"]);

        if ($check && in_array($imageFileType, $allowed) && $image["size"] <= 500000) {
            if (!is_dir($target_dir)) {
                mkdir($target_dir, 0777, true);
            }

            // Get old image path
            $res = $conn->query("SELECT image_path FROM students WHERE id = $id");
            $row = $res->fetch_assoc();
            $oldImage = $row['image_path'];
            $oldImagePath = $target_dir . $oldImage;

            // Delete old image if exists
            if (file_exists($oldImagePath) && is_file($oldImagePath)) {
                unlink($oldImagePath);
            }

            // Upload new image
            move_uploaded_file($image["tmp_name"], $target_file);
        } else {
            $_SESSION['error'] = "Invalid image file.";
            header("Location: edit.php?id=$id");
            exit();
        }
    } else {
        // Keep old image if no new image uploaded
        $res = $conn->query("SELECT image_path FROM students WHERE id = $id");
        $row = $res->fetch_assoc();
        $imageName = $row['image_path'];
    }

    // Update the student record
    $sql = "UPDATE students SET
                fullname = '$fullname',
                username = '$username',
                email = '$email',
                date_of_birth = '$dob',
                age = $age,
                city = '$city',
                image_path = '$imageName'
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Record updated successfully.";
    } else {
        $_SESSION['error'] = "Error updating record: " . $conn->error;
    }
} else {
    $_SESSION['error'] = "Invalid request.";
}

$conn->close();
header("Location: records.php");
exit();

?>
