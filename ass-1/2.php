// Write a PHP script to display student information on web page
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Information</title>
</head>
<body>
    <h1>Student Information</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Grade</th>
        </tr>
        <?php
        // Define student information
        $students = array(
            array("id" => 1, "name" => "John Doe", "age" => 20, "grade" => "A"),
            array("id" => 2, "name" => "Jane Smith", "age" => 21, "grade" => "B"),
            array("id" => 3, "name" => "Alice Johnson", "age" => 22, "grade" => "C")
        );

        // Display student information
        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>" . $student["id"] . "</td>";
            echo "<td>" . $student["name"] . "</td>";
            echo "<td>" . $student["age"] . "</td>";
            echo "<td>" . $student["grade"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
