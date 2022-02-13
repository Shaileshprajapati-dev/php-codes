<?php
$p = $_REQUEST['n1'];
$r = $_REQUEST['n2'];
$t = $_REQUEST['n3'];

$si =$p*$r*$t/100;

printf("p: %d",$si);
printf("<br>");
printf("r:%d",$r);
printf("<br>");
printf("t:%d",$t);

?>