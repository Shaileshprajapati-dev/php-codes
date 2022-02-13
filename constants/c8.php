<?php


// wap in php ton show constants are global inside class

define('GRAVITY',10);
printf("the value of GRAVITY AT GLOBAL SCOPE :%d\n",GRAVITY);

$gravity=9.8;
printf("the value of GRAVITY AT GLOBAL SCOPE :%d\n",$gravity);

class Test{
	private $g;       //instance variable
	private $G;       //instance variable
	
	public function __construct(){     //consturcts
		$this->g = gravity;
		$this->G = GRAVITY;
		
		
		printf("the value of GRAVITY inside mothod :%d\n",GRAVITY);
		printf("the value of GRAVITY inside method :%d\n",$gravity);
        printf("tha value of gravity using g of class :%d\n",$this->g);   //undefined 
        printf("tha value of gravity using G of class :%d\n",$this->G);        //undefined 
        
}
}
$test = new Test();
?>