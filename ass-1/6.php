
 // Write a PHP script to check whether accepted number is prime or not.
<?php
$num = 13;  
$count=0;  
for ( $i=1; $i<=$num; $i++)  
{  
if (($num%$i)==0)  
{  
$count++;  
}  
}
  
if ($count<3)  
{  
echo "$num is a prime number.";  
}
else
{
echo "$num is not a prime number."; 
}
?>
 
