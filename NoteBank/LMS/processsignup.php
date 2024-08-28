<?php
include "config.php";

function test_input($data){
    $data = trim ($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
 

$confirmpassword = test_input($_POST["confirmpassword"]);
if($password!=$confirmpassword){
    echo "Password does not match";
    exit;
}  

$sql = 'INSERT INTO signup (username, email, password ) VALUES (:username, :email, :password)';

$stmt = $connection->prepare($sql);
$stmt->bindParam( ':username', $username);
$stmt->bindParam('email', $email);
$stmt->bindParam('password', $password);
$status = $stmt->execute();
  
 
if($status){
    echo 'inserted';
    header('location:login.html');
} else {
    echo 'Failed';
}

$sql = "SELECT * FROM `signup`";
$stmt = $connection->prepare($sql);
$status = $stmt->execute();


