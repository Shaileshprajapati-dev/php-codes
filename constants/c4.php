<?php

// wap in php to show re-declaration error in constants

define('gravity',10);
echo gravity;

echo PHP_EOL;

define('GRAVITY',9);
echo GRAVITY;

//redafine
define('gravity',9.8);
echo gravity;// notice error

define('TRUE','yes');
echo TRUE;    // notice error

echo PHP_EOL;
printf("the value of predefined constant true :%d \n",TRUE);
define('TRUE','yes');
printf("the value of predefined constant true :%d \n",TRUE);   //E_NOTICE

echo PHP_EOL;
printf("the value of user-predefined gravity :%d \n",gravity);   //E_USER_NOTICE
define('gravity',9.8);
printf("the value of user-predefined gravity :%d \n",gravity);












?>