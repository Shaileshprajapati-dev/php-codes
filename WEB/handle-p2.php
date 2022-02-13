<?php

echo getType($_REQUEST);
printf("<br>");
print_r($_REQUEST);
printf("<br>");
$name = $_REQUEST['n'];
printf("<br>");
echo $name;

printf("hy welcome ! Mr.%s",$name);


?>