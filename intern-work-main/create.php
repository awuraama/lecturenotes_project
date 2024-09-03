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
    if (empty($_POST["name"]) && empty($_POST["email"])  && empty($_POST["address"])  && empty($_POST["contact"]) && empty($_POST["password"])  && empty($_POST["confirm_password"])) {
        $nameErr = "Required fields cannot be empty";
    } else {
        $hasError = false;
        $errorString = '';
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $hasError = true;
            $errorString .= "Only letters and white space allowed ";
        }

        $email = test_input($_POST["email"]);
        if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
            $eErr = "should match 'email@example.com'";
        }

        $address = test_input($_POST["address"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $address)) {
            $address = "Only letters and white spaces allowed";
        }

        $contact = test_input($_POST["contact"]);
        if (!preg_match("/^[0-9]{10}+$/", $contact)) {
            $contactErr = "Invalid phone number provided";
        }


        $password = test_input($_POST["password"]);
        $gender = test_input($_POST["gender"]);
        
        

        $confirm_password = test_input($_POST["confirm_password"]);
        if($password!=$confirm_password){
            $passwordErr = "Passwords do not match";
            header('location: sign_up.php');
        }
        

        $sql = "INSERT INTO customer (name,  email,  address, contact, password, gender ) VALUES (:name,  :email, :address, :contact, :password, :gender )";

        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':contact', $contact);
        $stmt->bindParam(':password', $password);
         $stmt->bindParam(':gender', $gender);
        $status  = $stmt->execute();

        if ($status) {
            echo 'inserted';
            header('Refresh:0');
        } else {
            echo 'failed';
        }
    }
}

$sql = "SELECT * FROM `customer`";
$stmt = $connection->prepare($sql);
$status  = $stmt->execute();
$list = $stmt->fetchAll();
?>
