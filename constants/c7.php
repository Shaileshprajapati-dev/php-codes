<?php

// wap in php ton show constants are global

#define('shailesh','prajapati');
#printf("No One Can ,Seperate Shailesh from %s \n",shailesh);
#$SR='chhotu';
#printf("the only chhotu in SR life is :%s\n",SR);

define('GRAVITY',10);
printf("the value of GRAVITY AT GLOBAL SCOPE :%d\n",GRAVITY);


$gravity=9.8;
printf("the value of GRAVITY AT GLOBAL SCOPE :%d\n",$gravity);


function test(){
	printf("the value of GRAVITY AT local SCOPE :%d\n",GRAVITY);
	
	
	printf("the value of GRAVITY AT local SCOPE :%d\n",gravity);
}

test();

?>