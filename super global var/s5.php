<?php

// wap to make anonymous script in php
echo 'this is shailesh ';
echo PHP_EOL;
echo 'this is shailesh : version 1.x';
echo PHP_EOL;

$commands=[
            '--help' =>'this is help command',
            '--v' =>'1.x',
            '--a' =>'for addition',
            '--s' =>'for subtraction',
            '--m' =>'for  multifiction',
            '--d' =>'for  division',
            '--r' =>'for  remender',
           ];
		   
		   echo PHP_EOL;
		   
foreach($commands as $key => $value){
	printf("%s\t:\t%s\n",$key,$value);
}
$output='';
if(isset($argv[1])){
$command=$argv[1];
switch(command){
	
	
	case '--v':
	$output='1.x';
	break;
	
	case '--a':
	      $x=readline('enter the number 1:');
	      $y=readline('enter the number 2:');
		  $output = $x=$y;
		  break;
	
	
	default:
	   $output='invalid command suppied';
	   break;
	
}
}

echo $output;
?>