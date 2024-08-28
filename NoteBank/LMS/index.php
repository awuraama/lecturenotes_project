<?php
include "config.php";

$sql = "SELECT * FROM courses";

$stmt = $connection->prepare($sql);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    // echo 'login sucessful';
    $data = $stmt->fetchAll();
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
                <!-- <a href="index.php" class="nav-item nav-link active">Home</a> -->
                <a href="#categories" class="nav-item nav-link">Courses</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.php" class="dropdown-item">Our Team</a>
                        <a href="testimonial.php" class="dropdown-item">Testimonial</a>

                    </div>
                </div> -->
                <a href="contact.php" class="nav-item nav-link">Contact</a>
                <!-- <i class="fa fa-user nav-item nav-link"></i> 
                <a href="#" class="nav-item nav-link">
                    <div id="google_translate_element"></div>
                </a> -->
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <!-- <div class="container-fluid bg-dark py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-left">
                    <h1 class="display-3 text-white animated slideInDown">Home</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-left">
                            <li class="breadcrumb-item text-white active" aria-current="page">Home</li>
                            <li class="breadcrumb-item"><a class="text-white" href="courses.php">Courses</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="contact.php">Contact</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Header End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-4">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/m2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">Empowering Your Learning Journey
                                    With Comprehensive Course Materials</h1>
                                <p class=" text-white mb-4 pb-2"> Explore seamless online experience where you can
                                    easily view and download all your course materials at your convenience</p>
                                <a href="#categories"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Start Now</a>
                                <!-- <a href="signup.html" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join
                                    Now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">Access Lecture Notes Anytime,
                                    Anywhere
                                </h1>
                                <p class=" text-white mb-4 pb-2">Providing a centralized repository of lecture notes to
                                    help youu stay organized and focus throught the semester</p>
                                <a href="#categories"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Start Now</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->




    <!-- Service Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-left pt-3 shadow">
                        <div class="p-4">
                            <h6 class="section-title bg-white text-start pe-3">Essence of Education</h6>
                            <p> "Education is not preparing for life, education is life itself. The aim of education should be to teach us rather
                                how to think. than what to think - rather to improve our minds, so as to enable us to think for ourselves, than 
                                to load the memory with the thought of other men."</p>
                                <p>True education means fostering the ability to be curious, to wonder, to inquire. It is the imparting of the arts 
                                and sciences, the development of character, and the teaching of self-control and resilience.</p>
                                <p>Education is the process of living and is not meant to be the preparation for future living, it is life itself,
                                an endless process of self-improvement and personal growth.
                                </p>  
                                <p>Education is a social process, education is growthm education is not a preparation for life but is life itself -John Dewey</p>          
                        </div>
                    </div>
                </div>
        </div>
    </div> -->
    <!-- Service End -->


    <!-- Banner-1 Start -->
    <!-- <div class="container-xxl py-5 pt-5 bg-light">
        <div class="container">
            <div class="row g-5 ">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/carousel-1.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/banner-1.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Banner-1 End -->



    <!-- About Start -->
    <!-- <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start pe-3">About Us</h6>
                <h1 class="mb-4" style="color: black;">Welcome to ACrew</h1>
                <p class="mb-4">ACrew is a group of four passionate students from the Software Engineering Computer
                     Science class, Level 300. </p>
                <p class="mb-4"> At ACrew, we are driven and dedicated to improving the learning experience for
                    our mates. We understand it can be very challenging sometimes to keep track of all learning materials
                    and resources, we embacked on this project to create an online platform where students can access all their courses 
                    learning materials.</p>
                <div class="row gy-2 gx-4 mb-4">
                    <h6>We Offer</h6>
                    <div class="col-sm-4">
                        <p class="mb-0"><i class="fa fa-arrow-right  me-2"></i>Course Materials Access</p>
                    </div>
                    <div class="col-sm-4">
                        <p class="mb-0"><i class="fa fa-arrow-right me-2"></i>Bonus Courses</p>
                    </div>
                    <div class="col-sm-4">
                        <p class="mb-0"><i class="fa fa-arrow-right me-2"></i>User-friendly Interface</p>
                    </div>
                     
                </div> -->
    <!-- <a class="btn text-light py-3 px-5 mt-2" href="about.php">Read More</a> -->
    <!-- </div>
        </div>
    </div>
</div>
<div class="container py-5 pt-5 bg-light">
    <div class="container">
        <div class="row g-5 ">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 100px;">
                <div class="position-relative h-50">
                     <h6>Our Mission</h6>
                     <p>Our mission is to empower students of School of Engineering & Technology(SET) by providing an online 
                        platform where all students of SET can easily access their learning materials. 
                        By integrating bonus courses, our aim is to support students specific areas.
                     </p>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 100px;">
                <div class="position-relative h-50">
                    <h6>Our Vision</h6>
                    <p> future where students can access high-quality educational resources effortlessly to 
                        facilitate studies and to prepare them for successful careers in Tech 
                    </p>
                </div>
            </div>
        </div>
    </div>
</div> -->
    <!-- About End -->

    <!-- Courses Start -->
    <div class="container-xxl py-5" id="categories">
        <div class="container">
            <div class="text-center wow fadeInUp pt-5" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center px-3">Categories</h6>
                <h1 class="mb-5" style="color: black">All Lecture Notes Made Available</h1>
                <!-- <h6 class="section-title bg-white text-center px-3">Second Semester Courses</h6> -->
            </div>
            <div></div>
            <span>
                <div>
                    <div class="text-left">
                        <a class="btn text-primary py-3 px-5 mt-2 mb-5" href="#">All Courses</a>
                        <a class="btn text-primary py-3 px-5 mt-2 mb-5" href="#">Computer Science</a>
                        <a class="btn text-primary py-3 px-5 mt-2 mb-5" href="#">Information Technology</a>
                        <a class="btn text-primary py-3 px-5 mt-2 mb-5" href="#">Civil Engineering</a>

                    </div>
                    <!-- <button><a href="#">All</a></button>
                    <button><a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Programme</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="#" class="dropdown-item">Computer Science</a>
                        <a href="#" class="dropdown-item">Information Technology</a>
                        <a href="#" class="dropdown-item">Civil Engineering</a>
                </button> -->
                </div>
            </span>
        </div>

        <div class="row g-4 py-2">





            <?php

            foreach ($data as $value) { ?>


                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item shadow">

                        <div class="position-relative overflow-hidden text-light image">
                            <img class="img-fluid" src="img/cmage.png" alt="">
                            <div style="position:absolute;top: 15px;left: 16px; font-size:12px; border-radius:3px; background-color:#0ed44c;"
                                class="px-2 py-1 fw-bold text-uppercase"> </div>

                        </div>
                        <div class="p-2 pb-0">

                            <h5 class="mb-1"><?php echo $value["COURSES_TITLE"]; ?> </h5>
                        </div>

                        <div class="d-flex">
                            <small class="flex-fill text-left p-2 px-2"><i class="fa fa-clock me-2"></i>
                                <?php echo $value["READING_TIME"] . "mins"; ?></small>
                            <small class=" text-dark py-1 px-2 fw-bold fs-6" style="float:right;"><a
                                    href="courses.php">Start
                                    Now </a><i class="fa fa-chevron-right me-2 fs-10"></i></small>
                        </div>
                    </div>
                </div>


            <?php } ?>
 
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



            <!-- FAQ Start  -->
            <!-- <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                
                <h1 class="mb-5">Frequently Asked Questions</h1>
            </div>
            <div class="row g-2">
                <div class="col-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is the Team ?
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                The Team is an initiative taken by ACrew, where we offer 1000+ free online courses in cutting-edge technologies and have successfully enrolled a whopping 5 Million+ learners across all domains. ACrew covers courses on Data Science, Machine Learning, Artificial Intelligence, Cloud Computing, Software Development, Sales and Business Development, Digital Marketing, Big Data, and many more.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Why should I choose Great Learning Academy for free courses with certificates ?
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Great Learning Academy is an excellent choice for free courses with certificates because of the high quality of the learning content. The courses are well-crafted, offer a great learning experience, and are interactive and engaging, making them ideal for learners in identifying what works best for their career goals.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How many free courses can I enroll in at the same time?
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                You can simultaneously enroll in multiple courses at ACrew.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How can I enroll in these free online courses?
                              </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                You can click on the “Sign Up” button at the top-right of the page and register with your email address, or you can sign up using your Google Account.       
                                </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                What are the most popular free courses offered by ACrew ?
                              </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                ACrew focuses on in-demand concepts and skills, where learners can develop industry-relevant knowledge in their chosen sector. It provides a wide range of courses in prestigious fields, assisting learners across the globe in achieving their professional goals.

                                <p>Some of the most popular free courses offered by ACrew that are in high demand today include:</p>
                                <ul>
                                    <li>Free Data Science Courses</li>
                                    <li>Free Artificial Intelligence Courses</li>
                                    <li>Free Software Courses</li>
                                    <li>Free Cloud Computing Courses</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>
    </div> -->
            <!-- FAQ End  -->

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
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <h4 class="text-white mb-3">Subscribe to our Newsletter</h4>
                            <p>Subscribe now and join our growing community of Software Engineerers! </p>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <form action="#">
                                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="email"
                                        placeholder="Your email" required>
                                    <button type="submit"
                                        class="btn bg-primary py-2 position-absolute top-0 end-0 mt-2 me-2"><a
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