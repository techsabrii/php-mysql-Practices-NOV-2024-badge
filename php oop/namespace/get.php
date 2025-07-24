<?php
require 'Student.php';
require 'User.php';

use StudentNamespace\Student;
use UserNamespace\User;

$student = new Student("Ali", 20);
$userDetails = new Student("Abdul Basit", 25);
$user = new User("Basit", "basit@example.com");

echo $student->getDetails() . "<br>";
echo $userDetails->getDetails() . "<br>";
echo $user->getDetails(). "<br>";