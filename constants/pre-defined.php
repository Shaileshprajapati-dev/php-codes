<?php

// wap in php to show total pre-defined constants in php


$count=count(get_defined_constants());
printf("the total constants = %d",$count);

print_r(get_defined_constants());

?>