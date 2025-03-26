<?php 
$host = "localhost";
$dbname = "formationPHP";
$port = "3306";
$username = 'root';
$password = '';
$dsn = "mysql:host=$host;port=$port;dbname=$dbname";
$options = [
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC 
];
$db = new PDO($dsn, $username, $password, $options);
