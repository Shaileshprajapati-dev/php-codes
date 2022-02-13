<?php
$a = $_REQUEST['s1'];
$b = $_REQUEST['s2'];

printf($a);
printf("<br>");
printf($b);
printf("<br>");

$q = $a/$b;
$p = $q*$b;
$m = $a-$p;
echo $m;


?>