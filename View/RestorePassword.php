<!DOCTYPE html>
<html>
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
        <link href="../Style/css/card.css" rel="stylesheet">

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <button id="menu-toggle" type="button" class="btn btn-outline-success"><i class="fas fa-bars"></i></button>
            <a class="navbar-brand" style="padding-left: 10px" href="../index.php"><i class="fas fa-chalkboard-teacher"></i> LMS</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow">
                    <button class="btn Navbtn dropdown-toggle" id="userDropdown"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../Images/User.png" class="rounded-circle" alt="User Img" width="30px" height="30px">&nbsp; &nbsp; General</button>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="../index.php"><i class="fas fa-home"></i>&nbsp; &nbsp; Home</a>
                        <a class="dropdown-item" href="./signup.php"><i class="fas fa-user-plus"></i>&nbsp; &nbsp; Sign up</a>
                        <a class="dropdown-item" href="./contact_us.php"><i class="fas fa-info"></i>&nbsp; &nbsp; Contact us</a>
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
                        <a href="./signup.php"><i class="fas fa-user-plus"></i>&nbsp; &nbsp; sign up</a>
                    </li>
                    <li>
                        <a href="./contact_us.php"><i class="fas fa-info"></i>&nbsp; &nbsp; Contact us</a>
                    </li>
                </ul>
            </div>

            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div role="main" class="container">
                        <?php
                        include_once("../Controllers/common.php");
                        $User_Name_Wrong = safeGet("User_Name_Wrong", "");
                        $password_Wrong = safeGet("password_Wrong", "");
                        $email_Wrong = safeGet("email_Wrong", "");
                        if ($User_Name_Wrong == 1) {
                            ?>
                            <div class="alert alert-danger alert-dismissible">
                                <strong>This user name dose not exist.</strong> <br>
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                        if ($password_Wrong == 1) {
                            ?>
                            <div class="alert alert-danger alert-dismissible">
                                <strong>Passwords does not match.</strong> <br>
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                        if ($email_Wrong == 1) {
                            ?>
                            <div class="alert alert-danger alert-dismissible">
                                <strong>Wrong email.</strong> <br>
                            </div>
                            <?php
                        }
                        ?>
                        <form action="../Controllers/RestorePassword.php" method="post">
                            <div class="card"  style='background: #002752'>
                                <div class="card-body">
                                    <div class="row"  style="padding-top: 16px">                        
                                        <div class="col-md-3" style="text-align: center; color: white;">Email</div>
                                        <div class="col-md-9"><input class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="example@example.com" type ="text"  value="<?= safeGet("Email", "") ?>" name ="Email" Required></div>
                                    </div>  

                                    <div class="row"  style="padding-top: 16px">                        
                                        <div class="col-md-3" style="text-align: center; color: white;">User Name</div>
                                        <div class="col-md-9"><input class="form-control" type ="text"  value="<?= safeGet("User_Name", "") ?>" name ="User_Name" Required></div>
                                    </div>  
                                    <div class="row"  style="padding-top: 16px">                        
                                        <div class="col-md-3" style="text-align: center; color: white;">New Password</div>
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
                                        <div class="col-md-3" style="text-align: center;color: white;">Re-enter password</div>
                                        <div class="col-md-9"><input class="form-control" type ="password"  value="" name ="Re_enter_password" Required></div>
                                    </div>    

                                    <div class="row" style="padding-top: 16px">
                                        <div class="col-md-9" ></div>
                                        <div class="col-md-3"><button class="btn btn-success form-control" type="submit">Save</button></div>
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
</html>
