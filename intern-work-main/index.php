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
</head>

<body>
    <div class="container">
        <div>
            <nav class="navbar navbar-expand-lg   navbar-dark fixed-top" style="background-color:  #05294b;">

                <div class="container">
                    <a href="#" class="navbar-brand">SansPareil.Rentals</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"
                        aria-controls="navmenu">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse " id="navmenu">
                        <ul class="navbar_nav  ms-auto list-unstyled ">
                            <li class="nav-item list-inline-item">
                                <a href="#myform" class="nav-link text-light">Login</a>
                            </li>
                            <li class="nav-item list-inline-item text-light">
                                <a href="#login" class="nav-link text-light">Sign up</a>
                            </li>
                            <li class="nav-item list-inline-item">
                                <a href="#blog" class="nav-link text-light">Blog</a>
                            </li>
                            <li class="nav-item list-inline-item">
                                <a href="#about" class="nav-link text-light">About us</a>
                            </li>
                            <li class="nav-item list-inline-item">
                                <a href="#about" class="nav-link text-light">Contact</a>
                            </li>
                        </ul>
                    </div>
            </nav>
            <div id="blog">
                <div class="container-fluid intro">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p-5 m-5">
                            <h3 style="font-size:50px;">Kick-start Your Journey</h3>
                            <p><strong>When it comes to car rentals... <em>we day for you!</em></strong></p>
                        </div>
                    </div>
                </div>

                <div class="my-5 ticks float-end">
                    <span><img src="casset/tick.PNG" alt="tick">Flexibility</span>
                    <span><img src="casset/tick.PNG" alt="tick">Conveniency</span>
                    <span><img src="casset/tick.PNG" alt="tick">Reliability</span>
                    <span><img src="casset/tick.PNG" alt="tick">Comfortability</span>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: +200px;">
            <h4 class="text-left" style="font-size: 40px; color:  #05294b;">ARE YOU A CAR LOVER?</h4>
            <hr>
            <div class="row  justify-content-around align-item-center">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-5">
                    <p style="padding:50px;">
                        We all have fantasies about our ideal automobiles, but only a select few people put in the
                        effort to turn
                        those thoughts into reality. You undoubtedly deserve a lot of praise if you are the one who
                        finally got
                        your dream car. These are the best quotes for car lovers and beautiful vehicles are ideal for
                        anyone
                        preparing to embark on their first journey in their ideal vehicle. <span
                            class="blockquote-footer">autobest</span></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-5 text-item-center">
                    <center><img src="casset/c2.PNG" alt="car" style="width:90%;"></center>
                </div>


            </div>
        </div>
        <div class="row  justify-content-around align-item-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-5 text-item-center">
                <center><img src="casset/c1.PNG" alt="car" style="width:80%;"></center>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-5">
                <P style="padding:50px;">If you had asked folks what kind of wheels they wanted. They would have
                    responded, "A faster car," and
                    the correct response is BMW /M Performance.</P>
            </div>
        </div>
        <hr>
        <div class="container" id="login" style="padding:70px; background-color:#eee; margin-top:120px;">
            <h4 class="text-end p-5" style="font-size: 40px; color:#05294b;">WHY RENT A CAR</h4>
            <div class="container" style="padding: left 40px; padding: right 40px;">
                <p>Everyone likes their privacy, you included because privacy is power. Take charge of your itinery by
                    having your private vehicle instead of depending on a taxi or public transport.Is it<em>Business
                        travel?..... Private trip?.....Or......Commercial travel. Whatever the occasion is you need
                        peacefulness and quietness</em></p>
                <p> Be your own boss,let loose, step out and enjoy the trip with fleibility and relaxability while
                    having fun. </p>
                <p class="text-center"><strong><em> Be Adventurous! Let's <a href="sign_up.php" style="font-size:20px;">
                                Sign you up </a> today.</em></strong></p>

            </div>
        </div>
        <div>

        </div>
    </div>

    <div class="container col-lg-6 col-md-6 col-sm-6 col-xs-6  mt-5" style="align-items: center; top:+60px;  border: 6px  #05294b solid; background-color: #fff; padding: 14px 40px;
                    ">
        <form action="processlogin.php" id="myform" method="Post">
            <div class="container">
                <h2 class="text-center pb-5"><strong>SansPareil.Rentals</strong></h2>

                <div class="input-control">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control valid">
                    <div class="error"></div>
                </div>


                <div class="input-control">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control valid">
                    <div class="error"></div>
                </div>

                <button type="button" id="login" value="login" name="login" class="p-2 px-5 mt-3 rounded float-left"
                    style="background-color: #22BB14;" onclick="validlogin()">LOGIN</button>
                <p class="text-center pt-5">Or</p>

                <p class="text-center"><a href="sign_up.php"> Sign Up</a></p>
            </div>
        </form>
    </div>

    <div class="container p-5 mt-5 mb-5">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <center><img src="casset/c3.PNG" alt="image" id="pcode"
                        class="img-thumbnail img-fluid mx-auto d-block hidden-xs img-responsive"></center>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <center><img src="casset/c5.PNG" alt="image" id="pcode"
                        class="img-thumbnail img-fluid mx-auto d-block img-responsive p-4"></center>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <center><img src="casset/c4.PNG" alt="image" id="pcode"
                        class="img-thumbnail img-fluid mx-auto d-block hidden-xs img-responsive"></center>
            </div>
        </div>
    </div>
    </div>

    <section id="about">
        <div class="container-fluid" style="background-color:#05294b;">
            <div class="container text-center" style="padding:20px; background-color:#05294b; color:#fff;">
                <h3 class="p-3 align-left">About us</h3>
                <p>SansPareil.Rentals is an independent car rental company dealing in long-term
                    vehicle leasing and medium-term vehicle leasing.
                    We are based in Accra, Ghana carrying out our operations across the country</p>

                <div class="container bg-light" style="color: black; justify-content: center;">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mt-5 text-center">
                            <p><strong>LOCATION </strong> : Achimota, Mile7</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mt-5 text-center">
                            <p><strong>EMAIL </strong> : hannahmaamleyosae@gmail.com</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mt-5 text-center">
                            <p><strong><a href="mailto:hannahmaamleyosae@gmail.com"> Contact-us </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
    function validlogin() {

        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;

        var errorholder = true;

        if (email == '' || password == '') {
            alert("All fields required");
            return false;
        } else {
            myform.submit();
        }


    }
    </script>
</body>

</html>