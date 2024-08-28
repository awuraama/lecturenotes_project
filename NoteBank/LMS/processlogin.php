<?php
include "config.php";

$email = $_POST['email'];
$password = $_POST['password'];
// echo $email;
// echo $password;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($email) && empty($password)){
            exit('Please fill both the username and password fields!');
    }

    $sql = "SELECT * FROM login WHERE email = :email AND password = :password LIMIT 1";

    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        // echo'login sucessful';
        $data = $stmt->fetch();
        // $_SESSION['id'] = $data['id'];
        $_SESSION['email'] = $data['email'];
        // $_SESSION['name'] = $data['name'];

        echo $email;
        echo $password;
        exit;


        header('location:courses.php');
} else{
    header('location:signup.html');
}   
}       
