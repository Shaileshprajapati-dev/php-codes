<?php

$no1 = readline('enter the no1:');
$no2 = readline('enter the no2:');

echo add($no1,$no2);

function add($no1=0,$no2=0)
{
	return $no1+$no2;
}

printf("the result  with 0 argument = %d \n" ,add());
printf("the result  with 1 argument $no1 = %d \n",add($no1));
printf("the result  with 2 argument $no2 = %d \n",add($no2));
printf("total result argument  = %d \n",add($no1,$no2));

?>