<?php
require __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/data.php';
$table = new LucidFrame\Console\ConsoleTable();

$table
   ->addHeader('Sr no.')
   ->addHeader('Id')
   ->addHeader('Name')
   ->addHeader('Email')
   ->addHeader('Mobile No');
   $i=1;
   
   foreach($records as $record)
   {
	   $table->addRow()
	               ->addColumn($i)
	               ->addColumn($record['id'])
	               ->addColumn($record['name'])
	               ->addColumn($record['email'])
	               ->addColumn($record['mobile']);
	$i++;
   }
   $table->display();