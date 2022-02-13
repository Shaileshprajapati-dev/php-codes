<?php

// wap in php to connect to mysql database

define('HOST','localhost:3306');
define('USER','root');
define('PASSWORD','');
define('DBNAME','app-2022');

try{
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    if($conn=mysqli_connect(HOST,USER,PASSWORD,DBNAME)){
		
		print_r($conn);
		
	}else{
		throw new Exception();
	}
}catch(Exception $e){
	  echo $e->getmessage();
	  exit('DB connection failed'.mysqli_connect_error());
}
?>