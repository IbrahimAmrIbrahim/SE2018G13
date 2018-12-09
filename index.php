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

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <button id="menu-toggle" type="button" class="btn btn-outline-success"><i class="fas fa-bars"></i></button>
            <a class="navbar-brand" style="padding-left: 10px" href="./index.php"><i class="fas fa-chalkboard-teacher"></i> LMS</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow">
                    <button class="btn Navbtn dropdown-toggle" id="userDropdown"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="./Images/User.png" class="rounded-circle" alt="User Img" width="30px" height="30px">&nbsp; &nbsp; General</button>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" data-toggle="modal" data-target="#loginModal" href="#"><i class="fas fa-sign-in-alt"></i>&nbsp; &nbsp; Sign in</a>
                        <a class="dropdown-item"  data-toggle="modal" data-target="#signupModal" href="#"><i class="fas fa-user-plus"></i>&nbsp; &nbsp; Sign up</a>
                        <a class="dropdown-item" href="./view/about_us.php"><i class="fas fa-info"></i>&nbsp; &nbsp; About us</a>
                        <a class="dropdown-item" href="./view/contact_us.php"><i class="fas fa-info"></i>&nbsp; &nbsp; Contact us</a>
                    </div>
                </li>
            </ul>
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
                        <a href="./view/about_us.php"><i class="fas fa-info"></i>&nbsp; &nbsp; About us</a>
                    </li>
                    <li>
                        <a href="./view/contact_us.php"><i class="fas fa-info"></i>&nbsp; &nbsp; Contact us</a>
                    </li>
                </ul>
            </div>


            <div id="page-content-wrapper">
                <div class="container-fluid">

                    <div class="container">
                        <h1 class="mt-5"> Welcome everyone to our site </h1>
                        <p>it's for study and mange your time </p>
                        <p>We hope you find it helpful</p>

                        <!-- The Modal -->
                        <div class="modal fade" id="loginModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content" style="background-color: #330066; color: #ffffff;">
                                    <div class="modal-body">
                                        <form action="View/teacher/home.php" method="post" >
                                            <div class="row" style="padding-top: 8px">
                                                <div class="col-md-4" style="text-align: center;">User Name</div>
                                                <div class="col-md-8"><input class="form-control" type ="text"  value="" name ="" ></div>
                                            </div>

                                            <div class="row" style="padding-top: 5px">
                                                <div class="col-md-4" style="text-align: center;">Password</div>
                                                <div class="col-md-8"><input class="form-control" type ="password"  value="" name ="" ></div>
                                            </div>

                                            <div class="row" style="padding-top: 10px">
                                                <div class="col-md-6" ></div>
                                                <div class="col-md-3"><button class="btn btn-outline-success form-control" type="submit">Log in</button></div>
                                                <div class="col-md-3"><button class="btn btn-outline-danger form-control" data-dismiss="modal">Cancel</button></div>
                                            </div>
                                        </form>
                                        <div class="row" style="padding-top: 15px">
                                            <div class="col-md-7" ></div>
                                            <div class="col-md-5" style=" text-align: right; font-size: 10pt"><a href="" style="color: red;">Forget my password!</a></div>
                                        </div>
                                        <form  action="View/student/home.php" method="post">
                                            <div class="row" style="padding-top: 10px">
                                                <div class="col-md-6" ></div>
                                                <div class="col-md-6"><button class="btn btn-outline-success form-control" type="submit">Log in as student</button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- The Modal -->
                        <div class="modal fade" id="signupModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content" style="background-color: #330066;color: #ffffff;">
                                    <div class="modal-body">
                                        <div class="row" style="padding-top: 5px">
                                            <div class="col-md-12" style="text-align: center;">Sign up as</div>
                                        </div>
                                        <div class="row" style="padding-top: 10px">
                                            <div class="col-md-6" >
                                                <form action="View/teacher/signup.php" method="post">
                                                    <button class="btn btn-outline-success form-control" type="submit">Teacher</button>
                                                </form>
                                            </div>
                                            <div class="col-md-6" >
                                                <form action="View/student/signup.php" method="post">
                                                    <button class="btn btn-outline-success form-control" type="submit">Student</button>
                                                </form>
                                            </div>
                                        </div>
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
    </body>

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
</html>