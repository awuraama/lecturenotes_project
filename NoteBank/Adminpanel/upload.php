<?php

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
                    <span class="text">Upload</span>
                </div>
            </div>

            <div class="activity">
                <!-- <div class="title"> -->
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Course Title</label>
                        <input id="coursename" name="coursename" type="text" class="form-control" style="width:100%;"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select id="courselevel" name="courselevel" type="text" class="form-control" style="width:100%;"
                            required>
                            <option value="" selected>Select level</option>
                            <option value="100">100</option>
                            <option value="200">200</option>
                            <option value="300">300</option>
                            <option value="400">400</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div><label>Description</label></div>
                        <div>
                            <textarea required id="desc" name="desc" type="text" class="form-control"
                                style="width:100%;"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div><label>Upload</label></div>
                        <input type="file" name="file" class="form-control" required>
                    </div>
                    <div style="padding-top:15px;">
                        <button type="submit" id="save" class="btn btn-success">Save</button>
                        <button type="button" id="close" class="btn btn-danger">Close</button>
                    </div>

                    </form>
            </div>


        </div>
        </div>
       
        </div>
        <!-- </div> -->
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