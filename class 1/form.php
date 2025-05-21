<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bootstrap GET Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">

      <div class="card shadow">
        <div class="card-header bg-primary text-white">
          <h4 class="mb-0">GET Form</h4>
        </div>
        <div class="card-body">
          <form method="post" action="submit.php">
            <div class="mb-3">
              <label for="fullname" class="form-label">Full Name:</label>
              <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Enter your full name" required>
            </div>
            <div class="mb-3">
              <label for="fathername" class="form-label">Father Name:</label>
              <input type="text" id="fathername" name="fathername" class="form-control" placeholder="Enter your father name" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message:</label>
              <textarea id="message" name="message" class="form-control" rows="4" placeholder="Write your message here..." required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
