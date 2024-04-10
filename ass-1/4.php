//. Write a PHP script to declare three variables and print maximum among them. 
<?php
function checkNum($n1, $n2, $n3)
{
    if ($n1 > $n2 && $n1 > $n3)
        $temp = $n1;
    elseif ($n2 > $n3)
        $temp = $n2;
    else
        $temp = $n3;
    return $temp;
}
$num1 = readline("Enter the 1st number: ");
$num2 = readline("Enter the 2nd number: ");
$num3 = readline("Enter the 3rd number: ");
echo "Greatest among $num1 $num2 $num3 is " . checkNum($num1, $num2, $num3);
?>