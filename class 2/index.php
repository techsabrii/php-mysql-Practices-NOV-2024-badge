<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "basit_sabrii");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = intval($_SESSION['user_id']);

// Join query to get student info + classes
$sql = "
    SELECT
        s.fullname, s.email, s.city, s.image_path,
        c.class_name, c.section
    FROM students s
     JOIN class c ON s.id = c.student_id
    WHERE s.id = $user_id
";

$result = $conn->query($sql);

$user = null;
$classes = [];

if ($result && $result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        if (!$user) {

            $user = [
                'fullname' => $row['fullname'],
                'email' => $row['email'],
                'city' => $row['city'],
                'image_path' => $row['image_path']
            ];
        }

        if ($row['class_name']) {
            $classes[] = [
                'class_name' => $row['class_name'],
                'section' => $row['section']
            ];
        }
    }
} else {

    $sql_user = "SELECT fullname, email, city, image_path FROM students WHERE id = $user_id";
    $res_user = $conn->query($sql_user);
    $user = $res_user->fetch_assoc();
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-pic {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #007bff;
        }
    </style>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">MyApp</a>
        <div class="d-flex">
            <span class="navbar-text text-white me-3">
                Welcome, <strong><?php echo htmlspecialchars($user['fullname']); ?></strong>
            </span>
            <a href="logout.php" class="btn btn-outline-light">Logout</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="card shadow-sm mb-4">
        <div class="card-body text-center">
            <?php if (!empty($user['image_path']) && file_exists("uploads/" . $user['image_path'])): ?>
                <img src="uploads/<?php echo htmlspecialchars($user['image_path']); ?>" alt="Profile Picture" class="profile-pic mb-3">
            <?php else: ?>
                <img src="default.png" alt="Default Profile" class="profile-pic mb-3">
            <?php endif; ?>

            <h4><?php echo htmlspecialchars($user['fullname']); ?></h4>
            <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
            <p>City: <?php echo htmlspecialchars($user['city']); ?></p>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5>Assigned Classes</h5>
        </div>
        <div class="card-body">
            <?php if (!empty($classes)): ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Class Name</th>
                            <th>Section</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($classes as $class): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($class['class_name']); ?></td>
                                <td><?php echo htmlspecialchars($class['section']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No class records found.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

</body>
</html>
