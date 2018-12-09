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

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <button id="menu-toggle" type="button" class="btn btn-outline-success"><i class="fas fa-bars"></i></button>
            <a class="navbar-brand" style="padding-left: 10px" href="./index.php"><i class="fas fa-chalkboard-teacher"></i> LMS</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow">
                    <button class="btn Navbtn dropdown-toggle" id="userDropdown"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../Images/User.png" class="rounded-circle" alt="User Img" width="30px" height="30px">&nbsp; &nbsp; General</button>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="../../index.php"><i class="fas fa-home"></i>&nbsp; &nbsp; Home</a>
                        <a class="dropdown-item" data-toggle="modal" data-target="#loginModal" href="#"><i class="fas fa-sign-in-alt"></i>&nbsp; &nbsp; Sign in</a>
                        <a class="dropdown-item" href="../about_us.php"><i class="fas fa-info"></i>&nbsp; &nbsp; About us</a>
                        <a class="dropdown-item" href="../contact_us.php"><i class="fas fa-info"></i>&nbsp; &nbsp; Contact us</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="wrapper">

            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li>
                        <a href="../../index.php"><i class="fas fa-home"></i>&nbsp; &nbsp; Home</a>
                    </li>
                    <li>
                        <a data-toggle="modal" data-target="#loginModal" href="#"><i class="fas fa-sign-in-alt"></i>&nbsp; &nbsp; sign in</a>
                    </li>
                    <li>
                        <a href="../about_us.php"><i class="fas fa-info"></i>&nbsp; &nbsp; About us</a>
                    </li>
                    <li>
                        <a href="../contact_us.php"><i class="fas fa-info"></i>&nbsp; &nbsp; Contact us</a>
                    </li>
                </ul>
            </div>

            <div id="page-content-wrapper">
                <div class="container-fluid">

                    <div class="container" style="padding-top: 20px">

                        <!-- The Login Modal -->
                        <div class="modal fade" id="loginModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content" style="background-color: #330066; color: #ffffff;">
                                    <div class="modal-body">
                                        <form action="../teacher/home.php" method="post" >
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
                                        <form  action="home.php" method="post">
                                            <div class="row" style="padding-top: 10px">
                                                <div class="col-md-6" ></div>
                                                <div class="col-md-6"><button class="btn btn-outline-success form-control" type="submit">Log in as student</button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Page Content -->
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="../../Images/User.png" class="rounded-circle img-thumbnail" alt="User Img" width="250px" height="250px">
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
                                        <div class="col-md-9" ></div>
                                        <div class="col-md-3"><button class="btn btn-outline-success form-control" type="submit">Sign up</button></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php include_once './common/tail.php'; ?>



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

    </script>
</html>
