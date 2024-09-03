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
    
    </style>
</head>

<body>
    <div class="container col-lg-6 col-md-6 col-sm-6 col-xs-6  mt-5">


        <form action="processaddcar.php" id="form" method="POST" enctype="multipart/form-data">
            <div class="container">
                <h2 class="text-center pb-2"><strong>Car Upload Details</strong></h2>
                <div class="input-control">
                    <label for="registration_no" class="form-label">Registration No</label>
                    <input type="text" id="registration_no" name="registration_no" class="form-control valid">
                    <div class="error text-danger"></div>


                </div>



                <div class="input-control">
                    <label for="make" class="form-label">Make</label>
                    <input type="text" id="make" name="make" class="form-control valid" onkeyup="validateaddcar(this)">
                    <div class="error text-danger"></div>
                </div>

                <div class="input-control">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" id="model" name="model" class="form-control valid"
                        onkeyup="validateaddcar(this)">
                    <div class="error text-danger"></div>
                </div>

                <div class="input-control">
                    <label for="model_year" class="form-label">Model year</label>
                    <input type="text" id="model_year" name="model_year" class="form-control valid"
                        onkeyup="validaddcar(this)">
                    <div class="error text-danger"></div>
                </div>

                <div class="input-control">
                    <label for="mileage" class="form-label">Mileage</label>
                    <input type="text" id="mileage_1" name="mileage_1" class="form-control valid">
                    <div class="error text-danger"></div>
                </div>

                <div class="input-control">
                    <label for="insurance_code" class="form-label">Insurance Code</label>
                    <input type="text" id="insurance_code" name="insurance_code" class="form-control valid">
                    <div class="error text-danger"></div>
                </div>

                <div class="input-control">
                    <label for="amount_per_hour" class="form-label">Amount per hour</label>
                    <input type="text" id="amount_per_hour" name="amount_per_hour" class="form-control valid">
                    <div class="error text-danger"></div>
                </div>


                <div class="float-end pt-2">
                    <fieldset required>
                        <fieldset>
                            <span style="padding-right: 12px;">Is Available:</span>
                            <label for="true">true</label>
                            <input type="radio" id="is_available" name="is_available" value="true">

                            <label for="false">false</label>
                            <input type="radio" id="is_available" name="is_available" value="false"><br>
                        </fieldset>
                    </fieldset>
                </div>

            </div>
            <!-- <div class="container col-lg-6 col-md-6 col-sm-6 col-xs-6  mt-5"> -->
    <div class=" container pt-4" style="margin-top: 20px;">
             <input type="file" name="myfileupload">
            <input type="submit" value="Submit" name="addsubmit">

    </div>
     </div>
    </form>
   
</div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
    // $(document).ready(function() {
    //     $('.valid').on('keyup', function() {
    //         $(this).css('border-color', 'green');
    //     })

    //     $('.valid').on('change', function() {
    //         $(this).css('border-color', 'green');
    //     })
    // })

    function validateaddcar(input) {
        const value = $(input).val();
        const pattern = /^[a-zA-Z-' ]*$/;

        if (!pattern.test(value)) {
            $(input).next('.error').html("Only letters and white space allowed");
        } else {
            $(input).next('.error').html("");
        }


    }

    function validaddcar(input) {
        const value = $(input).val();
        const pattern = /^\d+$/;

        if (!pattern.test(value)) {
            $(input).next('.error').html("Only numbers allowed");
        } else {
            $(input).next('.error').html("");
        }


    }

    // function validemail(input) {
    //     const value = $(input).val();
    //     const pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;

    //     if (!pattern.test(value)) {
    //         $(input).next('.error').html("should match 'email@example.com'");
    //     } else {
    //         $(input).next('.error').html("");
    //     }


    // }



    function validate() {


        var password = document.getElementById('password').value;
        var confirm_password = document.getElementById('confirm_password').value;

        var errorholder = true;

        var validElements = document.querySelectorAll('.valid');
        validElements.forEach(function(element) {
            var indval = element.value;


            if (indval == '') {
                document.getElementById(element.id).setAttribute('style', 'border:2px  solid red !important;');
                event.preventDefault();
                errorholder = false;

            } else if (indval != '') {
                document.getElementById(element.id).setAttribute('style',
                    'border:2px  solid green !important;');

            }

        });





    }
    </script>

</body>

</html>