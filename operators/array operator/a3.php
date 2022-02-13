<?php
// wap in php to + operation array with subscript

$x=[10,20,30,40,'shailesh'];
$y[5]='prajapati';
$y[6]='manish';
$y[7]='100';
$y[8]='2000';

echo "the count of x ".count($x);
echo PHP_EOL;
echo "the count of y ".count($y);
echo PHP_EOL;
var_dump(count($x)==count($y));
print_r($x+$y);
print_r($y+$x);

var_dump(($x+$y)==($y+$x));  //equal
var_dump(($x+$y)===($y+$x));  //equal not identical
var_dump(($x+$y)===($x+$y));  //equal and identical
var_dump(($y+$x)===($y+$x));  //equal and  identical

?>