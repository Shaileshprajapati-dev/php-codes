<?php
// wap in php to  show  object making
class Test{
	var $a=10;
	var $b=20;
	var $c=30;
	
}
$test = new Test(); // Instantiation
var_dump($test);
$test = Test(); //assignment
var_dump($test);
$test = 10;     // assignment 
var_dump($test);

function Test(){
	return "hy from text function";
}
?>