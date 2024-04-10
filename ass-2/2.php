//Design a HTML form to accept a string. Write a php function to reverse a string. 3. Design 
//a HTML form to accept a string. Write a PHP function that checks whether a passed string is 
//a palindrome or not? 

<?php
function reverse_string($str1)
{
 $n = strlen($str1);
 if($n == 1)
   {
    return $str1;
   }
 else
   {
   $n--;
   return reverse_string(substr($str1,1, $n)) . substr($str1, 0, 1);
   }
}
print_r(reverse_string('1234')."\n");
?>

<?php
function check_palindrome($string) 
{
  if ($string == strrev($string))
      return 1;
  else
	  return 0;
}
echo check_palindrome('1234')."\n";
?>