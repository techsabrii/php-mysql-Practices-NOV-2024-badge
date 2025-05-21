<!-- 1. str_split() – Split string into array -->

<?php
// $str = "Hello";
// $result = str_split($str);
// echo "<pre>";
// var_dump(  $result);
// echo "</pre>";



// 🔹 2. chunk_split() – Split string into chunks





// $str = "123456789";
// echo chunk_split($str, 3, "/");




// 🔹 3. strtolower() – Convert to lowercase




// $str = "HELLO";
// echo strtolower($str);



// 4. strtoupper() – Convert to uppercase


// $str = "hello";
// echo strtoupper($str); // Output: HELLO




// 🔹 5. strlen() – String length


// $str = "Pakistan";
// echo strlen($str); // Output: 8




// 🔹 6. substr_count() – Count substring occurrences



// $str = "hello world, hello!";
// echo substr_count($str, "hello"); // Output: 2




// 🔹 7. strpos() – Find position of substring


// $str = "I love PHP";
// echo strpos($str, "PHP"); // Output: 7




// 🔹 8. substr() – Get part of a string




// $str = "Hello world";
// echo substr($str, 5, 10); // Output: Hello



// 🔹 9. str_replace() – Replace string




// $str = "I love JavaScript";
// echo str_replace("JavaScript", "PHP", $str); // Output: I love PHP





// 10. strcmp() – Compare strings (case-sensitive)



// echo strcmp("Apple", "Apple"); // Output: < 0 (negative value)


// 11. strcasecmp() – Compare strings (case-insensitive)





// echo strcasecmp("hello", "basit"); // Output: 0



// 🔹 12. strrev() – Reverse string


// echo strrev("hello"); // Output: olleh





// 🔹 13. str_shuffle() – Shuffle string randomly



// echo str_shuffle("pakistan"); // Output: npaktsia (random)




// 🔹 14. str_pad() – Pad a string to a certain length


// echo str_pad("PH", 10, "-", STR_PAD_RIGHT); // Output: ---PHP----



// 🔹 15. str_repeat() – Repeat a string



// echo str_repeat("ha", 5); // Output: =====



// 🔹 16. trim() – Remove whitespace from both sides


// $str = "  hello  ";
// echo trim($str); // Output: "hello"




// 🔹 17. chop() – Alias of rtrim() (remove from right)
// $str = "Hello   ";
// echo chop($str); // Output: "Hello"




// 🔹 18. addslashes() – Add slashes to escape characters


// $str = "Ali's book";
// echo addslashes($str); // Output: Ali\'s book





// 🔹 19. htmlentities() – Convert all HTML characters to entities



// $str = "<b>Bold</b>";
// echo htmlentities($str); // Output: &lt;b&gt;Bold&lt;/b&gt;





// 🔹 20. htmlspecialchars() – Convert special HTML chars



// $str = "<a href='#'>Click</a>";
// echo htmlspecialchars($str); // Output: &lt;a href='#'&gt;Click&lt;/a&gt;

?>


