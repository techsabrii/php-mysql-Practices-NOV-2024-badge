<?php

trait Logger {
    public function log($message) {
        return "Log: $message";
    }
}

trait Notifier {
    public function notify($message) {
        return "Notification: $message";
    }
    public function notifyWithType($type, $message) {
        return "Notification [$type]: $message";
    }
}

class User {
    use Logger, Notifier;

    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// Example usage
$user = new User("Abdul Basit");
echo $user->getName() . "<br>";
echo $user->log("User created") . "<br>";
echo $user->notify("Welcome!") . "<br>";
echo $user->notifyWithType("info", "Welcome to the system!") . "<br> <hr>";



// Traits overriding example
trait CustomNotifier {
    public function notify($message) {
        return "Custom Notification: $message";
    }
}

class CustomUser extends User {
    use CustomNotifier;

    public function notify($message) {
        return "Overridden Notification for " . $this->getName() . ": $message";
    }
}

// Example usage of CustomUser
$customUser = new CustomUser("Basit");
echo $customUser->notify("Hello!") . "<br> <hr>";


// type declaration


function greet(array $names){

    foreach($names as $name){
        echo "Hello, $name!<br>";

    }
}
echo greet(['Abdul', 'Basit', 'Sabri']) . "<br> <hr>";