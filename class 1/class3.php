


<?php

    // function func(){
    //     echo('This is a function');
    // }
    // echo func();
?>

<?php

// function greetUser($name, $rollno) {
//     echo "Hello, " . ucfirst($name) . "! Welcome to the site. Your  ".$rollno;
// }

// echo greetUser("ali", 4);
?>
<?php
$a = 15;
$b= 14;
function add($a="0", $b="0") {
    return $a+$b;
}

echo "sum ".add($a , $b)."<br>";

function sub($a="0", $b="0") {
    return $a-$b;
}

echo "sub ".sub($a , $b)."<br>";

function mul($a="0", $b="0") {
    return $a*$b;
}

echo "mul ".mul($a , $b)."<br>";

function div($a="0", $b="0") {
    return $a/$b;
}

echo "div ".div($a , $b);
?>

