<?php
include 'config.php';
if (isset($_GET['del']) && !empty($_GET['del'])) {
    $deleterecord = $_GET['del'];
     echo  $deleterecord;
    $sql = "DELETE FROM `car_book` WHERE id=$deleterecord";
    $stmt = $connection->prepare($sql);
    $status = $stmt->execute();

    if ($status) {
        // header('location:' . $_SERVER['PHP_SELF']);
        //  echo 'deleted';
    } else {
        echo 'record not deleted';
    }
}

 
function deleteRecord($id)
{
    global $connection;
    $sql = "DELETE FROM `car_book` WHERE id=$id";
    $stmt = $connection->prepare($sql);
    $status = $stmt->execute();

    if ($status) {
        // header('Refresh:0');
        // echo 'deleted';
    } else {
        echo 'record not deleted';
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
    <input type="hidden" name="del" id="del">
        <input type="hidden" name="update_key" id="update_key">



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
                    <th>DELETE</th>

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
                    <td><?php echo $value['droplocation'] ?></td>
                    <td><?php echo $value['carbook_registration_no'] ?></td>
                    <td><?php echo $value['bookee_id'] ?></td>
                    <td><button type="submit" onclick="document.getElementById('del').value = '<?= $value['id']; ?>';">Delete</button> </td>

                </tr>

                <?php } ?>

            </tbody>
        </table>

        
        <button type="button" id="back" value="back" name="back" style="margin-top: 20px;"><a href=""
                style="text-decoration: none; color:red; padding: 35px; ">Close</a></button>
    </form>