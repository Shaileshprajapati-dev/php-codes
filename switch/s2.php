<?php
// wap in php show odd and even default case in  switch
$x=readline("Enter the X number :");
switch($x%2){ 
	case 0: 
	     echo "$x is even";
		 break;
		 
    default: 
	     echo "$x is odd";
		 break;
}
?>