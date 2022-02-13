<?php
// wap in php to + operation array with duplicate subscript

$x=[10,20,30,40];
$y[0]='900';
$y[1]='200';
$y[2]='100';
$y[3]='2000';

echo "the count of x ".count($x);
echo PHP_EOL;
echo "the count of y ".count($y);
echo PHP_EOL;
var_dump(count($x)==count($y));
print_r($x);
print_r($y);

var_dump(($x+$y)==($y+$x));  //equal
var_dump(($x+$y)!=($y+$x));  
var_dump(($x+$y)===($y+$x)); 
 
var_dump(($x+$y)==($x));  
var_dump(($x+$y)===($x));  

?>