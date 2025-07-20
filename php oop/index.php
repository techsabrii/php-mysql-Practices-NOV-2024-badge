<?php

class Cal
{
    public $a, $b, $c;
    public function div()
    {
        $this->c = $this->a / $this->b;
        return $this->c;
    }

    public function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$calc    = new Cal();
$calc->a = 6;
$calc->b = 3;
echo "Div: " . $calc->div() . "<br>";
echo "Sub: " . $calc->sub() . "<br>";







// constructor method
class Ca
{
    private $a;
    private $b;

    public function __construct($a = '', $b = '')
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function add()
    {
        return $this->a + $this->b;
    }

    public function multiply()
    {
        return $this->a * $this->b;
    }
}

$calc = new Ca(5, 3);
echo "Add: " . $calc->add() . "<br>";
echo "Multiply: " . $calc->multiply()."<br>";












class Calculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }
}

$calc = new Calculator();
echo "Add: " . $calc->add(5, 3) . "<br>";
echo "Multiply: " . $calc->multiply(5, 3) . "<br>";









// Parent class (PHP version) Inheritance
class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;

    }

    public function speak() {
        echo "{$this->name} makes a noise.<br>";
    }
}

// Child class (inherits from Animal)
class Dog extends Animal {
    private $breed;

    public function __construct($name, $breed) {
        parent::__construct($name); // call the constructor of the parent class
        $this->breed = $breed;
    }

    public function speak() {
        echo "{$this->name} the {$this->breed} barks.<br>";
    }
}

$Dog= new Animal("Buddy");
$Dog->speak();


$myDog = new Dog("Buddy", "Golden Retriever");
$myDog->speak();





