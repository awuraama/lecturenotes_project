<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "lsm";

try {
    $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connection Succesful";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}