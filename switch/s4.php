<?php
// wap in php show consonant and vowels with multi-case
$x=readline("Enter the charater :");
(getType($x=='string') and ctype_alpha($x))?:exit('invalid value supplied');
$output='';
switch($x){
	    case 'a':
	    case 'A':
		      $output='vowel';
			  break;
		case 'b':
		case 'B':
		      $output='vowel';
			  break;	 
			 
		case 'c':
		case 'C':
		      $output='vowel';
			  break;
		case 'd':
		      $output='vowel';
			  break;	 
		default:
               $output='consonant';
               break;			     
}
echo $output;

?>