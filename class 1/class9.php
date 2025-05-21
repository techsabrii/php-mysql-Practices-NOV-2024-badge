<?php
// // Set default timezone (important for accurate results)
//  date_default_timezone_set("Asia/Karachi");


// // 1. date()
// echo date("Y-M-D h:i:s A") . "\n";
// // Returns current date and time in format YYYY-MM-DD HH:MM:SS

// // 2. time()
// echo "2. time(): " . time() . "\n";
// // Returns current Unix timestamp (seconds since Jan 1, 1970)

// // 3. mktime()
// $mk = mktime(0, 0, 0, 12, 25, 2025);
// echo date("Y-m-d h i s", $mk) . "\n";
// // Gets Unix timestamp for a custom date

// // 4. gmmktime()
// $gm = gmmktime(0, 0, 0, 7, 1, 2025);
// echo  gmdate("Y-m-d h i s", $gm) . "\n";
// // GMT version of mktime

// // 5. date_create()
// $date = date_create("20250422123523");
// echo  date_format($date, "  h i s Y-m-d") . "\n";
// // Creates a DateTime object

// // 6. date_format()
// echo date_format($date, "l, F j, Y") . "\n";
// // Formats the DateTime object

// // 7. checkdate()
// echo "7. checkdate(): ";
// var_dump(checkdate(2, 29, 2024));
// // Checks if a date is valid (false in this case because 2025 is not a leap year)

// // 8. date_diff()
// $date1 = date_create("2025-04-22");
// $date2 = date_create("2025-05-01");
// $diff = date_diff($date1, $date2);
// echo  $diff->format("%a days") . "\n";
// // Calculates difference between two dates


// $date1 = date_create("2025-04-22 14:30:00"); // Start date and time
// $date2 = date_create("2026-06-25 18:45:00"); // End date and time

// $diff = date_diff($date1, $date2);

// // Output all differences
// echo "Years: " . $diff->y . "<br>";         // Difference in years
// echo "Months: " . $diff->m . "<br>";        // Remaining months (not total)
// echo "Days: " . $diff->d . "<br>";          // Remaining days (not total)
// echo "Total Days: " . $diff->days . "<br>"; // Total days difference
// echo "Hours: " . $diff->h . "<br>";         // Remaining hours
// echo "Minutes: " . $diff->i . "<br>";       // Remaining minutes
// echo "Seconds: " . $diff->s . "<br>";       // Remaining seconds

// // Now, let's get total values in each unit
// $total_minutes = $diff->days * 24 * 60 + $diff->h * 60 + $diff->i;
// $total_hours = $diff->days * 24 + $diff->h;

// echo "Total Hours: " . $total_hours . "<br>";
// echo "Total Minutes: " . $total_minutes . "<br>";


// // 9. date_add()
// $date3 = date_create("2025-04-22");
// date_add($date3, date_interval_create_from_date_string("10 days"));
// echo date_format($date3, "Y-m-d") . "\n";
// // Adds 10 days to the date

// // 10. date_sub()
// $date4 = date_create("2025-04-22");
// date_sub($date4, date_interval_create_from_date_string("5 days"));
// echo date_format($date4, "Y-m-d") . "\n";
// // Subtracts 5 days

// // 11. date_modify()
// $date5 = date_create("2025-04-22");
// date_modify($date5, "-1 days");
// echo date_format($date5, "Y-m-d") . "\n";
// // Modifies date to add 1 month

// 12. getdate()
;
// print_r(getdate());
// // Returns array of current date/time parts

// // 13. localtime()

// print_r(localtime(time(), true));
// // Local time as an associative array

// // 14. gettimeofday()
// echo "14. gettimeofday(): \n";
// print_r(gettimeofday());
// // Returns current time with microseconds

// // 15. date_parse()

// print_r(date_parse("2025-04-22 12:00:00"));
// // Parses a datetime string into components

// // 16. strtotime()
// echo date("Y-m-d", strtotime("+1 days")) . "\n";
// // Converts relative string to timestamp

// // 17. gmstrftime() - Deprecated in PHP 8.1, used here for legacy reference
// echo "17. gmstrftime(): " . gmstrftime("%Y-%m-%d", gmmktime(0, 0, 0, 4, 22, 2025)) . "\n";

// // 18. date_time_set()
// $date6 = date_create("2025-04-22");
// date_time_set($date6, 14, 30);
// echo date_format($date6, "Y-m-d H:i:s") . "\n";
// // Sets time on a DateTime object

// // 19. TimeZone Functions

// $tz = new DateTimeZone("Asia/Karachi");
// echo timezone_name_get($tz) . "\n";
// // Gets timezone name

// // 20. idate()
// echo idate("Y") . ", Month = " . idate("m") . ", Day = " . idate("d") . "\n";
// // Gets integer parts of date

// // 21. microtime()
// echo "21. microtime(): Float = " . microtime(true) . " | String = " . microtime() . "\n";
// // Returns microseconds timestamp

// // 22. strftime() - Deprecated in PHP 8.1, shown here for educational use
// echo "22. strftime(): " . strftime("%A, %d %B %Y", mktime(0, 0, 0, 4, 22, 2025)) . "\n";
?>
