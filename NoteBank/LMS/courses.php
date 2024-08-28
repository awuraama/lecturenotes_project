<?php
include "config.php";

$sql = "SELECT * FROM `courses`, `lecture_notes` WHERE courses.CID = lecture_notes.CID";
$stmt = $connection->prepare($sql);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    echo 'login sucessful';
    $courseNotes = $stmt->fetchAll();
    // print_r($data) ;
    // exit;

    //  foreach($data as  $value){
    //     print_r($value) ;
    // }

    //  exit;


} else {
    echo "No Data Found";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Crew : Courses</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/1logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-dark" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <p class="m-0 fw-bold" style="font-size: 25px;"><img src="img/1logo.png" alt="" height="50px">Crew</p>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            style="border: none;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="courses.php" class="nav-item nav-link">Courses</a>
                 <a href="about.php" class="nav-item nav-link">About</a>
                
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.php" class="dropdown-item">Our Team</a>
                        <a href="testimonial.php" class="dropdown-item">Testimonial</a>

                    </div>
                </div> -->
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-dark py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Courses</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center px-3">Categories</h6>
                <h1 class="mb-5" style="color: black">Computer Science Level 300</h1>
                <h6 class="section-title bg-white text-center px-3">Second Semester Courses</h6>
            </div>
            <div class="row g-4 py-2">

                <?php

                foreach ($courseNotes as $value) { ?>


                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="course-item shadow">

                            <div class="position-relative overflow-hidden text-light image">
                                <img class="img-fluid" src="img/cmage.png" alt="">
                                <div style="position:absolute;top: 15px;left: 16px; font-size:12px; border-radius:3px; background-color:#0ed44c;"
                                    class="px-2 py-1 fw-bold text-uppercase"> </div>

                            </div>
                            <div class="p-2 pb-0">

                                <h5 class="mb-1"><?php echo $value["NOTE_TITLE"]; ?> </h5>
                            </div>

                            <div class="d-flex">
                                <small class="flex-fill text-left p-2 px-2"><i class="fa fa-clock me-2"></i>
                                    <?php echo $value["READING_TIME"] . "mins"; ?></small>
                                <small class=" text-dark py-1 px-2 fw-bold fs-6" style="float:right;"><a
                                        href="login.php">Start
                                        Now </a><i class="fa fa-chevron-right me-2 fs-10"></i></small>
                            </div>
                        </div>
                    </div>


                <?php } ?>

                <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item shadow">
                        <div class="position-relative overflow-hidden text-light image">
                            <img class="img-fluid" src="img/cmage.png" alt="">
                            <div style="position:absolute;top: 15px;left: 16px; font-size:12px; border-radius:3px; background-color:#0ed44c;"
                                class="px-2 py-1 fw-bold text-uppercase"> </div>

                        </div>
                        <div class="p-2 pb-0">

                            <h5 class="mb-1">Software Engineering (COMP306)
                            </h5>
                        </div>
                         
                        <div class="d-flex">
                            <small class="flex-fill text-left p-2 px-2"><i class="fa fa-clock me-2"></i>3
                                Hrs</small>
                             <small class=" text-dark py-1 px-2 fw-bold fs-6" style="float:right;"><a href="#">Start
                                    Now </a><i class="fa fa-chevron-right me-2 fs-10"></i></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item shadow">
                        <div class="position-relative overflow-hidden text-light image">
                            <img class="img-fluid" src="img/cmage.png" alt="">
                            <div style="position:absolute;top: 15px;left: 16px; font-size:12px; border-radius:3px; background-color:#0ed44c;"
                                class="px-2 py-1 fw-bold text-uppercase"> </div>

                        </div>
                        <div class="p-2 pb-0">

                            <h5 class="mb-1">Animation Technology (COMP322)
                            </h5>
                        </div>
                         
                        <div class="d-flex">
                            <small class="flex-fill text-left p-2 px-2"><i class="fa fa-clock me-2"></i>3
                                Hrs</small>
                             <small class=" text-dark py-1 px-2 fw-bold fs-6" style="float:right;"><a href="#">Start
                                    Now </a><i class="fa fa-chevron-right me-2 fs-10"></i></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item shadow">
                        <div class="position-relative overflow-hidden text-light image">
                            <img class="img-fluid" src="img/cmage.png" alt="">
                            <div style="position:absolute;top: 15px;left: 16px; font-size:12px; border-radius:3px; background-color:#0ed44c;"
                                class="px-2 py-1 fw-bold text-uppercase"> </div>

                        </div>
                        <div class="p-2 pb-0">

                            <h5 class="mb-1">Research Methods (COMP312)
                            </h5>
                        </div>
                         
                        <div class="d-flex">
                            <small class="flex-fill text-left p-2 px-2"><i class="fa fa-clock me-2"></i>3
                                Hrs</small>
                             <small class=" text-dark py-1 px-2 fw-bold fs-6" style="float:right;"><a href="#">Start
                                    Now </a><i class="fa fa-chevron-right me-2 fs-10"></i></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item shadow">
                        <div class="position-relative overflow-hidden text-light image">
                            <img class="img-fluid" src="img/cmage.png" alt="">
                            <div style="position:absolute;top: 15px;left: 16px; font-size:12px; border-radius:3px; background-color:#0ed44c;"
                                class="px-2 py-1 fw-bold text-uppercase"> </div>

                        </div>
                        <div class="p-2 pb-0">

                            <h5 class="mb-1">Human Computer Interaction (COMP304)
                            </h5>
                        </div>
                         
                        <div class="d-flex">
                            <small class="flex-fill text-left p-2 px-2"><i class="fa fa-clock me-2"></i>3
                                Hrs</small>
                             <small class=" text-dark py-1 px-2 fw-bold fs-6" style="float:right;"><a href="#">Start
                                    Now </a><i class="fa fa-chevron-right me-2 fs-10"></i></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item shadow">
                        <div class="position-relative overflow-hidden text-light image">
                            <img class="img-fluid" src="img/cmage.png" alt="">
                            <div style="position:absolute;top: 15px;left: 16px; font-size:12px; border-radius:3px; background-color:#0ed44c;"
                                class="px-2 py-1 fw-bold text-uppercase"> </div>

                        </div>
                        <div class="p-2 pb-0">

                            <h5 class="mb-1">Fundamentals of Project Management (COMP324)
                            </h5>
                        </div>
                         
                        <div class="d-flex">
                            <small class="flex-fill text-left p-2 px-2"><i class="fa fa-clock me-2"></i>3
                                Hrs</small>
                             <small class=" text-dark py-1 px-2 fw-bold fs-6" style="float:right;"><a href="#">Start
                                    Now </a><i class="fa fa-chevron-right me-2 fs-10"></i></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item shadow">
                        <div class="position-relative overflow-hidden text-light image">
                            <img class="img-fluid" src="img/cmage.png" alt="">
                            <div style="position:absolute;top: 15px;left: 16px; font-size:12px; border-radius:3px; background-color:#0ed44c;"
                                class="px-2 py-1 fw-bold text-uppercase"> </div>

                        </div>
                        <div class="p-2 pb-0">

                            <h5 class="mb-1"> Computer Architecture & Organization (COMP302)
                            </h5>
                        </div>
                         
                        <div class="d-flex">
                            <small class="flex-fill text-left p-2 px-2"><i class="fa fa-clock me-2"></i>3
                                Hrs</small>
                             <small class=" text-dark py-1 px-2 fw-bold fs-6" style="float:right;"><a href="#">Start
                                    Now </a><i class="fa fa-chevron-right me-2 fs-10"></i></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item shadow">
                        <div class="position-relative overflow-hidden text-light image">
                            <img class="img-fluid" src="img/cmage.png" alt="">
                            <div style="position:absolute;top: 15px;left: 16px; font-size:12px; border-radius:3px; background-color:#0ed44c;"
                                class="px-2 py-1 fw-bold text-uppercase"> </div>

                        </div>
                        <div class="p-2 pb-0">

                            <h5 class="mb-1">Data Warehousing & Mining OPT (COMP318)
                            </h5>
                        </div>
                         
                        <div class="d-flex">
                            <small class="flex-fill text-left p-2 px-2"><i class="fa fa-clock me-2"></i>3
                                Hrs</small>
                             <small class=" text-dark py-1 px-2 fw-bold fs-6" style="float:right;"><a href="#">Start
                                    Now </a><i class="fa fa-chevron-right me-2 fs-10"></i></small>
                        </div>
                    </div>
                </div> -->
            </div>

        </div>
    </div>
    <!-- Courses End -->

    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5" style="color: black">BONUS COURSES</h1>
            </div>
            <div class="row g-2 m-2">
                <div class="col-lg-3 col-md-6  text-center">
                    <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">

                        <img src="img/cat1.png" class="img-fluid" alt="categories"></i>

                        <h5 class="my-2">
                            <a href="#" class="text-center">Microsoft Excel</a>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  text-center">
                    <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">

                        <img src="img/cat5.png" class="img-fluid" alt="categories"></i>

                        <h5 class="my-2">
                            <a href="#" class="text-center">Web Design</a>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  text-center">
                    <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">

                        <img src="img/cat7.png" class="img-fluid" alt="categories"></i>

                        <h5 class="my-2">
                            <a href="#" class="text-center">MySQL</a>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  text-center">
                    <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">

                        <img src="img/cat6.png" class="img-fluid" alt="categories"></i>

                        <h5 class="my-2">
                            <a href="#" class="text-center">Web Development</a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories End -->







    <!-- Footer Start -->
    <div class="container-fluid text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s"
        style="background-color: black;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <p><a class="text-light" href="about.php">About Us</a></p>
                    <p><a class="text-light" href="contact.php">Contact Us</a></p>
                    <p><a class="text-light" href="">FAQs & Help</a></p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Tema, Miotso</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+233 4567896543</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>hannahmaamleyosae@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Subscribe to our Newsletter</h4>
                    <p>Subscribe now and join our growing community of Software Engineerers! </p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <form action="#">
                            <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="email"
                                placeholder="Your email" required>
                            <button type="submit" class="btn bg-primary py-2 position-absolute top-0 end-0 mt-2 me-2"><a
                                    href="mailto:hannahmaamleyosae@gmail.com">Subscribe</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="index.php">ACrews</a>, All Right Reserved.

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg bg-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>