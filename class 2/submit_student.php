<?php
session_start();
mysqli_report(MYSQLI_REPORT_OFF);

// DB Connection
$conn = new mysqli("localhost", "root", "", "basit_sabrii");
if ($conn->connect_error) {
    $_SESSION['error'] = "❌ Connection failed: " . $conn->connect_error;
    header("Location: records.php");
    exit();
}


if (!isset($_POST['fullname'], $_POST['email'], $_POST['password'], $_POST['dob'], $_POST['age'], $_FILES['image'])) {
    $_SESSION['error'] = "❌ Error: Missing required form fields.";
    header("Location: records.php");
    exit();
}


$fullname = trim($_POST['fullname']);
$username = strtolower(str_replace(' ', '', $fullname));
$email    = trim($_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$dob      = $_POST['dob'];
$age      = (int)$_POST['age'];
$city     = "Rawalakot";

$image    = $_FILES['image'];
$target_dir = "uploads/";
$imageName = uniqid("img_", true) . '.' . strtolower(pathinfo($image["name"], PATHINFO_EXTENSION));
$target_file = $target_dir . $imageName;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Validate image
$check = getimagesize($image["tmp_name"]);
if ($check === false) {
    $_SESSION['error'] = "❌ Error: File is not an image.";
    header("Location: records.php");
    exit();
}
if ($image["size"] > 5000000) {
    $_SESSION['error'] = "❌ Error: File is too large.";
    header("Location: records.php");
    exit();
}
if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
    $_SESSION['error'] = "❌ Error: Only JPG, JPEG, PNG & GIF files are allowed.";
    header("Location: records.php");
    exit();
}
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}
if (!move_uploaded_file($image["tmp_name"], $target_file)) {
    $_SESSION['error'] = "❌ Error: There was an error uploading your file.";
    header("Location: records.php");
    exit();
}

// Insert into database
$stmt = $conn->prepare("INSERT INTO students (fullname, username, email, password, date_of_birth, age, image_path) VALUES (?, ?, ?, ?, ?, ?, ?)");
if (!$stmt) {
    $_SESSION['error'] = "❌ Prepare failed: " . $conn->error;
    $conn->close();
    header("Location: records.php");
    exit();
}
$stmt->bind_param("sssssis", $fullname, $username, $email, $password, $dob, $age, $imageName);

if ($stmt->execute()) {
    $_SESSION['success'] = "✅ Success! Student record has been created.";
} else {
    $_SESSION['error'] = "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
header("Location: records.php");
exit();
?>
