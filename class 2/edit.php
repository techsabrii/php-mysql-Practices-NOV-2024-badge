<?php
    session_start();
    $conn = new mysqli("localhost", "root", "", "basit_sabrii");

    if (isset($_GET['id'])) {
        $id     = intval($_GET['id']);
        $result = $conn->query("SELECT * FROM students WHERE id = $id");

        if ($result->num_rows == 1) {
            $student = $result->fetch_assoc();
        } else {
            $_SESSION['error'] = "Record not found.";
            header("Location: records.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Invalid request.";
        header("Location: records.php");
        exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Student</h2>
    <form action="edit_data.php" method="post">
        <input type="hidden" name="id" value="<?php echo $student['id']; ?>">

        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="fullname" class="form-control" value="<?php echo htmlspecialchars($student['fullname']); ?>" required>
        </div>

        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" value="<?php echo htmlspecialchars($student['username']); ?>" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($student['email']); ?>" required>
        </div>

        <div class="form-group">
            <label>Date of Birth</label>
            <input type="date" name="date_of_birth" class="form-control" value="<?php echo htmlspecialchars($student['date_of_birth']); ?>" required>
        </div>

        <div class="form-group">
            <label>Age</label>
            <input type="number" name="age" class="form-control" value="<?php echo htmlspecialchars($student['age']); ?>" required>
        </div>

        <div class="form-group">
            <label>City</label>
            <input type="text" name="city" class="form-control" value="<?php echo htmlspecialchars($student['city']); ?>" required>
        </div>

        <div class="row">
            <div class="col-6 col-md-6">
                <div class="form-group">
                    <label>Profile Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
            </div>
            <div class="col-6 col-md-6">
                <div class="form-group">

                      <img src="uploads/<?php echo htmlspecialchars($student['image_path']); ?>"
     alt="Profile Image"
     class="img-thumbnail"
     style="width: 120px; height: 120px; object-fit: cover; border-radius: 50%; overflow: hidden;">



                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success w-100">Update</button>
            <a href="records.php" class="btn btn-secondary w-100">Cancel</a>
        </div>
    </form>
</div>
</body>
</html>
