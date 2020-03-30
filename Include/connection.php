<?php
$host = 'localhost';
$port = '21';
$user = 'f62745_dbuser';
$password = 'sq#$fShSq?7xHnTL';
$dbname = 'f62745_db';

$dsn = "mysql:host={$host};dbname={$dbname};charset=utf8";

try{
    $connection = new PDO($dsn,$user,$password);
}catch (PDOException $exception){
    echo "Ошибка подключения к БД: " . $exception->getMessage() . PHP_EOL;
    die();
}
