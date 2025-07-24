<?php

namespace StudentNamespace;

class Student {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getDetails() {
        return "Student Name: {$this->name}, Age: {$this->age}";
    }
}
