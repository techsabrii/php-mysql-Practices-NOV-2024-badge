<?php
$conn = new mysqli("localhost", "root", "", "abdul");

if ($conn->connect_error) {
    die("Database connection failed.");
}

$name = $_POST['fullname'];
$username = strtolower(str_replace(' ', '', $name));
$password = md5($_POST['password']);
$email = $_POST['email'];
$dob = $_POST['dob'];

$age = $_POST['age'];


$check_sql = "SELECT * FROM students WHERE  username = '$username'";
$result = $conn->query($check_sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <?php if ($result->num_rows > 0): ?>
        <div class="alert alert-warning text-center" role="alert">
            ⚠️ User already exists!
        </div>
    <?php else: ?>
        <?php
        $sql = "INSERT INTO students (fullname, username, email, password, date_of_birth, age)
                VALUES ('$name', '$username', '$email', '$password', '$dob', $age)";
        if ($conn->query($sql) === TRUE): ?>
            <div class="alert alert-success text-center" role="alert">
                ✅ Success! Student record has been created.
            </div>
        <?php else: ?>
            <div class="alert alert-danger text-center" role="alert">
                ❌ Error inserting data.
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>
</body>
</html>
<?php $conn->close(); ?>
