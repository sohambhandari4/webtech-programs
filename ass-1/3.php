//Write a PHP script to script to display time table of your class (use HTML table 
//tags in echo).

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Class Timetable</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Class Timetable</h1>
    <?php
    // Define timetable
    $timetable = array(
        array("Time", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday"),
        array("8:00 AM - 9:00 AM", "Maths", "Science", "English", "History", "Geography"),
        array("9:00 AM - 10:00 AM", "Science", "English", "Maths", "Geography", "History"),
        array("10:00 AM - 11:00 AM", "English", "Maths", "Science", "History", "Geography"),
        // Add more rows as needed
    );
    ?>

    <table>
        <?php
        // Display timetable
        foreach ($timetable as $row)
         {
            echo "<tr>";
            foreach ($row as $cell)
         {
                echo "<td>$cell</td>";
         }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
