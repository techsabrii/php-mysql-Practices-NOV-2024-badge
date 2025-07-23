<?php
abstract class User {
    protected $name;
    protected $email;
    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }
    abstract public function getUserInfo();
}
class Admin extends User {
    public function getUserInfo() {
        return "Admin Name: $this->name, Email: $this->email";
    }
}
class Guest extends User {
    public function getUserInfo() {
        return "Guest Name: $this->name, Email: $this->email";
    }
}


$user1 = new Admin("Abdul Basit", "dev@ts-developers.com");
$user2 = new Guest("xyz", "bk83835@gmail.com");

echo $user1->getUserInfo();
echo "<br>";
echo $user2->getUserInfo();

// Interfaces examples
interface Loggable {
    public function log($message);
}

interface Authenticatable {
    public function authenticate($password);
}

interface Notifiable {
    public function notify($type, $message);
}

interface Profileable {
    public function getProfile();
}

class UserProfile implements Loggable, Authenticatable, Notifiable, Profileable {
    private $username;
    private $password;
    private $email;

    public function __construct($username, $password, $email) {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }

    public function log($message) {
        return "Log: $message";
    }

    public function authenticate($password) {
        return $this->password === $password;
    }

    public function notify($type, $message) {
        return "Notification [$type]: $message";
    }

    public function getProfile() {
        return "Username: $this->username, Email: $this->email";
    }
}

// Test UserProfile class
$userProfile = new UserProfile('testuser', 'pass123', 'test@example.com');
echo $userProfile->log('Profile created') . "<br>";
echo $userProfile->authenticate('pass123') ? 'Authenticated<br>' : 'Not Authenticated<br>';
echo $userProfile->notify('info', 'Welcome!') . "<br>";
echo $userProfile->getProfile() . "<br>";

echo "<hr>";



// static member
class test{
    public static $name= 'Test Class';
    public static function displayName() {
        return self::$name;//scope resolution operator::
    }
    public function __construct() {
        self::$name = 'Test Class Initialized';
    }
}
echo test::$name . "<br>";
echo test::displayName() . "<br>";

$t = new test();

echo test::$name . "<br>";
echo test::displayName() . "<br>";

echo "<hr>";
// late static binding
class test1{
    protected static $name= 'Abdul';
    public static function displayName() {
        // Return both self and static for demonstration
        return self::$name . ' ' . static::$name;
    }

}
class test2 extends test1 {
    protected static $name = 'Basit';
}



echo test1::displayName() . "<br>";

echo test2::displayName() . "<br>";


