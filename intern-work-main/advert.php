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
        if (!preg_match("/^[0-9]{10}+$/", $contact)) {
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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hannah Osae | Rental System</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    body {
        /* background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5));
            background-repeat: no-repeat;
            background-size: cover;
            z-index: -1; */
        /* overflow: hidden; */
       

    }

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
    <?php 
    
    $sql = "SELECT * FROM `cars`";
    $stmt = $connection->prepare($sql);
    $status  = $stmt->execute();
    $list = $stmt->fetchAll();
// print_r($list);


    ?>
    <div class="container">
        <nav class="navbar navbar-expand-lg   navbar-dark fixed-top" style="background-color:  #05294b;">

            <div class="container">
                <a href="#" class="navbar-brand"> SansPareil.Rentals :: <em> car advertisement </em><span class="my-4"
                        style="font-size:12px;">
                        Welcome <?php echo $_SESSION['name'] ?> !</span></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"
                    aria-controls="navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navmenu">
                    <ul class="navbar_nav  ms-auto list-unstyled " style="color: #fff !important;">
                        <li class="nav-item list-inline-item">
                            <a href="sign_up.php" class="nav-link">Previous</a>
                        </li>
                        <li class="nav-item list-inline-item">
                            <form action="processlogout.php" method="POST">
                                <button class="px-3 text-light" style="background-color: #05294B;">Logout</button>
                            </form>
                        </li>

                    </ul>
                </div>
        </nav>
    </div>

   
    <div class="container">
        <div class="container" style="margin-top:100px;">
            <div class="row  justify-content-around align-item-center">
                <?php
                if(is_array($list)){
                foreach ($list as $key => $value) {
               // print_r($value);
                ?>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 rounded" style="margin-bottom:30px;">
                    <div>

                        <div style="display:flex; justify-content: center; align-items: center;">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-light p-2 px-5 rounded float-end text-primary"
                                data-bs-toggle="modal" data-bs-target="#exampleModal_<?php echo  $value['registration_no']; ?>">
                                Book Now!
                            </button>



                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal_<?php echo  $value['registration_no']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Properties</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                            <ul>
                                                <li><strong>make: </strong> <?php echo $value['make']?></li>
                                                <li><b>model: </b> <?php echo $value['model']?></li>
                                                <li><b>model year: </b> <?php echo $value['model_year']?></li>
                                                <li><b>isAvailable: </b> <?php echo $value['registration_no']?></li>
                                                <li><b>mileage: </b> <?php echo $value['mileage']?></li>
                                                <li><b>Registration number: </b> <?php echo $value['registration_no']?></li>
                                                <li><b>insurance code: </b> <?php echo $value['mileage']?></li>
                                            </ul>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>

                                            <button type="button" class="btn btn-primary"><a href="bookform.php?carno=<?php echo $value['registration_no']?>" style="text-decoration:none; color:#fff"> Book Now! </a></button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <img src="casset/<?php echo $value['car_images'] ?>" alt="car" style="width:100%;">
                        </center>

                    </div>
                </div>
                <?php } } ?>
            </div>
        </div>

        <div>
            <button type="change" id="change" value="change" name="change"
                class="p-2 px-5 mt-3 rounded bg-primary float-end text-light m-5" onclick=""><a
                    href="changepassword.php" style="text-decoration:none; color:#fff"> Change Password</a></button>
            <button type="add" id="add" value="add" name="add"
                class="p-2 px-5 mt-3 rounded bg-success float-end text-light m-5" onclick=""><a href="add_car.php"
                    style="text-decoration:none; color:#fff"> Add A Car </a></button>
        </div>
        <!-- <button type="previous" id="previous" value="previous" name="previous"
                class="p-2 px-5 mt-3 rounded bg-success float-end text-light m-5" onclick="">Previous</button> -->
    </div>
    </div>



    <form action="" method="get" id="subscriber">


        <table style="width: 100% !important;  display:none;">
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

    <script>
    function pricing() {
        alert("echo 'Reg_no:' . <'br'> . 'Model' ")
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>