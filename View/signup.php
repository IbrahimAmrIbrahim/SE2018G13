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

    </head>


    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <button id="menu-toggle" type="button" class="btn btn-outline-success"><i class="fas fa-bars"></i></button>
            <a class="navbar-brand" style="padding-left: 10px" href="../index.php"><i class="fas fa-chalkboard-teacher"></i> LMS</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown no-arrow">
                        <button class="btn Navbtn dropdown-toggle" id="userDropdown"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../Images/User.png" class="rounded-circle" alt="User Img" width="30px" height="30px">&nbsp; &nbsp; General</button>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" data-toggle="modal" data-target="#loginModal" href="#"><i class="fas fa-sign-in-alt"></i>&nbsp; &nbsp; Sign in</a>
                            <a class="dropdown-item" href="./about_us.php"><i class="fas fa-info"></i>&nbsp; &nbsp; About us</a>
                            <a class="dropdown-item" href="./contact_us.php"><i class="fas fa-info"></i>&nbsp; &nbsp; Contact us</a>
                        </div>
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
                        <a data-toggle="modal" data-target="#loginModal" href="#"><i class="fas fa-sign-in-alt"></i>&nbsp; &nbsp; sign in</a>
                    </li>
                    <li>
                        <a href="./about_us.php"><i class="fas fa-info"></i>&nbsp; &nbsp; About us</a>
                    </li>
                    <li>
                        <a href="./contact_us.php"><i class="fas fa-info"></i>&nbsp; &nbsp; Contact us</a>
                    </li>
                </ul>
            </div>


            <div id="page-content-wrapper">
                <div class="container-fluid">

                    <div class="container" style="padding-top: 20px">
                        <?php
                        include_once("../Controllers/common.php");
                        $User_Name_Wrong = safeGet("User_Name_Wrong", "");
                        $password_Wrong = safeGet("password_Wrong", "");
                        if ($User_Name_Wrong == 1) {
                            ?>
                            <div class="alert alert-danger alert-dismissible">
                                <strong>This user name is already exist</strong> <br>
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                        if ($password_Wrong == 1) {
                            ?>
                            <div class="alert alert-danger alert-dismissible">
                                <strong>Passwords doesn't match</strong> <br>
                            </div>
                            <?php
                        }
                        ?>

                        <form action="../Controllers/adduser.php" method="post">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="../Images/User.png" class="rounded-circle img-thumbnail" alt="User Img" width="250px" height="250px">
                                </div>
                                <div class="col-md-9">
                                    <div class="row">                        
                                        <div class="col-md-3" style="text-align: center;">Full Name</div>
                                        <div class="col-md-9"><input class="form-control" type ="text"  value="" name ="Full_Name" Required></div>
                                    </div>  
                                    <div class="row"  style="padding-top: 16px">                        
                                        <div class="col-md-3" style="text-align: center;">Email</div>
                                        <div class="col-md-9"><input class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="example@example.com" type ="text"  value="" name ="Email" Required></div>
                                    </div>  
                                    <div class="row"  style="padding-top: 16px">                        
                                        <div class="col-md-3" style="text-align: center;">Mobile No</div>
                                        <div class="col-md-9"><input class="form-control" pattern="(?=.*\d).{11,}" title="Must contain 11 number characters" type ="text"  value="" name ="Mobile_No" Required></div>
                                    </div>  
                                    <div class="row"  style="padding-top: 16px">                        
                                        <div class="col-md-3" style="text-align: center;">Profession</div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <select class="form-control" name="Profession">
                                                    <option value="School Student">School Student</option>
                                                    <option value="Collage Student">Collage Student</option>
                                                    <option value="School Teacher">School Teacher</option>
                                                    <option value="Teacher Assistant">Teacher Assistant</option>
                                                    <option value="Dr">Dr</option>
                                                    <option value="Professor">Professor</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row"  style="padding-top: 16px">                        
                                        <div class="col-md-3" style="text-align: center;">Department</div>
                                        <div class="col-md-9"><input class="form-control" type ="text"  value="" name ="Department" Required></div>
                                    </div>
                                    <div class="row"  style="padding-top: 16px">                        
                                        <div class="col-md-3" style="text-align: center;">School/Collage</div>
                                        <div class="col-md-9"><input class="form-control" type ="text"  value="" name ="School_Collage" Required></div>
                                    </div>  
                                    <div class="row"  style="padding-top: 16px">                        
                                        <div class="col-md-3" style="text-align: center;">Country</div>
                                        <div class="col-md-9"><input class="form-control" type ="text"  value="" name ="Country" Required></div>
                                    </div>  
                                    <div class="row"  style="padding-top: 16px">                        
                                        <div class="col-md-3" style="text-align: center;">User Name</div>
                                        <div class="col-md-9"><input class="form-control" type ="text"  value="" name ="User_Name" Required></div>
                                    </div>  
                                    <div class="row"  style="padding-top: 16px">                        
                                        <div class="col-md-3" style="text-align: center;">Password</div>
                                        <div class="col-md-9">
                                            <div class="input-group mb-3">
                                                <input id="pass" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" type ="password"  value="" name ="Password" Required>
                                                <div class="input-group-append">
                                                    <button class="btn btn-info" type="button" onfocus="showPassword()" onfocusout="showPassword()"><i class="fas fa-eye"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="row"  style="padding-top: 0px">                        
                                        <div class="col-md-3" style="text-align: center;">Re-enter password</div>
                                        <div class="col-md-9"><input class="form-control" type ="password"  value="" name ="Re_enter_password" Required></div>
                                    </div>  


                                    <div class="row" style="padding-top: 16px">
                                        <div class="col-md-9" ></div>
                                        <div class="col-md-3"><button class="btn btn-success form-control" type="submit">Sign up</button></div>
                                    </div>
                                </div>
                            </div>

                        </form>


                        <!-- The Modal -->
                        <div class="modal fade" id="loginModal">
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


                                                        $("#menu-toggle").click(function (e) {
                                                            e.preventDefault();
                                                            $("#wrapper").toggleClass("toggled");
                                                        });
        </script>

    </body>
</html>