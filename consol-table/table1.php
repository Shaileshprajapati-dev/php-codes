<?php
require __DIR__.'/vendor/autoload.php';

$table = new LucidFrame\Console\ConsoleTable();
$table
    ->addHeader('Id')
    ->addHeader('Name')
    ->addHeader('Email')
    ->addRow()
        ->addColumn('1001')
        ->addColumn('Shailesh Prajapati')
	->addColumn('shailesh228146@gmail.com')
    ->addRow()
        ->addColumn('1002')
        ->addColumn('Manish kumar')
	->addColumn('manishkumar@gmail.com')
    ->addRow()
        ->addColumn('1003')
        ->addColumn('Satyam kumar')
	->addColumn('sataymkumar@gmail.com')
    ->display();