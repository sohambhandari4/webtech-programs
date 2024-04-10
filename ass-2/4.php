<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vowel Counter</title>
</head>
<body>
    <h1>Vowel Counter</h1>
    <form method="post">
        <label for="input_string">Enter a string:</label>
        <input type="text" id="input_string" name="input_string" required>
        <input type="submit" value="Submit">
    </form>
    <?php
function countVowels($string) {
    $string = strtolower($string);
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $totalVowels = 0;
    $vowelOccurrences = array_fill_keys($vowels, 0);
    for ($i = 0; $i < strlen($string); $i++) 
    {
        if (in_array($string[$i], $vowels)) 
        {
            $totalVowels++;
            $vowelOccurrences[$string[$i]]++;
        }
    }
    return array('totalVowels' => $totalVowels, 'vowelOccurrences' => $vowelOccurrences);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string = $_POST["string"];
    $result = countVowels($string);
    echo "<h2>Count of Vowels:</h2>";
    echo "<p>Total number of vowels in the string: " . $result['totalVowels'] . "</p>";
    echo "<h2>Occurrences of Each Vowel:</h2>";
    foreach ($result['vowelOccurrences'] as $vowel => $occurrences)
     {
        echo "<p>$vowel: $occurrences</p>";
    }
}
?>
</body>
</html>
