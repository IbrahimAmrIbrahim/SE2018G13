<!DOCTYPE html>
<html lang= "en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../Images/chalkboard-teacher-solid.ico">

        <title>LMS</title>

        <!-- Bootstrap core CSS -->
        <link href="../Style/Bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="../Style/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="../Style/css/common.css" rel="stylesheet">

        <link href="../Style/css/signup.css" rel="stylesheet">
    </head>



    <?php
    include_once('../Control/common.php');
    $info = safeGet("get");
    ?>

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <button id="menu-toggle" type="button" class="btn btn-outline-success"><i class="fas fa-bars"></i></button>
            <a class="navbar-brand" style="padding-left: 10px" href="../index.php"><i class="fas fa-chalkboard-teacher"></i> LMS</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#signinModal" href="#">Sign in </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="wrapper">

            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li>
                        <a href="../index.php"><i class="fas fa-home"></i>&nbsp; &nbsp; Home</a>
                    </li>
                    <li>
                        <a data-toggle="modal" data-target="#signinModal" href="#"><i class="fas fa-sign-in-alt"></i>&nbsp; &nbsp; Sign in</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-info"></i>&nbsp; &nbsp; About us</a>
                    </li>
                </ul>
            </div>


            <div id="page-content-wrapper">
                <div class="container-fluid">

                    <div class="container" style="padding-top: 20px">
                        <form action="./index.php" method="post">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="../Images/User.png" class="rounded-circle img-thumbnail" alt="User Img" width="250px" height="250px">
                                </div>
                                <div class="col-md-9">
                                    <div class="row">                        
                                        <div class="col-md-3" style="text-align: center;">User Name</div>
                                        <div class="col-md-9"><input class="form-control"  pattern="[A-za-Z]{2,}$" type ="text"  value="" name ="" ></div>
                                    </div>  
                                    <div class="row" style="padding-top: 16px">                        
                                        <div class="col-md-3" style="text-align: center;">Nick Name</div>
                                        <div class="col-md-9"><input class="form-control" pattern="[A-za-Z]{2,}$" type ="text"  value="" name ="" ></div>
                                    </div>  
                                    <div class="row"  style="padding-top: 16px">                        
                                        <div class="col-md-3" style="text-align: center;">Birthday</div>
                                        <div class="col-md-9"><input class="form-control" type ="text"  value="" name ="" ></div>
                                    </div>  
                                    <div class="row"  style="padding-top: 16px">                        
                                        <div class="col-md-3" style="text-align: center;">Mobile No</div>
                                        <div class="col-md-9"><input class="form-control" type ="text"  value="" name ="" ></div>
                                    </div>  
                                    <div class="row"  style="padding-top: 16px">                        
                                        <div class="col-md-3" style="text-align: center;">Email</div>
                                        <div class="col-md-9"><input class="form-control" type ="text"  value="" name ="" ></div>
                                    </div>  
                                    <div class="row"  style="padding-top: 16px">                        
                                        <div class="col-md-3" style="text-align: center;">National ID</div>
                                        <div class="col-md-9"><input class="form-control" type ="text"  value="" name ="" ></div>
                                    </div>
                                    <div class="row"  style="padding-top: 16px">                        
                                        <div class="col-md-3" style="text-align: center;">Password</div>
                                        <div class="col-md-9">
                                            <div class="input-group mb-3">
                                                <input id="pass" class="form-control" type ="password"  value="" name ="" >
                                                <div class="input-group-append">
                                                    <button class="btn btn-info" type="button" onfocus="showPassword()" onfocusout="showPassword()"><i class="fas fa-eye"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="row"  style="padding-top: 0px">                        
                                        <div class="col-md-3" style="text-align: center;">Re-enter password</div>
                                        <div class="col-md-9"><input class="form-control" type ="password"  value="" name ="" ></div>
                                    </div>  
                                    <div class="row"  style="padding-top: 16px">
                                        <div class="col-md-3" style="text-align: center;">Pin</div>
                                        <div class="col-md-9">
                                            <div class="input-group mb-3">
                                                <input id="pin" class="form-control" type ="password"  value="" name ="" >
                                                <div class="input-group-append">
                                                    <button class="btn btn-info" type="button" onfocus="showPin()" onfocusout="showPin()"><i class="fas fa-eye"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row"  style="padding-top: 0px">                        
                                        <div class="col-md-3" style="text-align: center;">Re-enter Pin</div>
                                        <div class="col-md-9"><input class="form-control" type ="password"  value="" name ="" ></div>
                                    </div>  
                                    <div class="row" style="padding-top: 16px">
                                        <div class="col-md-6" ></div>
                                        <div class="col-md-3"><button class="btn btn-outline-success form-control" type="submit">Sign up</button></div>
                                        <div class="col-md-3"><button class="btn btn-outline-danger form-control" data-dismiss="modal">Cancel</button></div>
                                    </div>
                                </div>
                            </div>

                        </form>


                        <!-- The Modal -->
                        <div class="modal fade" id="signinModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content" style="background-color: #330066">
                                    <div class="modal-body">

                                        <?php include_once('./login.php') ?>
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
        <script src="../Style/Jquery/jquery.min.js"></script>
        <script src="../Style/Js/bootstrap.bundle.min.js"></script>

        <script>
                                                        function showPassword() {
                                                            var x = document.getElementById("pass");
                                                            if (x.type === "password") {
                                                                x.type = "text";
                                                            } else {
                                                                x.type = "password";
                                                            }
                                                        }

                                                        function showPin() {
                                                            var x = document.getElementById("pin");

                                                            if (x.type === "password") {
                                                                x.type = "text";
                                                            } else {
                                                                x.type = "password";
                                                            }
                                                        }

                                                        $("#menu-toggle").click(function (e) {
                                                            e.preventDefault();
                                                            $("#wrapper").toggleClass("toggled");
                                                        });
        </script>

    </body>
</html>