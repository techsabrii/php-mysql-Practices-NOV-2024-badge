<?php
// Connect to DB
$conn = new mysqli("localhost", "root", "", "basit_sabrii");

// Get student ID from URL
if (!isset($_GET['id'])) {
    echo "No student ID provided!";
    exit;
}
$student_id = intval($_GET['id']); // sanitize input

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $class_name = $conn->real_escape_string($_POST['class_name']);
    $section = $conn->real_escape_string($_POST['section']);

    $sql = "INSERT INTO class (class_name, section, student_id) VALUES ('$class_name', '$section', '$student_id')";
    if ($conn->query($sql)) {
        echo "<div class='alert alert-success'>Class record saved successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Assign Class to Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4>Assign Class to Student ID: <?php echo $student_id; ?></h4>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="mb-3">
                        <label for="class_name" class="form-label">Class Name</label>
                        <input type="text" name="class_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="section" class="form-label">Section</label>
                        <input type="text" name="section" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success">Save Class</button>
                    <a href="students.php" class="btn btn-secondary">Back to Students</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
