<?php

// wap in php to show append operator in string
$name='Shailesh';
$lname=' prajapati';
$name=$name.$lname;
echo $name;
echo PHP_EOL;

$name='Shailesh';
$lname=' prajapati';
$name.=$lname;
echo $name;
echo PHP_EOL;

$lname .=$name;
echo $name;
echo PHP_EOL;

?>