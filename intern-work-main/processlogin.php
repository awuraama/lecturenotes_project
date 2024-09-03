<?php
include 'config.php';

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ( empty($_POST["email"])  && empty($_POST["password"])  ) {
        $nameErr = "Required fields cannot be empty";
    } else {
        $hasError = false;
        $errorString = '';

        
        $email = test_input($_POST["email"]);
        if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
            $hasError = true;
            $errorString .= "should match 'email@example.com'";
        }

        

        $password = test_input($_POST["password"]);

        

        if($hasError){
            echo $errorString;
            exit;
        }
        

        $sql = "SELECT * FROM customer WHERE email = :email AND password = :password LIMIT 1";

        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
         $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo 'login successful';
            $data = $stmt->fetch();
            $_SESSION['id'] = $data['id'];
            $_SESSION['name'] = $data['name'];
            $_SESSION['email'] = $data['email'];
            
            header('Location:advert.php');
        } else {
            echo 'failed';
        }
    }
}
?>