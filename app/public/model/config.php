<?php
$db_server = 'mysql';
$db_username = 'root';
$db_password = 'secret123';
$db_name = 'developmentdb';

try{
    $pdo = new PDO("mysql:host=$db_server;dbname=$db_name", $db_username, $db_password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}