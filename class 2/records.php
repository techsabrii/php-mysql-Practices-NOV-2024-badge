<!-- student_form.php -->
<!DOCTYPE html>
<html>
<head>

<?php session_start(); ?>

<?php if (isset($_SESSION['success'])): ?>
    <div class="alert alert-success text-center" role="alert">
        <?php echo $_SESSION['success'] ?>
    </div>
    <?php unset($_SESSION['success']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['error'])): ?>
    <div class="alert alert-danger text-center" role="alert">
        <?php echo $_SESSION['error'] ?>
    </div>
    <?php unset($_SESSION['error']); ?>
<?php endif; ?>
    <title>Student Registration</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow p-4">
                <h2 class="text-center mb-4">Student Registration</h2>

                <!-- Fixed enctype for file uploads -->
                <form action="submit_student.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="fullname" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" name="dob" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input type="number" name="age" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Profile Image</label>
                        <input type="file" name="image" class="form-control" accept="image/*" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>




<!--
<?php

    // $conn = new mysqli('localhost', 'root', '', 'abdul');

    // $sql    = "SELECT * FROM students ";
    // $result = $conn->query($sql);

?> -->
<?php

    $conn = new mysqli("localhost", "root", "", "basit_sabrii");

    $sql       = "SELECT * FROM students ";
    $getresult = $conn->query($sql);

?>

<div class="container">
    <h2 class="text-center mt-5">Student Records</h2>
    <div class="container mt-3">
        <table class="table table-bordered  ">
            <thead class="table-dark">
                <tr>

                    <th>No</th>
                    <th>Profile</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-danger">
                <?php if ($getresult->num_rows > 0):
                    $index = 0; ?>

			                    <?php while ($row = $getresult->fetch_assoc()): ?>
			                        <tr>
			                            <?php $index++; ?>
			                            <td><?php echo $index ?></td>
			                            <td><img src="uploads/<?php echo htmlspecialchars($row['image_path']) ?>" alt="" width="50px" height="50px"></td>
			                            <td><?php echo htmlspecialchars($row['fullname']) ?></td>
			                            <td><?php echo htmlspecialchars($row['username']) ?></td>
			                            <td><?php echo htmlspecialchars($row['email']) ?></td>
			                            <td><?php echo htmlspecialchars($row['date_of_birth']) ?></td>
			                            <td><?php echo htmlspecialchars($row['age']) ?></td>
			                            <td><?php echo htmlspecialchars($row['city']) ?></td>
			                            <td><?php echo date("d M Y h:i A", strtotime($row['created_at'])); ?></td>
			                            <td>
		                                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
		                                    <a href="class.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Add Class</a>
			                                <a href="delete_data.php?id=<?php echo $row['id']; ?>"
		                                        onclick="return confirm('Are you sure you want to delete this record?');"
		                                        class="btn btn-danger btn-sm">Delete</a>

			                            </td>
			                        </tr>
			                    <?php endwhile; ?>
<?php else: ?>
                    <tr>
                        <td colspan="8" class="text-center">No records found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>