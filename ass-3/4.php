<?php
$stud=array(
'0'=>array('name'=> 'deepak' ,'age'=>20,'addr'=>'girim'),
'1'=>array('name'=> 'shankar', 'age'=>21,'addr'=>'khor'),
'2'=>array('name'=> 'ganesh' , 'age'=>19,'addr'=>'shirur'),
'3'=>array('name'=> 'radhu' , 'age'=>21,'addr'=>'khor'));
print_r($stud);                                                                                                                          
echo "<br>";
echo "<br> Element after deleting is:";

unset($stud[1]['age']);
print_r($stud);
?>