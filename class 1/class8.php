<?php

// Generates a 32-character hexadecimal hash using MD5.

// $password = "hello123";
// $md5Hash = md5($password);
// echo $md5Hash;



// Similar to md5, but produces a 40-character hash, considered more secure than MD5 (still not ideal for modern use).


// $password = "hello123";
// $sha1Hash = sha1($password);
// echo $sha1Hash; // e.g. 84d961568a65073a3bcf0eb216b2a576




// $original = "Hello, world!";
// $encoded = convert_uuencode($original);
// $decoded = convert_uudecode($encoded);

// echo $encoded;
// echo $decoded




// $str = "Sabrii";
// $hex = bin2hex($str);     // 504850
// $bin = hex2bin($hex);     // PHP

// echo $hex;
// echo $bin;


// echo chr(65); // A
// echo ord('A'); // 65





// echo min(10, 20, 3, 5).'<br>'; // 3
// echo max(10, 20, 3, 5); // 20



// $nums = [3, 9, 1];
// echo max($nums); // 9


// echo ceil(4.1); // 5




// echo floor(4.6); // 4



// echo round(4.4); // 5



// echo abs(-10); // 10




// echo rand(1, 100); // e.g. 45

// echo mt_rand(1, 100); // e.g. 87



// Returns a random float between 0 and 1.

// echo lcg_value(); // e.g. 0.6589231



// echo ucwords("php is awesome"); // Php Is Awesome




// $str = "  hello world  ";
// echo trim($str).'<br>';   // "hello world"
// echo ltrim($str).'<br>';  // "hello world  "
// echo rtrim($str).'<br>';  // "  hello world"



// $num = "123";
// echo is_numeric($num) ? "Yes" : "No"; // Yes

// $arr = [1, 2, 3];
// echo is_array($arr); // true

// $text = "PHP";
// echo is_string($text); // true
echo log(100, 10); // Output: 2 (10^2 = 100)


?>