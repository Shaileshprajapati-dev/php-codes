<?php
// wap in php to show setter and getter
//setter:method
//getter:method
class Test{
	public $a=10; //variable public :are global variable
	public $b=20; //variable public :are global variable
	var $c=30;    //variable public :are global variable
	public function setValue($a,$b,$c){
		$this->a=$a;
		$this->b=$b;
		$this->c=$c;
	}
	public function getValue(){
		echo "this value of a from getter ={$this->a} \n";
		echo "this value of b from getter={$this->b} \n";
		echo "this value of c from getter={$this->c} \n";
	}
}
$test = new Test();
echo "this value of memeber a before setter ={$test->a} \n";
echo "this value of memeber b before setter ={$test->b} \n";
echo "this value of memeber c before setter ={$test->c} \n";
$test->setvalue(100,200,300);

echo "this value of memeber a before setter ={$test->a} \n";
echo "this value of memeber b before setter ={$test->b} \n";
echo "this value of memeber c before setter ={$test->c} \n";
$test->getValue();
?>