<?php

$username = 'debian-sys-maint';
$password = 'ws1SC0JreanoNAJ8';
$database = 'victoria';
$host = 'localhost';

try {

    $db_con = new PDO("mysql:host=$host; dbname=$database; charset=utf8", $username, $password);
    $db_con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 }catch (PDOException $e){

    echo $e->getMessage();
    
 }