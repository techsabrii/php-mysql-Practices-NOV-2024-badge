<!-- diff() -->


<!-- <?php
$a = ["a" => "red", "b" => "green", "c" => "blue"];
$b = ["d" => "red", "e" => "yellow", "f" => "blue"];

$result = array_diff($a, $b);
print_r($result);
?> -->


<!-- Explanation:



"red" and "blue" exist in both arrays → removed from result

"green" only in $a → included ✅ -->


<!-- 2. array_udiff() -->


<!--
<?php
$a = ["a" => "red", "b" => "green", "c" => "blue"];
$b = ["d" => "RED", "e" => "Yellow", "f" => "BLUE"];

function compareValues($v1, $v2) {
    return strcasecmp($v1, $v2); // case-insensitive
}

$result = array_udiff($a, $b, "compareValues");
print_r($result);
?> -->



<!-- Explanation:

strcasecmp() makes it case-insensitive

"red" matches "RED", "blue" matches "BLUE" → removed

"green" has no match → included ✅ -->



<!-- array_values()
Returns all values from an array (ignores keys). -->

<!-- <?php
$arr = ["a" => "Apple", "b" => "Banana"];
print_r(array_values($arr));
?> -->


<!-- array_unique()
Removes duplicate values. -->


<!-- <?php
$arr = ["a" => "red", "b" => "green", "c" => "red"];
print_r(array_unique($arr));
?> -->


<!--
🔹 array_column()
Returns values from a single column in a multi-dimensional array. -->
<!--
<?php
$records = [
    ["id" => 1, "name" => "Ali"],
    ["id" => 2, "name" => "Sara"],
];
print_r(array_column($records, "name"));
?> -->



<!-- 🔹 array_chunk()
Splits an array into chunks. -->

<!--
<?php
$arr = ["a", "b", "c", "d"];
echo '<pre>';
print_r(array_chunk($arr, 2));
echo '</pre>';
?> -->


<!-- 🔹 array_flip()
Flips keys and values. -->



<!-- <?php
$arr = ["a" => "apple", "b" => "banana"];
print_r(array_flip($arr));
?> -->







<!-- 🔹 array_sum()
Adds up all the values. -->
<!--
<?php
$arr = [10, 20, 30];
echo array_sum($arr);  // Output: 60
?> -->



<!-- 🔹 array_product()
Multiplies all values together. -->


<!--
<?php
$arr = [2, 3, 4];
echo array_product($arr);  // Output: 24
?> -->



<!-- array_rand()
Pick one or more random keys. -->



<!-- <?php
$arr = ["a", "b", "c", "d"];
$key = array_rand($arr, 2);
print_r($key);
?> -->



<!-- shuffle()
Randomly shuffle an array. -->

<!--
<?php
$arr = ["apple", "banana", "cherry"];
shuffle($arr);
print_r($arr);
?> -->


<!-- 🔹 array_fill()
Fill an array with values. -->

<!--
<?php
$arr = array_fill(0, 4, "Hello");
print_r($arr);
?> -->


<!-- array_fill_keys()
Fill array using keys. -->

<!--
<?php
$keys = ["a", "b", "c"];
$arr = array_fill_keys($keys, "PHP");
print_r($arr);
?> -->



<!-- array_walk()
Apply a callback to each array element. -->

<!--
<?php
$arr = ["a" => "apple", "b" => "banana"];
array_walk($arr, function(&$v, $k) {
    $v = strtoupper($v);
});
print_r($arr);
?> -->



<!-- array_walk_recursive()
Like array_walk() but works in multi-dimensional arrays. -->


<!--
<?php
$arr = ["fruit" => ["a" => "apple", "b" => "banana"]];
array_walk_recursive($arr, function($v, $k) {
    echo "$v => $k<br>";
});
?> -->


<!--
🔹 array_map()
Applies a function to each element. -->

<!--
<?php
$nums = [1, 2, 3];
$square = array_map(function($n) { return $n * $n; }, $nums);
print_r($square);
?> -->



<!-- 🔹 array_reduce()
Reduce array to a single value. -->

<!--
<?php
$nums = [1, 2, 3, 4];
$sum = array_reduce($nums, function($carry, $item) {
    return $carry + $item;
});
echo $sum;
?> -->




<!-- <?php
$str = "apple,banana,cherry";
$arr = explode(",", $str);
print_r($arr);
?>
 -->


<!-- <?php
$arr = ["a", "b", "c"];
echo implode(" ", $arr);
?> -->