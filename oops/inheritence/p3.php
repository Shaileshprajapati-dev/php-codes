<?php
// wap in php to show multi-level Inheritace

class baba{
	public function property(){
		echo "baba has 1 acre property \n";
	}
}
class papa extends baba{
	public function bike(){
		echo "bike method from papa \n";
	}
}
class beta extends papa{
	public function cycle(){
		echo "cycle method from beta  \n";
	}
}

$papa = new papa();
$papa->bike;
$papa->property();

$beta = new Beta();
$beta->cycle();
$beta->bike();
$beta->property();


$baba = new Baba();
$baba->property();

?>