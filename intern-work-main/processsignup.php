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
            $errorString .= "Only letters and white space allowed";
        }

        $email = test_input($_POST["email"]);
        if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
            $hasError = true;
            $errorString .= "should match 'email@example.com'";
        }

        $address = test_input($_POST["address"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $address)) {
            $hasError = true;
            $errorString .= "Only letters and white spaces allowed";
        }

        $contact = test_input($_POST["contact"]);
        if (!preg_match("/^\d+$/", $contact)) {
            $hasError = true;
            $errorString .= "Invalid phone number provided";
        }


        $password = test_input($_POST["password"]);
        $gender = test_input($_POST["gender"]);
        
        

        $confirm_password = test_input($_POST["confirm_password"]);
        if($password!=$confirm_password){
            $hasError = true;
            $errorString .= "Passwords do not match";
             header('location: sign_up.php');
        }

        if($hasError){
            echo $errorString;
            exit;
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
            header('location:index.php?#login');
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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hannah Osae | Rental System</title>
    <style>
        table {
            width: 300px;
        }

        th {
            text-align: left;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
  
<form action="" method="get" id="subscriber">
                 
        
                 <table style="width: 100% !important;">
                     <thead>
                         <tr>
                         <th>#</th>
                             <th>name</th>
                             <th>email</th>
                             <th>address</th>
                             <th>contact</th>
                             <th>gender</th> 
                           
                              
                             
                         </tr>
                     </thead>
                     <tbody>
                         <?php $i = 1;
                         foreach ($list as $value) { ?>
                             <tr>
                             <td><?php echo $i++ ?></td>
                                 <td><?php echo $value['name'] ?></td>
                                 <td><?php echo $value['email'] ?></td>
                                 <td><?php echo $value['address'] ?></td>
                                 <td><?php echo $value['contact'] ?></td>
                                 <td><?php echo $value['gender'] ?></td>

                                 
                               </tr>
                         <?php } ?>
         
                     </tbody>
                 </table>
</form>