<?php

// wap in php to multiple Inheritance
//In php multiple Inheritance is not didectly Suppirted
//But we want it to implement 1. traits 2.Interface.

class papa1{
	public function scooty(){
		echo "scooty method from papa1 \n";
	}
}

class papa2{
	public function bike(){
		echo "scooty method from papa2 \n";
	}
}
class beta Implements papa1,papa2{
	public function cycle(){
		echo "bike method from beta \n";
	}
}
$papa1= new papa1();
$papa1->scooty();

$papa2= new papa2();
$papa2->bike();
?>