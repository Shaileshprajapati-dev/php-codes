<?php

// wap in php to find perfect number using recursion ternary operator

$n=readline('enter the N value:');
if(is_perfect($n)){
	echo 'Number is perfect';
}else{
	echo 'Number is not perfect';
}
function is_perfect($n,$i=1,$sum=0){
	if($i==$n){
		return false;
	}else{
		if($n % $i==0){
			$sum=$sum+$i;
		}
		if($sum==$n){
			return true;
		}
		return is_perfect($n,$i+1,$sum);
	}
}
?>