<?php
// wap in php to + operation array with duplicate subscript

$x=[10,20,30,40];
$y=[100,200,300,400,500,600];

echo "the count of x ".count($x);
echo PHP_EOL;
echo "the count of y ".count($y);
echo PHP_EOL;
var_dump(count($x)==count($y));
print_r($x);
print_r($y);

print_r($x+$y);  
print_r($y+$x);  

?>