<!DOCTYPE html>
<html lang="en">
<head>
    <title>String Comparison and Manipulation</title>
</head>
<body>
    <h1>String Comparison and Manipulation</h1>
    <form method="post">
        <label for="string1">Enter the first string:</label>
        <input type="text" id="string1" name="string1" required><br>
        <label for="string2">Enter the second string:</label>
        <input type="text" id="string2" name="string2" required><br>
        <input type="radio" id="method1" name="comparison_method" value="operator" checked>
        <label for="method1">Use == operator</label><br>
        <input type="radio" id="method2" name="comparison_method" value="strcmp">
        <label for="method2">Use strcmp function</label><br>
        <label for="position">Enter position to reverse characters:</label>
        <input type="number" id="position" name="position" required><br>
        <input type="submit" value="Compare and Manipulate">
    </form>
    <?php
    function appendAndReverse($string1, $string2, $position) {
        $result = substr($string1, 0, $position) . $string2 . substr($string1, $position);
        $result = substr($result, 0, $position) . strrev(substr($result, $position));
        return $result;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['string1']) && isset($_POST['string2']) && isset($_POST['comparison_method']) && isset($_POST['position'])) {
        $string1 = $_POST['string1'];
        $string2 = $_POST['string2'];
        $comparison_method = $_POST['comparison_method'];
        $position = $_POST['position'];
        if ($comparison_method === "operator") {
            $comparison_result = ($string1 == $string2) ? "Strings are equal" : "Strings are not equal";
        } else {
            $comparison_result = (strcmp($string1, $string2) === 0) ? "Strings are equal" : "Strings are not equal";
        }
        $manipulated_string = appendAndReverse($string1, $string2, $position);
        echo "<p>$comparison_result</p>";
        echo "<p>Manipulated String: $manipulated_string</p>";
    }
    ?>
</body>
</html>