<?php

class abc{
    public function a(){
        echo "Hello World 1<br>";
        return $this;
    }
    public function b(){
        echo "Hello World 2<br>";
        return $this;
    }
    public function c(){
        echo "Hello World 3<br> <hr>";
        return $this;
    }

}


$test= new abc();
$test->a()->b()->c();



// magic method


// __destractor method best for mysqli because it will close the connection automatically


class abc2{
    public function __construct(){
        echo "Hello World  with constructor<br>";
    }
    public function a(){
        echo "Hello World 1 <br> <hr>";
    }
    public function __destruct(){
        echo "Hello World 2 with destructor check <br> ";
    }
}

$test2 = new abc2();
$test2->a();



// __get method best for private and protected properties
class abc3{
    private $data = ["name" => "John", "age" => 30];
   public function __get($property) {
        if (array_key_exists($property, $this->data)) {
            return $this->data[$property].'<br> <hr>';
        }
        return "This key ({$property}) does not exist.<br> <hr>"; // or throw an exception
    }
}

$test3 = new abc3();
echo $test3->name;
echo $test3->age;


// __set method best for private and protected properties
class abc4{
    private $name;
    public function __set($property, $value){
        if ($property === 'name') {
            $this->name = $value;
        } else {
            echo "This key ({$property}) does not exist.<br> <hr>";
            return;
        }
        echo "Setting value to private property<br> <hr>";
    }
    public function __get($property) {
        if ($property === 'name') {
            return $this->name;
        }
        return "This key ({$property}) does not exist.<br> <hr>"; // or throw an exception
    }
}

$test4 = new abc4();
$test4->name = "Ali <hr>";

echo $test4->name; // Outputs: Ali
echo "<br>";


// __call method best for private and protected properties


class abc5 {
    private $data = [];

    public function __call($method, $args) {
        if ($method === 'set') {
            $this->data[$args[0]] = $args[1];
        } elseif ($method === 'get') {
            return $this->data[$args[0]] ?? null;
        } else {
            return "Method {$method} does not exist.";
        }
    }
}

$test5 = new abc5();
$test5->set('fname', 'Abdu');
$test5->set('lname', 'Basit<hr>');

echo $test5->get('fname'); // Outputs: Abdul
echo "<br>";
echo $test5->get('lname'); // Outputs: Basit
