// Write a PHP script to accept the number from user and Write a php function to calculate the 
//factorial of a number (a non-negative integer). The function accepts the number as an 
//argument.
<?php  
function Factorial($number)
{ 
	$factorial = 1; 
	for ($i = 1; $i <= $number; $i++)
	{ 
	$factorial = $factorial * $i; 
	} 
	return $factorial; 
} 

// Driver Code 
$number = 10; 
$fact = Factorial($number); 
echo "Factorial = $fact"; 
?> 
