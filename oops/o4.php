<?php
// wap in php to show Instance variable and Instance
class Test{
	var $a=10;
	var $b=20;
	var $c=30;
}
$x=10;

$test = new Test;
var_dump($test);

var_dump($test instanceof Test);
var_dump($x instanceof Test);
?>