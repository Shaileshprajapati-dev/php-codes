<?php
// wap in php class and object in php
class Tv{
var $model = 'XL TVd';
var $type = 'LED';
var $price = '5000';
var $color = 'black';
var $varient = 'Curved';

public function showInformation(){
	   echo "the model for ".__CLASS__."{$this->model} \n";
	   echo "the type for ".__CLASS__."{$this->type} \n";
	   echo "the price for ".__CLASS__."{$this->price} \n";
	   echo "the color for ".__CLASS__."{$this->color} \n";
	   echo "the varient for ".__CLASS__."{$this->varient} \n";
}
public function volume(){
	echo "volume Up";
}
}
$tv =new Tv();   //object
$tv->showInformation();

echo "Tv volume will be :";
echo "{$tv->volume()}";
?>