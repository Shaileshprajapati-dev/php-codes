<?php

// wap in php to show Exception Handling

$x=readline('Enter the number 1 :');
$y=readline('Enter the number 2 :');
$result=0;

try{
	echo "Block of try staeted...\n";
	if($y==0){
		throw new Exception;
	}else{
		$result=$x/$y;
	}
	
	echo "Block of try Endeded...\n";
}
catch(Exception $e){
	echo "Some Exception Raised".$e->getMessage();
	echo "\n";
}
finally{
	echo "this block will be , excuted....\n";
	echo "The Result = $result \n";
}
?>