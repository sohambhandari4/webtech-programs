<!DOCTYPE html>
<html lang="en">
<body>
<form action='seta1.php' method='post'>
<pre>   <h3>OPERATIONS</h3>                                                                                                                    
1<input type='radio' name='a' value='1'>Display.<br>
2<input type='radio' name='a' value='2'>size.<br>
3<input type='radio' name='a' value='3'>delete.<br>
4<input type='radio' name='a' value='4'>reverse.<br>
5<input type='radio' name='a' value='5'>traverse.<br>
<input type='submit' value='ok'>        <input type='reset' value='cancel'><br>
</pre>
</form>
</body>
</html>
<?php
$array=array('zero'=>0,'one'=>1,'two'=>2,'three'=>3,'four'=>4,'five'=>5);
$ch=$_POST['a'];
switch($ch)

{
case 1:foreach($array as $key=>$value)
{
echo"key:$key       val:$value.<br>";
}break;

case 2:echo sizeof($array);
break;

case 3 :
$len=sizeof($array);               
array_splice($array,$len);
print_r( $array);
break;

case 4 :
print_r(array_flip($array));
break;

case 5 :
shuffle($array);
print_r($array);
break;
}
?>