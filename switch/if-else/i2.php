<?php
// wap in php to show find the Qudrant according to given Quadrant condition

$x=readline('Enter the x value :');
$y=readline('Enter the x value :');

if($x>0 and $y>0)
	        echo '1st Qudrant';
else if($x>0 and $y<0)
	        echo '4rth Qudrant';	
else if($x<0 and $y>0)
	        echo '2st Qudrant';
else
	        echo '3rth Qudrant';		
?>