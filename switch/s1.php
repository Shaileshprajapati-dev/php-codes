<?php
// wap in php show odd and even  number using switch
$x=readline("Enter the X number :");
switch(!($x%2==0)){    // coins =(H,T) S=(0,1)case1=(2==0)case2=(!($x%2==0))case3=($x%2)
	case 0: 
	     echo "$x is even";
		 break;
		 
    case 1: 
	     echo "$x is odd";
		 break;
}
?>