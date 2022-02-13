<?php

// wap in php to show var to var reference

$x='10';        //normal var
echo $x;   // normal var,,,

echo PHP_EOL;

$y='shailesh';   //string
echo $y;

echo PHP_EOL;

$shailesh=50;
echo $shailesh ;

echo PHP_EOL;

$z='chaman';
$$z=500;
printf("the value of chaman = %s",$chaman);

echo PHP_EOL;

$w='_100';
$$w='king';
printf("the value of w = %s \n",$w);
printf("the value of king = %s \n",$$w);
printf("the value of 100 = %s \n",$_100);

echo PHP_EOL;

$exp='x';
echo $exp;
echo PHP_EOL;
echo getType($exp);
echo $$exp;


echo PHP_EOL;
$student['name']='shailesh';
$student['class']='Btech';

foreach($student as $key => $value){
	     $key=$value;
		 printf("%s : %s \n",$key,$value);
}
echo $name;
echo PHP_EOL;
echo $class;

echo 'wothout using variable to variable';
echo PHP_EOL;

$car['name']='Maruti';
$car['class']='A class';
$car['price']='6.5 lakhs';

printf("the name of car :%s \n",$car['name']);
printf("the name of car :%s \n",$car['class']);
printf("the name of car :%s \n",$car['price']);


extract($car);
printf("the name of car :%s \n",$name);
printf("the name of car :%s \n",$class);
printf("the name of car :%s \n",$price);









?>