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
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title>
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/1logo.png" alt="logo">
            </div>

            <span class="logo_name">Crew</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="index.php">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dahsboard</span>
                    </a></li>
                <li><a href="<?php echo 'users.php'; ?>">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Users</span>
                    </a></li>
                <li><a href="<?php echo 'course.php'; ?>">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Courses</span>
                    </a></li>
                <li><a href="<?php echo 'notes.php'; ?>">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Notes</span>
                    </a></li>
                <li><a href="<?php echo 'upload.php'; ?>">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Upload</span>
                    </a></li>
                <!--<li><a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Comment</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Share</span>
                </a></li> -->
            </ul>

            <ul class="logout-mode">
                <li><a href="#">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span>
                    </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>

            <img src="" alt="avatar">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Courses</span>
                </div>
            </div>

            <div>
                <div class="row g-4 py-2">
                    <div class="boxes">
                        <?php

                        foreach ($data as $value) { ?>
                            

                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <!-- <div class="box box1"> -->
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
                                            <!-- <small class=" text-dark py-1 px-2 fw-bold fs-6" style="float:right;"><a
                                                    href="courses.php">Start
                                                    Now </a><i class="fa fa-chevron-right me-2 fs-10"></i></small> -->
                                        </div>
                                    </div>
                                </div>


                            <?php } ?>
                        </div>
                    </div>
                </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>