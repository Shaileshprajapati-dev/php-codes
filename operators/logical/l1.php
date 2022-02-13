<?php

// wpa in php to show logical operator OR
// using slack Equality  operator as logical OR

#$x=10; //false
$x=10.2;  // true
#var_dump($x>10);
var_dump($x >= 10); //1.greator tha 10 or aqual to 10

$x=10;
var_dump($x <= 10);

$x=10;
var_dump($x > 10 || $x == 10);

$x=10;
var_dump($x < 10 || $x == 10);
?>