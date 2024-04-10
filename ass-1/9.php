//Write a PHP script to test whether a number is greater than 30, 20 or 10 using 
//ternary operator. 
<?php
// Function to test whether a number is greater than 30, 20, or 10 using ternary operator
function testNumber($number)
{
    // Ternary operator to check the conditions
    $result = ($number > 30) ? "greater than 30" : 
              (($number > 20) ? "greater than 20" : 
              (($number > 10) ? "greater than 10" : "less than or equal to 10"));
    
    // Output the result
    echo "The number $number is $result.";
}

// Test the function with different numbers
testNumber(35); // Test with a number greater than 30
echo "<br>";
testNumber(25); // Test with a number greater than 20
echo "<br>";
testNumber(15); // Test with a number greater than 10
echo "<br>";
testNumber(5);  // Test with a number less than or equal to 10
?>
