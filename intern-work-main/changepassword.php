<?php
include 'config.php';
if(!isset($_SESSION['id'])){
    header('Location: index.php');
}

    
$sql = "SELECT  * FROM `customer`";
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
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

     
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="container col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <form action="processchangepassword.php" id="myform" method="POST">
                        
                        <div class="input-control">
                            <label for="newpassword" class="form-label">New Password</label>
                            <input type="password" id="newpassword" name="newpassword" class="form-control valid">
                            <div class="error text-danger"></div>
                        </div>

                        <div class="input-control">
                            <label for="confirmpassword" class="form-label">Confirm Password</label>
                            <input type="password" id="confirmpassword" name="confirmpassword"
                                class="form-control valid">
                            <div class="error text-danger"></div>
                        </div>

                        <button type="button" id="save" value="save" name="save"
                            class="p-2 px-5 mt-3 rounded bg-success float-end text-light m-5"
                            onclick="validchange()">Save</button>
                        <button type="button" id="back" value="back" name="back"
                            class="p-2 px-5 mt-3 rounded bg-danger float-end text-light m-5"><a href="advert.php"
                                style="text-decoration: none; color:white;">Back</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
    function validchange() {
         var newpassword = document.getElementById('newpassword').value
        var confirmpassword = document.getElementById('confirmpassword').value

        var errorholder = true;


        if ( newpassword == '' || confirmpassword == '') {
            alert("All fields required");
            return false;
        
        } else if (newpassword != confirmpassword) {
            alert("new password and confirm password do not match");
            return false;
        } else {
            myform.submit();
        }



    }
    </script>

</body>

</html>