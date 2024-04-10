//Write a PHP script to check number 153 is Armstrong or not.
<?php  
$num=407;  
$total=0;  
$x=$num;  
while($x!=0)  
{  
$rem=$x%10;  
$total=$total+$rem*$rem*$rem;  
$x=$x/10;  
}  
if($num==$total)  
{  
echo "Yes $num  is an Armstrong number";  
}  
else  
{  
echo "No $num is not an armstrong number";  
}  
?>  