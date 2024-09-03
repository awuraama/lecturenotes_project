<?php
include 'config.php';
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
        background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0.5));
        /* background-repeat: no-repeat; */
        background-size: cover;
        z-index: -1;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;

    }

    #form {
        width: 400px;
        background-color: #fff;
        border: 6px #05294b solid;
        padding: 14px 40px;
    }
    </style>
</head>

<body>
    <div class="container col-lg-6 col-md-6 col-sm-6 col-xs-6  mt-5">
        
        <form action="processsignup.php" id="form" method="Post">
            <div class="container">
                <h2 class="text-center pb-5"><strong>SansPareil.Rentals</strong></h2>
                <div class="input-control">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control valid" onkeyup="validatename(this)">
                    <div class="error text-danger"></div>


                </div>



                <div class="input-control">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control valid" onkeyup="validemail(this)">
                    <div class="error text-danger"></div>
                </div>

                <div class="input-control">
                    <label for="address" class="form-label">Address</label>
                    <input type="address" id="address" name="address" class="form-control valid" required>
                    <div class="error text-danger"></div>
                </div>

                <div class="input-control">
                    <label for="contact" class="form-label">Contact No.</label>
                    <input type="contact" id="contact" name="contact" class="form-control valid" onkeyup="validatecontact(this)">
                    <div class="error text-danger"></div>
                </div>



                <div class="input-control">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control valid">
                    <div class="error text-danger"></div>
                </div>

                <div class="input-control">
                    <label for="password2" class="form-label">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" class="form-control valid">
                    <div class="error text-danger"></div>
                </div>
                <div class="float-end m-3" id="gender">
                    <label for="male"> Male</label>
                    <input type="radio" name="gender" value="male" id="male" required>
                    <label for="female"> Female</label>
                    <input type="radio" name="gender" value="female" id="female" required>
                </div>
                <button type="submit" id="sign_up" value="sign_up" onclick="validate()" name="submit"
                    class="form-control mt-2 mt-3" style="background-color: #22BB14;">Sign Up</button>

                <a href="index.php" style="text-decoration: none; padding:10px;">Home</a>
            </div>
        </form>
    
    </div>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
    // $(document).ready(function() {
    //     $('.valid').on('keyup', function() {
    //         $(this).css('border-color', 'green');
    //     })

    //     $('.valid').on('change', function() {
    //         $(this).css('border-color', 'green');
    //     })
    // })

    function validatename(input){
        const value = $(input).val();
        const pattern = /^[a-zA-Z-' ]*$/;

        if(!pattern.test(value)){
            $(input).next('.error').html("Only letters and white space allowed");
        } else {
            $(input).next('.error').html("");
        }


    }

    function validatecontact(input){
        const value = $(input).val();
        const pattern = /^\d+$/;

        if(!pattern.test(value)){
            $(input).next('.error').html("Invalid phone number provided");
        } else {
            $(input).next('.error').html("");
        }


    }

    function validemail(input){
        const value = $(input).val();
        const pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;

        if(!pattern.test(value)){
            $(input).next('.error').html("should match 'email@example.com'");
        } else {
            $(input).next('.error').html("");
        }


    }



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



        if (password != confirm_password) {
            alert('Password mismatch!');

            return;
        }

        if (errorholder) {
            document.myform.submit();

        }

    }
    </script>
    
</body>

</html>