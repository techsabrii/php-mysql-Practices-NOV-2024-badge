<?php
/*
$a = 10;
$b = 5;

$sum = $a + $b;
echo "Addition: $a + $b = $sum<br>";

$difference = $a - $b;
echo "Subtraction: $a - $b = $difference<br>";

$product = $a * $b;
echo "Multiplication: $a * $b = $product<br>";

$quotient = $a / $b;
echo "Division: $a / $b = $quotient<br>";

$remainder = $a % $b;
echo "Modulus: $a % $b = $remainder<br>";

$power = $a ** $b;
echo "Exponentiation: $a ** $b = $power<br>";
*/
?>

<br>



<?php
/*
$a = 10;
$b = 5;

$c = $a;
echo "Assignment: c = $c<br>";

$c += $b;
echo "Add and Assign: c += b = $c<br>";

$c -= $b;
echo "Subtract and Assign: c -= b = $c<br>";

$c *= $b;
echo "Multiply and Assign: c *= b = $c<br>";

$c /= $b;
echo "Divide and Assign: c /= b = $c<br>";

$c %= $b;
echo "Modulus and Assign: c %= b = $c<br>";

$c **= $b;
echo "Exponentiation and Assign: c **= b = $c<br>";
*/
?>




<br>
<?php
/*

$a = 10;
$b = 5;
$c = 10;

$result1 = ($a == $b) ? "$a is equal to $b<br>" : "";
$result2 = ($a != $b) ? "$a is not equal to $b<br>" : "";
$result3 = ($a > $b) ? "$a is greater than $b<br>" : "";
$result4 = ($a < $b) ? "$a is less than $b<br>" : "";
$result5 = ($a >= $c) ? "$a is greater than or equal to $c<br>" : "";
$result6 = ($a <= $c) ? "$a is less than or equal to $c<br>" : "";
$result7 = ($a === $c) ? "$a is identical to $c<br>" : "";
$result8 = ($a !== $b) ? "$a is not identical to $b<br>" : "";

echo $result1;
echo $result2;
echo $result3;
echo $result4;
echo $result5;
echo $result6;
echo $result7;
echo $result8;
*/
?>

<br>


<?php
/*
$a = 10;
$b = 5;

if ($a == $b) {
    echo "$a is equal to $b<br>";
}

if ($a != $b) {
    echo "$a is not equal to $b<br>";
}

if ($a > $b) {
    echo "$a is greater than $b<br>";
}

if ($a < $b) {
    echo "$a is less than $b<br>";
}

if ($a >= $b) {
    echo "$a is greater than or equal to $b<br>";
}

if ($a <= $b) {
    echo "$a is less than or equal to $b<br>";
}

if ($a === $b) {
    echo "$a is identical to $b<br>";
}

if ($a !== $b) {
    echo "$a is not identical to $b<br>";
}
*/
?>
<br>




<?php
/*
$a = 10;
$b = 5;
$c = 10;

echo ($a == $b) ? "$a is equal to $b<br>" : "";
echo ($a != $b) ? "$a is not equal to $b<br>" : "";
echo ($a > $b) ? "$a is greater than $b<br>" : "";
echo ($a < $b) ? "$a is less than $b<br>" : "";
echo ($a >= $c) ? "$a is greater than or equal to $c<br>" : "";
echo ($a <= $c) ? "$a is less than or equal to $c<br>" : "";
echo ($a === $c) ? "$a is identical to $c<br>" : "";
echo ($a !== $b) ? "$a is not identical to $b<br>" : "";
*/
?>

<?php
/*
$day = "Tuesday";

switch ($day) {
    case "Monday":
        echo "Today is Monday";
        break;
    case "Tuesday":
        echo "Today is Tuesday";
        break;
    case "Wednesday":
        echo "Today is Wednesday";
        break;
    default:
        echo "It's some other day";
        break;
}

?>
<?php

$day = "Tuesday";

switch ($day):
    case "Monday":
        echo "Today is Monday";
        break;
    case "Tuesday":
        echo "Today is Tuesday";
        break;
    case "Wednesday":
        echo "Today is Wednesday";
        break;
    default:
        echo "It's some other day";
        break;
endswitch;
*/
?>

<?php
/*
$a = 10;
$b = 5;

if ($a > 5) {
    if ($b < 10) {
        echo "a is greater than 5 and b is less than 10<br>";
    }
}

$c = 3;
$d = 25;

if ($c < 5) {
    if ($d > 10) {
        echo "c is less than 5 and d is greater than 10<br>";
    }
}
*/
?>
<?php
/*
$count = 1;

while ($count <= 5) {
    echo "This is iteration number $count<br>";
    $count++;
}
    */
?>
<?php
/*
$count = 1;

do {
    echo "This is iteration number $count<br>";
    $count++;
} while ($count <= 5);
 */
?>

<?php
/*
for ($i = 1; $i <= 4; $i++) {
    echo "This is iteration number $i<br>";
}
    */
?>
<?php
/*
for ($i = 1; $i <= 3; $i++) {
    echo "Outer loop iteration $i<br>";

    for ($j = 1; $j <= 2; $j++) {
        echo "-- Inner loop iteration $j<br>";
    }

    echo "<br>";
}
    */
?>


<?php
/*
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo "Number: $i<br>";
}
    */
?>

<?php
/*
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue;
    }
    echo "Count: $i<br>";
}
    */
?>
<?php

$a = 10;

if ($a == 10) {
    goto showMessage;
}

echo "This will be skipped.";

showMessage:
echo "a is equal to 10";

?>

