<?php

error_reporting(E_USER_DEPRECATED);
error_reporting(E_DEPRECATED);
// non case-sensitiove user-defined constants 

define('gravity',10,true);
echo gravity;
echo PHP_EOL;

echo GRAVITY;
echo PHP_EOL;

echo Gravity;
echo PHP_EOL;

echo GrAvItY;
echo PHP_EOL;
?>