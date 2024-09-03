<?php
include 'config.php';
if(!isset($_SESSION['id'])){
    header('Location: index.php');
}
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
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #eee;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="container col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <form action="processbook.php" id="myform" name="form" method="POST">
            <input type="hidden" id="bookcarno" name="bookcarno" class="form-control valid" value="<?php echo $_GET['carno'] ?>">
             <input type="hidden" id="name" name="name" class="form-control valid" value="<?php echo $_SESSION['name'] ?>">
            <input type="hidden" id="id" name="id" class="form-control valid" value="<?php echo $_SESSION['id'] ?>">



                <div class="input-control">
                    <label for="pickupdate" class="form-label">Pickup Date</label>
                    <input type="date" id="pickupdate" name="pickupdate" class="form-control valid">
                    <div class="error text-danger"></div>
                </div>

                <div class="input-control">
                    <label for="returndate" class="form-label">Return Date</label>
                    <input type="date" id="returndate" name="returndate" class="form-control valid">
                    <div class="error text-danger"></div>
                </div>

                <div class="input-control">
                    <label for="picklocation" class="form-label">Pickup Location</label>
                    <input type="text" id="picklocation" name="picklocation" class="form-control valid">
                    <div class="error text-danger"></div>
                </div>

                <div class="input-control">
                    <label for="droplocation" class="form-label">Drop Location</label>
                    <input type="text" id="droplocation" name="droplocation" class="form-control valid">
                    <div class="error text-danger"></div>
                </div>

                <button type="submit" id="save" value="save" name="save"
                    class="p-2 px-5 mt-3 rounded bg-success float-end text-light m-5" onclick="validbook()">Save</button>
                <button type="button" id="back" value="back" name="back"
                    class="p-2 px-5 mt-3 rounded bg-danger float-end text-light m-5"><a href="advert.php"
                        style="text-decoration: none; color:white;">Back</a></button>

            </form>
        </div>
        <div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous">
            </script>

            <script src="https://code.jquery.com/jquery-3.7.1.min.js"
                integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
            <script>
            function validbook() {


                // var pickupdate = document.getElementById('pickupdate').value;
                // var returndate = document.getElementById('returndate').value;
                // var picklocation = document.getElementById('picklocation').value;
                // var droplaocation = document.getElementById('droplaocation').value;

                // var errorholder = true;

                var validElements = document.querySelectorAll('.valid');
                validElements.forEach(function(element) {
                    var indval = element.value;


                    if (indval == '') {
                        document.getElementById(element.id).setAttribute('style',
                            'border:2px  solid red !important;');
                        event.preventDefault();
                        errorholder = false;

                    } else if (indval != '') {
                        document.getElementById(element.id).setAttribute('style',
                            'border:2px  solid green !important;');

                    }

                });

                if (errorholder) {
                    myform.submit();
                }

            }
            </script>

</body>

</html>