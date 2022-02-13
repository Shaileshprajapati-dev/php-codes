<?php

$num1 = $_REQUEST['n1'];
$num2 = $_REQUEST['n2'];
$sum = $num1+$num2;

$num1 = $_REQUEST['n1'];
$num2 = $_REQUEST['n2'];
$sub = $num1-$num2;

$num1 = $_REQUEST['n1'];
$num2 = $_REQUEST['n2'];
$multi = $num1*$num2;

$num1 = $_REQUEST['n1'];
$num2 = $_REQUEST['n2'];
$divi = $num1/$num2;
printf("sum:%s",$sum);
printf("<br>");

printf("sub:%s",$sub);
printf("<br>");

printf("multi:%s",$multi);
printf("<br>");

printf("divi:%s",$divi);
printf("<br>");


?>