<?php
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'mp0613_car';

try {
    $pdo = new PDO("mysql:host=$host", $user, $pass);
    $pdo->exec('DROP DATABASE IF EXISTS ' . $db);
    $pdo->exec('CREATE DATABASE ' . $db);
    echo "Database recreated successfully\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>
