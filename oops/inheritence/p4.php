<?php
// wap in php to show Heiriechal Inheritance

class papa{
	public function scooty(){
		echo "scooty method from papa \n";
	}
}
class beta extends papa{
	public function bike(){
		echo "BIKE method from beta \n";
	}
}
class beti extends papa{
	public function cycle(){
		echo "cycle method from beti \n";
	}
}
$beta= new beta();
$beta->bike();
$beta->scooty();

$papa = new papa();
$papa->scooty();

$beti= new beti();
$beti->cycle();
$beti->scooty();
?>