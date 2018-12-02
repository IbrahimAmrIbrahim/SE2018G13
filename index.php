<!DOCTYPE html>
<html lang= "en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="./Images/chalkboard-teacher-solid.ico">

        <title>LMS</title>

        <!-- Bootstrap core CSS -->
        <link href="./Style/Bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="./Style/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="./Style/css/common.css" rel="stylesheet">
    </head>

    <?php
    include_once('./Control/common.php');
    $info = safeGet("get");
    ?>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <button id="menu-toggle" type="button" class="btn btn-outline-success"><i class="fas fa-bars"></i></button>
            <a class="navbar-brand" style="padding-left: 10px" href="./index.php"><i class="fas fa-chalkboard-teacher"></i> LMS</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#loginModal" href="#">sign in </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#signupModal" href="#">sign up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about us.php">About us</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="wrapper">

            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li>
                        <a data-toggle="modal" data-target="#loginModal" href="#"><i class="fas fa-sign-in-alt"></i>&nbsp; &nbsp; sign in</a>
                    </li>
                    <li>
                        <a data-toggle="modal" data-target="#signupModal" href="#"><i class="fas fa-user-plus"></i>&nbsp; &nbsp; sign up</a>
                    </li>
                    <li>
                        <a href="./about us.php"><i class="fas fa-info"></i>&nbsp; &nbsp; About us</a>
                    </li>
                </ul>
            </div>


            <div id="page-content-wrapper">
                <div class="container-fluid">

                    <div class="container">
                        <input type="hidden" name="id" value="<?= safeGet("id"); ?>">
                        <h1 class="mt-5"> Welcome everyone to our site </h1>
                        <p>it's for study and mange your time and ofcourse for ads $$$ </p>
                        <p>We hope you find it helpful</p>

                        <!-- The Modal -->
                        <div class="modal fade" id="loginModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content" style="background-color: #330066">
                                    <div class="modal-body">
                                        <?php include_once('./View/login.php')?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- The Modal -->
                        <div class="modal fade" id="signupModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content" style="background-color: #330066">
                                    <div class="modal-body">
                                        <?php include_once('./View/signup.php') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        <script src="./Style/Jquery/jquery.min.js"></script>
        <script src="./Style/Js/bootstrap.bundle.min.js"></script>

        <script>
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>

    </body>
</html>