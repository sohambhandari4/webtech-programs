<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arithmetic Operation</title>
</head>
<body>
    <h1>Arithmetic Operation</h1>
    <form method="post">
        <label for="num1">Enter first number:</label>
        <input type="number" id="num1" name="num1" required><br>

        <label for="num2">Enter second number:</label>
        <input type="number" id="num2" name="num2" required><br>

        <input type="radio" id="add" name="operation" value="add" checked>
        <label for="add">Addition</label><br>

        <input type="radio" id="subtract" name="operation" value="subtract">
        <label for="subtract">Subtraction</label><br>

        <input type="radio" id="multiply" name="operation" value="multiply">
        <label for="multiply">Multiplication</label><br>

        <input type="radio" id="divide" name="operation" value="divide">
        <label for="divide">Division</label><br>

        <input type="submit" value="Calculate">
    </form>
    <h1>Result</h1>
    <?php
    function calculate($num1, $num2, $operation = 'add') 
    {
        switch ($operation) 
        {
            case 'add':
                return $num1 + $num2;
            case 'subtract':
                return $num1 - $num2;
            case 'multiply':
                return $num1 * $num2;
            case 'divide':
                return ($num2 != 0) ? $num1 / $num2 : "Cannot divide by zero";
            default:
                return "Invalid operation";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation']))
     {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = calculate($num1, $num2, $operation);
        echo "<p>The result of $num1 $operation $num2 is: $result</p>";
    }
    ?>
</body>
</html>
