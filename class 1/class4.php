<!-- <?php
        // Create a simple array
        $fruits = ["Apple", "Banana", "Mango", "Orange"];

        // Print one by one
        echo "Fruits List:<br>";
        echo $fruits[0] . "<br>";
        echo $fruits[1] . "<br>";
        echo $fruits[2] . "<br>";
        echo $fruits[3] . "<br>";


        echo "<pre>";
        print_r($fruits);
        echo "</pre>";
        ?> -->
<!-- <?php

        $student = [
            "name" => "Ali",
            "roll_no" => "123",
            "class" => "10th",
            "section" => "A"
        ];

        echo "Student Info:<br>";
        echo "Name: " . $student["name"] . "<br>";
        echo "Roll No: " . $student["roll_no"] . "<br>";
        echo "Class: " . $student["class"] . "<br>";
        echo "Section: " . $student["section"] . "<br>";


        echo "<pre>";
        print_r($student);
        echo "</pre>";
        ?> -->

<!-- for each loop -->
<!-- <?php
        $colors = ["Red", "Green", "Blue", "Yellow"];

        foreach ($colors as $color) {
            echo "Color: $color <br>";
        }
        ?> -->


<!-- <?php
        $student = [
            "name" => "Ali",
            "roll_no" => "123",
            "class" => "10th",
            "section" => "A"
        ];

        foreach ($student as $key => $value) {
            echo ucfirst($key) . ": $value <br>";
        }
        ?> -->


<!-- <?php
        $fruits = ["Apple", "Banana", "Mango", "Orange"];

        $index = 1;

        foreach ($fruits as $fruit) {
            echo "$index Fruit: $fruit <br>";
            $index++;
        }
        ?> -->


<!-- <?php
        // Multidimensional array of students
        $students = [
            ["name" => "Ali", "roll_no" => "101", "class" => "10th"],
            ["name" => "Sara", "roll_no" => "102", "class" => "9th"],
            ["name" => "Usman", "roll_no" => "103", "class" => "10th"]
        ];


        $index = 1;
        foreach ($students as $student) {
            echo "Student $index:<br>";
            echo "Name: " . $student["name"] . "<br>";
            echo "Roll No: " . $student["roll_no"] . "<br>";
            echo "Class: " . $student["class"] . "<br><br>";
            $index++;
        }
        ?> -->


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">






<!-- <div class="container">
    <h3 class="mb-3">Student Records (Associative Array)</h3>
    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Student Key</th>
                <th>Name</th>
                <th>Roll No</th>
                <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $students = [
                "student1" => ["name" => "Ali", "roll_no" => "101", "class" => "10th"],
                "student2" => ["name" => "Sara", "roll_no" => "102", "class" => "9th"],
                "student3" => ["name" => "Usman", "roll_no" => "103", "class" => "10th"]
            ];

            $index = 1;
            foreach ($students as $key => $student) {
                echo "<tr>";
                echo "<td>$index</td>";
                echo "<td>$key</td>";
                echo "<td>{$student['name']}</td>";
                echo "<td>{$student['roll_no']}</td>";
                echo "<td>{$student['class']}</td>";
                echo "</tr>";
                $index++;
            }
            ?>
        </tbody>
    </table>
</div> -->


<!-- <h3 class="mb-3">Student Records</h3> -->
<!-- <table class="table table-bordered table-striped text-center">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Roll No</th>
            <th>Class</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $students = [
            ["name" => "Ali", "roll_no" => "101", "class" => "10th"],
            ["name" => "Sara", "roll_no" => "102", "class" => "9th"],
            ["name" => "Usman", "roll_no" => "103", "class" => "10th"]
        ];

        $total = count($students);

        for ($i = 0; $i < $total; $i++) {
            echo "<tr>";
            echo "<td>" . ($i + 1) . "</td>";
            echo "<td>" . $students[$i]["name"] . "</td>";
            echo "<td>" . $students[$i]["roll_no"] . "</td>";
            echo "<td>" . $students[$i]["class"] . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
</div> -->
<!-- <div class="container">
    <h3 class="mb-3">Student Records (Associative Array)</h3>
    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Student Key</th>
                <th>Name</th>
                <th>Roll No</th>
                <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $students = [
                "student1" => ["name" => "Ali", "roll_no" => "101", "class" => "10th"],
                "student2" => ["name" => "Sara", "roll_no" => "102", "class" => "9th"],
                "student3" => ["name" => "Usman", "roll_no" => "103", "class" => "10th"]
            ];

            $index = 1;
            foreach ($students as $key => $details) {
                echo "<tr>";
                echo "<td>$index</td>";
                echo "<td>$key</td>";

                foreach ($details as $value) {
                    echo "<td>$value</td>";
                }

                echo "</tr>";
                $index++;
            }
            ?>
        </tbody>
    </table>
</div> -->

<!-- list() functiopn -->


<!-- <div class="container">
    <h3 class="mb-3">Student Records (Using list() in Loop)</h3>
    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Student Key</th>
                <th>Name</th>
                <th>Roll No</th>
                <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $students = [
                "student1" => ["Ali", "101", "10th"],
                "student2" => ["Sara", "102", "9th"],
                "student3" => ["Usman", "103", "10th"]
            ];

            $index = 1;
            foreach ($students as $key => $student) {

                list($name, $rollNo, $class) = $student;

                echo "<tr>";
                echo "<td>$index</td>";
                echo "<td>$key</td>";
                echo "<td>$name</td>";
                echo "<td>$rollNo</td>";
                echo "<td>$class</td>";
                echo "</tr>";

                $index++;
            }
            ?>
        </tbody>
    </table>
</div> -->



<!-- <div class="container">
    <h3 class="mb-3">Student Records (Using list() in Loop)</h3>
    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Student Key</th>
                <th>Name</th>
                <th>Roll No</th>
                <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $students = [
                "student1" => ["name" => "Ali", "roll_no" => "101", "class" => "10th"],
                "student2" => ["name" => "Sara", "roll_no" => "102", "class" => "9th"],
                "student3" => ["name" => "Usman", "roll_no" => "103", "class" => "10th"]
            ];

            $index = 1;
            foreach ($students as $key => $student) {
                // Destructure values using list()
                list("name" => $name, "roll_no" => $rollNo, "class" => $class) = $student;

                echo "<tr>";
                echo "<td>$index</td>";
                echo "<td>$key</td>";
                echo "<td>$name</td>";
                echo "<td>$rollNo</td>";
                echo "<td>$class</td>";
                echo "</tr>";

                $index++;
            }
            ?>
        </tbody>
    </table>
</div> -->



<!-- count function  -->


<!-- <div class="container">
    <h3 class="mb-3">Student Records (Using list() in Loop with count())</h3>
    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Student Key</th>
                <th>Name</th>
                <th>Roll No</th>
                <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $students = [
                "student1" => ["Ali", "101", "10th"],
                "student2" => ["Sara", "102", "9th"],
                "student3" => ["Usman", "103", "10th"]
            ];

            $index = 1;
            $totalStudents = count($students);  // Get the count of students

            // Use count to ensure we're not exceeding the total students count
            foreach ($students as $key => $student) {
                // Use list() to destructure the array
                list($name, $rollNo, $class) = $student;

                echo "<tr>";
                echo "<td>$index</td>";
                echo "<td>$key</td>";
                echo "<td>$name</td>";
                echo "<td>$rollNo</td>";
                echo "<td>$class</td>";
                echo "</tr>";

                $index++;
            }
            ?>
        </tbody>
    </table>

    <p>Total Students: <?php echo $totalStudents; ?></p>
</div> -->


<!-- <div class="container">
    <h3 class="mb-3">Student Records (Using list() in Loop with Total Data Records Count)</h3>
    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Student Key</th>
                <th>Name</th>
                <th>Roll No</th>
                <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $students = [
                "student1" => ["name" => "Ali", "roll_no" => "101", "class" => "10th"],
                "student2" => ["name" => "Sara", "roll_no" => "102", "class" => "9th"],
                "student3" => ["name" => "Usman", "roll_no" => "103", "class" => "10th"]
            ];

            $index = 1;
            $totalDataRecords = 0;
            foreach ($students as $key => $student) {
                $totalDataRecords += count($student);
                list("name" => $name, "roll_no" => $rollNo, "class" => $class) = $student;
                echo "<tr>";
                echo "<td>$index</td>";
                echo "<td>$key</td>";
                echo "<td>$name</td>";
                echo "<td>$rollNo</td>";
                echo "<td>$class</td>";
                echo "</tr>";
                $index++;
            }
            ?>
        </tbody>
    </table>

    <p>Total Data Records: <?php echo $totalDataRecords; ?></p> Display total data records
</div> -->



<!-- <div class="container">
    <h3 class="mb-3">Student Records (Using list() in Loop with Total Data Records Count)</h3>
    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Student Key</th>
                <th>Name</th>
                <th>Roll No</th>
                <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Sample data with nested array
            $students = [
                "student1" => ["name" => "Ali", "roll_no" => "101", "class" => "10th", "subjects" => ["Math", "English"]],
                "student2" => ["name" => "Sara", "roll_no" => "102", "class" => "9th"],
                "student3" => ["name" => "Usman", "roll_no" => "103", "class" => "10th"]
            ];
            function countAllData($array) {
                $count = 0;
                foreach ($array as $value) {
                    if (is_array($value)) {
                        $count += countAllData($value);
                    } else {
                        $count++;
                    }
                }
                return $count;
            }

            $index = 1;
            $totalDataRecords = 0;

            foreach ($students as $key => $student) {
                $totalDataRecords += countAllData($student);


                $name = $student['name'] ?? '';
                $rollNo = $student['roll_no'] ?? '';
                $class = $student['class'] ?? '';

                echo "<tr>";
                echo "<td>$index</td>";
                echo "<td>$key</td>";
                echo "<td>$name</td>";
                echo "<td>$rollNo</td>";
                echo "<td>$class</td>";
                echo "</tr>";
                $index++;
            }
            ?>
        </tbody>
    </table>

    <p><strong>Total Data Records:</strong> <?php echo $totalDataRecords; ?></p>
</div> -->


<div class="container">
    <h3 class="mb-3">Student Records (Manual Total Data Records Count Without count())</h3>
    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Student Key</th>
                <th>Name</th>
                <th>Roll No</th>
                <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $students = [
                "student1" => ["name" => "Ali", "roll_no" => "101", "class" => "10th", "subjects" => ["Math", "English"]],
                "student2" => ["name" => "Sara", "roll_no" => "102", "class" => "9th"],
                "student3" => ["name" => "Usman", "roll_no" => "103", "class" => "10th"]
            ];

            $index = 1;
            $totalDataRecords = 0;

            foreach ($students as $key => $student) {
                foreach ($student as $i) {
                    if (is_array($i)) {
                        foreach ($i as $enternalI) {
                            if (!is_array($enternalI)) {
                                $totalDataRecords++;
                            }
                        }
                    } else {
                        $totalDataRecords++;
                    }
                }



            }
            ?>
        </tbody>
    </table>

    <p><strong>Total Data Records:</strong> <?php echo $totalDataRecords; ?></p>
</div>
