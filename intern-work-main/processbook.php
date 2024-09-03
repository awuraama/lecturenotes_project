<?php
include 'config.php';
if(!isset($_SESSION['id'])){
    header('Location: index.php');
}
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["pickupdate"]) && empty($_POST["returndate"])  && empty($_POST["picklocation"])  && empty($_POST["droplocation"])) {
        $nameErr = "Required fields cannot be empty";
    } else {
        $hasError = false;
        $errorString = '';

        $customer_id = $_POST["id"];
        $customer_name = $_POST["name"];
        $pickupdate = $_POST["pickupdate"];
        $returndate = $_POST["returndate"];
        $picklocation = $_POST["picklocation"]; 
        $droplocation = $_POST["droplocation"];
        $carbook_registration_no = $_POST["bookcarno"];

        $bookee_id = date('dmhs');
        //date('Y-m-d');
// print_r( $carbook_registration_no);
//  exit;
print_r($customer_id);

    
        if($hasError){
            echo $errorString;
            exit;
        }
        

        $sql = "INSERT INTO car_book (customer_id, customer_name, pickupdate,  returndate,  picklocation, droplocation, carbook_registration_no, bookee_id ) VALUES (:id, :name, :pickupdate, :returndate, :picklocation, :droplocation, :bookcarno, :bookee_id)";

        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':id', $customer_id);
        $stmt->bindParam(':name', $customer_name);
        $stmt->bindParam(':pickupdate', $pickupdate);
        $stmt->bindParam(':returndate', $returndate);
        $stmt->bindParam(':picklocation', $picklocation);
        $stmt->bindParam(':droplocation', $droplocation);
        $stmt->bindParam(':bookcarno', $carbook_registration_no);
        $stmt->bindParam(':bookee_id', $bookee_id);

        $status  = $stmt->execute();

        if ($status) {
            echo 'inserted';
            

           
            $_SESSION['bookee_id'] = $bookee_id;

            //exit;

            header('location:bookidform.php');
        } else {
            echo 'failed';
        }
    }
}

$sql = "SELECT * FROM `car_book`";
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
                    <th>customer_id</th>
                    <th>customer_name</th>
                    <th>pickupdate</th>
                    <th>returndate</th>
                    <th>picklocation</th>
                    <th>droplaocation</th>
                    <th>bookcarno</th>
                    <th>bookee_id</th>

                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                         foreach ($list as $value) { ?>
                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $value['customer_id'] ?></td>
                    <td><?php echo $value['customer_name'] ?></td>
                    <td><?php echo $value['pickupdate'] ?></td>
                    <td><?php echo $value['returndate'] ?></td>
                    <td><?php echo $value['picklocation'] ?></td>
                    <td><?php echo $value['droplaocation'] ?></td>
                    <td><?php echo $value['bookcarno'] ?></td>
                    <td><?php echo $value['bookee_id'] ?></td>

                </tr>

                <?php } ?>

            </tbody>
        </table>
    </form>