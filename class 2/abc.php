<?php
$conn = new mysqli("localhost", "root", "", "basit_sabrii");

$fullname = $_POST['fullname'];
$username =  $fullname;
$email    = $_POST['email'];
$password = $_POST['password'];
$dob      = $_POST['dob'];
$age      = $_POST['age'];
$city     = "Rawalakot";

$sql = "INSERT INTO students (fullname, username, email, password, date_of_birth, age)
        VALUES ('$fullname', '$username', '$email', '$password', '$dob', $age)";
$conn->query($sql);
header("Location: records.php");
$conn->close();

?>