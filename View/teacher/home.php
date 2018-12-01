<!DOCTYPE html>
<html lang= "en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../Images/chalkboard-teacher-solid.ico">

        <title>LMS</title>

        <!-- Bootstrap core CSS -->
        <link href="../../Style/Bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="../../Style/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="../../Style/css/common.css" rel="stylesheet">
    </head>

    <?php
    include_once('../../Control/common.php');
    $info = safeGet("get");
    ?>

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <button id="menu-toggle" type="button" class="btn btn-outline-success"><i class="fas fa-bars"></i></button>
            <a class="navbar-brand" style="padding-left: 10px" href="../../index.php"><i class="fas fa-chalkboard-teacher"></i> LMS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../../Images/User.png" class="rounded-circle" alt="User Img" width="40px" height="40px" id="NavImg">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <span class="dropdown-item">Name</span>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="../../index.php">Sign out</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">About us</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>


        <div id="wrapper">
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        Teacher
                    </li>
                    <li>
                        <a href="../../teacher/courses.php">Courses</a>
                    </li>
                    <li>
                        <a href="../../teacher/timetable.php">Time Table</a>
                    </li>
                    <li>
                        <a href="../../teacher/students.php">Students  </a>
                    </li>
                    <li>
                        <a href="">files</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <div id="page-content-wrapper">
                <div class="container-fluid">

                    <div class="container">
                        <input type="hidden" name="id" value="<?= safeGet("id"); ?>">
                        <h1 class="mt-5">Welcome Teacher : NAME  </h1>
                        <p> </p>
                    </div>

                </div>
            </div>

        </div>

        <footer class="page-footer">
            <div class="footer-copyright text-center py-3">Copyright 2018, Software Engineering Course, ASUENG.</div>
        </footer>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="../../Style/Jquery/jquery.min.js"></script>
        <script src="../../Style/Js/bootstrap.bundle.min.js"></script>

        <script>
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>

    </body>
</html>


