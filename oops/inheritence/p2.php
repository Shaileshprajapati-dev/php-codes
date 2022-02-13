<?php

// wap in php to show single line Inheritance

class papa{
	
     public function bike(){
		 echo "Bike method from papa \n";
	 }
}
class beta extends papa{
	
     public function cycle(){
		 echo "cycle method from beta \n";
	 }
}
$papa = new papa();
$papa->bike();

$beta = new beta();
$beta->cycle();
$beta->bike();
?>