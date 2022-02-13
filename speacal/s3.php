<?php

// wap in php to string concatenation

$x='Shailesh';
$y=' prajapati';

var_dump(getType($x));
var_dump(getType($y));
var_dump($x.$y);
var_dump(getType($x.$y));

$x=10;
$y=30;
var_dump($x.$y);
var_dump(getType($x.$y));

$result='The sum is :';
echo $result.($x+$y);

//Note:=php allow methematical
//Evaluation only aftar using bracket
// other wise non numeric evcountered
//error will be throw
















?>