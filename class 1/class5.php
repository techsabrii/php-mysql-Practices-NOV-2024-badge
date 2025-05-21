<!-- in_array array_search -->

<!-- <div class="container">
    <h3 class="mb-3">Check Subject Using <code>in_array()</code></h3>
    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Student Name</th>
                <th>Subjects</th>
                <th>Has Math?</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $students = [
                ["name" => "Ali", "subjects" => ["Math", "English", "Science"]],
                ["name" => "Sara", "subjects" => ["Urdu", "English"]],
                ["name" => "Usman", "subjects" => ["Math", "Computer"]]
            ];

            $index = 1;
            foreach ($students as $student) {
                $name = $student["name"];
                $subjects = $student["subjects"];

                echo "<tr>";
                echo "<td>$index</td>";
                echo "<td>$name</td>";
                // impload is a sapearator to convert array to string
                echo "<td>" . implode(", ", $subjects) . "</td>";

                // Use in_array to check for "Math"
                if (in_array("Math", $subjects)) {
                    echo "<td><span class='text-success'>Yes</span></td>";
                } else {
                    echo "<td><span class='text-danger'>No</span></td>";
                }

                echo "</tr>";
                $index++;
            }
            ?>
        </tbody>
    </table>
</div>
 -->


<!-- Array_replace & Array_replace_recursive -->

<!-- <?php
$array1 = ["a" => "red", "b" => "green", "c" => "blue"];
$array2 = ["a" => "yellow", "d" => "black"];

$result = array_replace($array1, $array2);

echo "<pre>";
print_r($result);
echo "</pre>";
?> -->


<!-- <?php
$array1 = [
    "colors" => ["favorite" => "red", "second" => "green"],
    "size" => "M"
];
$array2 = [
    "colors" => ["favorite" => "blue"],
    "size" => "L"
];

$result = array_replace_recursive($array1, $array2);

echo "<pre>";
print_r($result);
echo "</pre>";
?> -->


<!-- make pop() and push() -->


<!-- <?php
    $colors = ["Red", "Green", "Blue"];

    // Remove last color
    $lastColor = array_pop($colors);

    echo "Popped Color: " . $lastColor . "<br>";

    echo "<pre>";
    print_r($colors);
    echo "</pre>";
    ?> -->




<!-- <?php
    $fruits = ["Apple", "Banana"];

    array_push($fruits, "Mango", "Orange");

    echo "<pre>";
    print_r($fruits);
    echo "</pre>";
?> -->


<!-- shift() and unshift() -->



<!-- <?php
$colors = ["Red", "Green", "Blue"];

// Remove first element
$firstColor = array_shift($colors);

echo "Shifted Color: " . $firstColor . "<br>";

echo "<pre>";
print_r($colors);
echo "</pre>";
?> -->


<!-- <?php
$animals = ["Cat", "Dog"];

// Add at beginning
array_unshift($animals, "Lion", "Tiger");

echo "<pre>";
print_r($animals);
echo "</pre>";
?> -->



<!-- array_merge() index or associative  Array
array_replace_recursive() Multidimentional associative array
array_combine() index array -->

<!-- it create a new array -->


<!--
<?php
    $arr1 = ["Apple", "Banana"];
    $arr2 = ["Mango", "Orange"];

    $merged = array_merge($arr1, $arr2);

    echo "<pre>";
    print_r($merged);
    echo "</pre>";
    ?> -->


<!--
<?php
$arr1 = ["a" => "Red", "b" => "Green"];
$arr2 = ["b" => "Yellow", "c" => "Blue"];

$merged = array_merge($arr1, $arr2);

echo "<pre>";
print_r($merged);
echo "</pre>";
?> -->


<!--
<?php
$base = [
    "user" => [
        "name" => "Ali",
        "email" => "ali@example.com"
    ],
    "status" => "active"
];

$update = [
    "user" => [
        "email" => "ali.new@example.com"
    ],
    "status" => "inactive"
];

$result = array_replace_recursive($base, $update);

echo "<pre>";
print_r($result);
echo "</pre>";
?> -->



<!-- <?php
$keys = ["name", "age", "country"];
$values = ["Sara", 25, "Pakistan"];

$combined = array_combine($keys, $values);

echo "<pre>";
print_r($combined);
echo "</pre>";
?> -->


<!-- array_slice is use to show array from index to lenghth of index -->

<!--
<?php
$fruits = ["Apple", "Banana", "Mango", "Orange", "Grapes"];

$sliced = array_slice($fruits, 1, 3);

echo "<pre>";
print_r($sliced);
echo "</pre>";
?> -->
<!--
<?php
$fruits = ["a" => "Apple", "b" => "Banana", "c" => "Mango", "d" => "Orange"];

$sliced = array_slice($fruits, 1, 2, true);

echo "<pre>";
print_r($sliced);
echo "</pre>";
?> -->




<!-- array_splice() removes/replaces a portion of an array and can insert new values at that position. -->

<!-- 🔹 Example 1: Remove elements from an indexed array -->

<!-- <?php
$colors = ["Red", "Green", "Blue", "Yellow", "Black"];

array_splice($colors, 1, 2); // Removes 2 elements from index 1

echo "<pre>";
print_r($colors);
echo "</pre>";
?> -->

<!-- Example 2: Replace values -->
<!--
<?php
$colors = ["Red", "Green", "Blue", "Yellow"];

array_splice($colors, 1, 2, ["Pink", "Purple"]); // Replace 2 items at index 1

echo "<pre>";
print_r($colors);
echo "</pre>";
?> -->


<!-- Example 3: Insert without removing -->
<!--
<?php
$fruits = ["Apple", "Banana", "Mango"];

array_splice($fruits, 1, 0, ["Orange", "Grapes"]); // Insert at index 1

echo "<pre>";
print_r($fruits);
echo "</pre>";
?> -->



<!-- 1. array_keys() -->

<!--
<?php
$data = ["name" => "Ali", "age" => 20, "city" => "Lahore"];
$keys = array_keys($data);
echo "<pre>";
print_r($keys);
echo "</pre>";
?> -->


<!-- 2. array_key_exists() -->

<!--
<?php
$data = ["name" => "Sara", "age" => 22];

if (array_key_exists("age", $data)) {
    echo "Key 'age' exists.";
} else {
    echo "Key does not exist.";
}
?> -->



<!-- 6. array_key_first() & array_key_last() -->

<!--
<?php
$data = ["a" => 1, "b" => 2, "c" => 3];
echo array_key_first($data);
echo array_key_last($data);
?> -->




<!-- 5. array_flip()
Swaps keys with their values.
 -->

<!--
<?php
$country = ["PK" => "Pakistan", "IN" => "India"];
$flipped = array_flip($country);

print_r($flipped);
?> -->


<!-- . array_change_key_case()
Changes all keys to uppercase or lowercase. -->


<!-- <?php
$info = ["Name" => "Usman", "Age" => 25];
$lowerKeys = array_change_key_case($info, CASE_LOWER);
$upperKeys = array_change_key_case($info, CASE_UPPER);
echo "<pre>";
print_r($lowerKeys);
print_r($upperKeys);
echo "</pre>";
?> -->



<!-- PHP array_intersect() functions, which are useful for comparing arrays and finding common values or keys.  -->


<!-- 1. array_intersect() Returns values that are present in all arrays. -->
<!--
<?php
$a = ["red", "green", "blue"];
$b = ["green", "yellow", "blue"];

$result = array_intersect($a, $b);
print_r($result);
?> -->

<!--
2. array_intersect_assoc()
Returns values with matching keys and values. -->

<!--
<?php
$a = ["a" => "red", "b" => "green", "c" => "blue"];
$b = ["a" => "red", "b" => "yellow", "c" => "blue"];

$result = array_intersect_assoc($a, $b);
print_r($result);
?> -->



<!-- 3. array_intersect_key()
Compares array keys only. -->


<!--
<?php
$a = ["a" => "red", "b" => "green", "c" => "blue"];
$b = ["a" => "pink", "c" => "black"];

$result = array_intersect_key($a, $b);
print_r($result);
?> -->



<!-- 4. array_intersect_uassoc()
Compares both keys and values, with a user-defined function for keys. -->

<!--
<?php
$a = ["a" => "red", "b" => "green", "c" => "blue"];
$b = ["a" => "red", "B" => "green", "c" => "blue"];

function keyCompare($k1, $k2) {
    return strcasecmp($k1, $k2); // case-insensitive
}

$result = array_intersect_uassoc($a, $b, "keyCompare");
print_r($result);
?> -->
