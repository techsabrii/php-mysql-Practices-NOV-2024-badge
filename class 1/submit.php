<?php
$fullname = $_POST['fullname'];
$fathername = $_POST['fathername'];
$message = $_POST['message'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Submitted Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-header bg-success text-white">
      <h4 class="mb-0">Submitted Information</h4>
    </div>
    <div class="card-body">
      <p><strong>Full Name:</strong> <?php echo $fullname; ?></p>
      <p><strong>Father Name:</strong> <?php echo $fathername; ?></p>
      <p><strong>Message:</strong> <?php echo $message; ?></p>
      <a href="form.php" class="btn btn-primary mt-3">Go Back</a>
    </div>
  </div>
</div>

</body>
</html>
