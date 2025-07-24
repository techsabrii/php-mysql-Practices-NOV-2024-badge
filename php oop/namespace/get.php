<?php
require 'Student.php';
require 'User.php';

use StudentNamespace\Student;
use UserNamespace\User;
use UserNamespace\Address;

$student = new Student("Ali", 20);
$userDetails = new Student("Abdul-Basit", 25);
$user = new User("Basit", "basit@example.com");
$address = new Address("Basit", "basit@example.com");

echo $student->getDetails() . "<br>";
echo $userDetails->getDetails() . "<br>";
echo $userDetails->getAge() . "<br>";
echo $user->getDetails(). "<br>";
echo $address->getDetails(). "<br>";