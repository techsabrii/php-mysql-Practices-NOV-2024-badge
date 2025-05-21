<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Website</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">My Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <?php
      echo "hello<br>";
      print "hello<br>";
      echo "<b>hello</b>" . "world<br>";
      echo "<b>hello</b>", "world<br>";
      print "hello" . "world";
      print_r("heelo");

    ?>
<br>
<br>

<?php

$user_name = "basit";
$rollNo = 4;
$per = 4.5;
$status = true;
$subject = ['english', 'math', 'physics'];
$get = null;

echo "<pre>";
echo "user_name = ";
var_dump($user_name);
echo "rollNo = ";
var_dump($rollNo);
echo "per = ";
var_dump($per);
echo "status = ";
var_dump($status);
echo "subject = ";
var_dump($subject);
echo "get = ";
var_dump($get);
echo "</pre>";

define('username','basit');
echo username;
?>
<!-- Yasir@12345 -->
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>