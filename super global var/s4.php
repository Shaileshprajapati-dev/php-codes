<?php

//wap in php to find the sum of all the argument supplied.from
//command line and Averange

print_r($argv);


$sum=0;
$avg=0;
for($i=1; $i<$argc; $i++){
	  
	  $sum =$sum+(int)$argv[$i];	  
	
}
printf("the sum = %d \n",$sum);
$avg=$sum/($avgc-1);
printf("the avg = %d \n",$avg);

?>