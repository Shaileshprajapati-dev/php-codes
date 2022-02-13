<?php
//wap in php make userdefined string_repeat function which repeat the string N no of time

function string_multiply($str='',$n=0){
	if($n==0){
		return $str;
	}
	$x='';
	for($i=0;$i<$n;$i++){
		$x.=$str;
	}
      return $x;	
}
 $a=readline('Enter the string :');
 $n=readline('how many time to be repeated :');
 echo string_multiply($a,$n);


?>