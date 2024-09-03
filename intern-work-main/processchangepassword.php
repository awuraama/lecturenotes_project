<?php
include 'config.php';
if(!isset($_SESSION['id'])){
    header('Location: index.php');
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ( empty($_POST["newpassword"])  && empty($_POST["confirmpassword"])  ) {
        $nameErr = "Required fields cannot be empty";
    } else {
        $hasError = false;
        $errorString = '';

        $newpassword = $_POST["newpassword"];
        $confirmpassword = $_POST["confirmpassword"];
        if ($newpassword != $confirmpassword){
            $hasError = false;
        $errorString =  'password mismatch';
        } 

        

        if($hasError){
            echo $errorString;
            exit;
        }
        

        $sql =  "UPDATE  customer SET password = :newpassword WHERE id = :id";
     

        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':id', $_SESSION['id']);
        $stmt->bindParam(':newpassword', $newpassword);
        $status = $stmt->execute();

        if ($status) {
            header('Location:advert.php');
        } else {
            echo 'failed';
        }
    }
}
?>