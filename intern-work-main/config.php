<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'car_rentals';

try {
    $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected Successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}