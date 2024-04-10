//Write a PHP script to print following floyd’s triangle. 
//1 
//2 3 
//4 5 6 
//7 8 9 10

<?php
function printFloydsTriangle($rows)
{
    $number = 1; 
    for ($i = 1; $i <= $rows; $i++) 
    {
        for ($j = 1; $j <= $i; $j++) 
        {
            echo $number . " ";
            $number++; 
        }
        echo "<br>";
    }
}
printFloydsTriangle(4);
?>
