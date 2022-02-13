<?php
// supress operator @: supress operator or Notes operator : error operator 

$x=50;
echo "The value of x : $x";
echo PHP_EOL;

echo "The value of y : ".@$y;//undefined variable x,
$z=10;
$z=isset($z)?$z:null;
echo PHP_EOL;

echo "the value of z using ternary :".$z; //undefined varible z,
var_dump($z);

$z=isset($z)??null;
echo PHP_EOL;
echo "the value of z using null-coaleascing:".$z; //undefined variable z,
var_dump($z);

$p=(5<2)??null;
echo PHP_EOL;
var_dump($p);

if($p){
	echo 'p if running by null-coaleascing';
	}else{
		echo 'p else running by null-coaleascing';
	}
	
	$p=(5<2)?'':null;
echo PHP_EOL;
var_dump($p);

if($p){
	echo 'p if running by ternary';
	}else{
		echo 'p else running by ternary';
	}










?>