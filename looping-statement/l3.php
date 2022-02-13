<?php
//wap i php to show find the reverse number
$no = readline('enter the number:');
$count = readline('enter the number count:');
$sum=0;
for(;;){
	$q=$no/10;
	$rem=$no%10;
	$ef=$rem * (pow(10,$count-1));
	$sum=$sum+$ef;
	$no=$q;
	$count--;
	if($no==0){
		break;
	}
}
echo $sum;
?>