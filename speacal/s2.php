<?php
// wap in php to show modify operator for -ve

$x=10;
$x=$x-1;
echo "the value of x without assignment operator : $x \n";

$x=10;
$x-=1;
echo "the value of x without assignment operator : $x \n";

$x=10;
$z=$x--;
echo "the value of x using post increment operator : $x and $z \n";

$x=10;
$z=--$x;
echo "the value of x using pre increment operator : $x and $z \n";
?>