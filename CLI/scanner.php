<?php

//scanner function

function input($msg=' '){

if($msg==' '){

exit('massage is request');
}
echo $msg;
$input = fgets(STDIN,1024);
return trim($input);
}


?>