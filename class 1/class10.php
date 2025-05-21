<!-- <?php


// Includes and evaluates the specified file.
// If the file is not found, PHP throws a warning but continues execution.

// file: header.php
// echo "<h1>This is Header</h1>";

// // file: main.php
// include 'header.php';
// echo "Main content continues..."; // Will be executed even if header.php is missing



// Similar to include, but if the file is not found, it throws a fatal error and stops script execution.

// require 'header.php'; // If not found, script stops here
// echo "You won't see this if header.php is missing";



// Includes the file only once even if called multiple times.


// include_once 'header.php'; // Will not include again if already included



// Same as require, but only includes once.


// require_once 'header.php';





// $_GET
// Used to collect form data sent via URL (query string).



// $name = $_GET['name'];
// echo "Hello, " . $name;


?> -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Layout</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .content {
      flex: 1;
    }
    aside {
      background-color: #f8f9fa;
      padding: 1rem;
    }
    footer {
      background-color: #343a40;
      color: white;
      text-align: center;
      padding: 1rem;
    }
  </style>
</head>
<body>

  <!-- Header -->


  <!-- Navbar -->


  <!-- Main layout -->
  <div class="container-fluid content mt-3">
    <div class="row">

    <?php  include('header.php') ?>

    <?php  include('nav.php') ?>
      <!-- Sidebar -->
      <aside class="col-md-3">
        <h5>Sidebar</h5>
        <ul class="list-group">
          <li class="list-group-item">Menu Item 1</li>
          <li class="list-group-item">Menu Item 2</li>
          <li class="list-group-item">Menu Item 3</li>
        </ul>
      </aside>

      <!-- Main Content -->
      <main class="col-md-9">
        <h2>Main Content</h2>
        <p>This is the main content area where you can display anything.</p>
      </main>

    </div>
  </div>

  <!-- Footer -->
  <?php  include('footer.php') ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
