<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../Images/chalkboard-teacher-solid.ico">

        <title>contact us</title>

        <!-- Bootstrap core CSS -->
        <link href="../Style/Bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="../Style/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="../Style/css/common.css" rel="stylesheet">
        <link href="../Style/css/card.css" rel="stylesheet">

    </head>
    <body >
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <button id="menu-toggle" type="button" class="btn btn-outline-success"><i class="fas fa-bars"></i></button>
            <a class="navbar-brand" style="padding-left: 10px" href="../index.php"><i class="fas fa-chalkboard-teacher"></i> LMS</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow">
                    <button class="btn Navbtn dropdown-toggle" id="userDropdown"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../Images/User.png" class="rounded-circle" alt="User Img" width="30px" height="30px">&nbsp; &nbsp; General</button>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="../index.php"><i class="fas fa-home"></i>&nbsp; &nbsp; Home</a>
                        <a class="dropdown-item" data-toggle="modal" data-target="#loginModal" href="#"><i class="fas fa-sign-in-alt"></i>&nbsp; &nbsp; Sign in</a>
                        <a class="dropdown-item" href="./signup.php"><i class="fas fa-user-plus"></i>&nbsp; &nbsp; Sign up</a>
                        <a class="dropdown-item" href="./about_us.php"><i class="fas fa-info"></i>&nbsp; &nbsp; About us</a>
                    </div>
                </li>
            </ul>
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
                        <a href="./signup.php"><i class="fas fa-user-plus"></i>&nbsp; &nbsp; sign up</a>
                    </li>
                    <li>
                        <a href="./about_us.php"><i class="fas fa-info"></i>&nbsp; &nbsp; About us</a>
                    </li>
                </ul>
            </div>

            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="container" style="margin-top: 50px">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="card-box">
                                    <div class="card-title">
                                        <h2>To Contact us for support , question and feedback please send us email on:   </h2>
                                        <p style="text-align: center;">ibrahem.amr.eid@gmail.com <br>
                                            dreadknight29@gmail.com</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>

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
    </body>
    <?php include_once './common/tail.php'; ?>
</html>