<?php
// wap in php to show variable and methods in php
class Test{
     var $a=10;	
     var $b=20;	
	 function add(){
		 $a=100; //stack
		 $b=200;  // stack
		 
		 echo $a+$b;
		 echo "\n";
		 //$test = new Test;
		 echo 'this is add function'.PHP_EOL;
		 echo $this->a + $this->b;
	 }
}
$test =new Test();
$test->add();
?>