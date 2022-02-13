<?php
// wap in php show consonant and vowels
$x=readline("Enter the charater :");


(getType($x=='string') and ctype_alpha($x))?:exit('invalid value supplied');
$output='';
switch($x){
	    case 'a':
		      $output='vowel';
			  break;
		case 'b':
		      $output='vowel';
			  break;	 
			 
		case 'c':
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