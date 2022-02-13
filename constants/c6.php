<?php

error_reporting(E_NOTICE);
// wap in php to show difference b/w predefined error laval and user-defined error level?

printf("the value of true : %d \n",true);
printf("the value of TRUE : %d \n",TRUE);
printf("true is in case sensitive constant : %d\n",(TRUE==1));

define('true',10,1);
printf("the value of true after redeclaration : %d \n",true);


?>