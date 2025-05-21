<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "abdul";

$conn = new mysqli($servername, $username, $password, $dbname);

$fullname = $_POST['fullname'];
$username = strtolower(str_replace(' ', '', $fullname));
$email    = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$dob      = $_POST['dob'];
$age      = $_POST['age'];

$sql = "INSERT INTO students (fullname, username, email, password, date_of_birth, age)
        VALUES ('$fullname', '$username', '$email', '$password', '$dob', $age)";


if ($conn->query($sql) === true) {
    echo '<div class="alert alert-success text-center" role="alert">
            ✅ Success! Student record has been created.
          </div>';
} else {
    echo '<div class="alert alert-danger text-center" role="alert">
            ❌ Error: ' . $conn->error . '
          </div>';
}

// Check if username already exists
// $check = "SELECT * FROM students WHERE username = '$username'";
// $result = $conn->query($check);

// if ($result->num_rows > 0) {
//     echo '<div class="alert alert-warning text-center" role="alert">
//             ⚠️ Username already exists. Please use a different name.
//           </div>';
// } else {
//     $sql = "INSERT INTO students (fullname, username, email, password, date_of_birth, age)
//             VALUES ('$fullname', '$username', '$email', '$password', '$dob', $age)";

//     if ($conn->query($sql) === true) {
//         echo '<div class="alert alert-success text-center" role="alert">
//                 ✅ Success! Student record has been created.
//               </div>';
//     } else {
//         echo '<div class="alert alert-danger text-center" role="alert">
//                 ❌ Error: ' . $conn->error . '
//               </div>';
//     }
// }


$conn->close();
