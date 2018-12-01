<!DOCTYPE html>

<?php
include_once('./View/common/header.php');
include_once('./Control/common.php');
$info = safeGet("get");
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <button id="menu-toggle" type="button" class="btn btn-outline-success"><i class="fas fa-bars"></i></button>
    <a class="navbar-brand" style="padding-left: 10px" href="./index.php"><i class="fas fa-chalkboard-teacher"></i> LMS</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#myModal" href="#">Sign in </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./signup.php">Sign UP</a>
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
                <a data-toggle="modal" data-target="#myModal" href="#"><i class="fas fa-sign-in-alt"></i>&nbsp; &nbsp; Sign in</a>
            </li>
            <li>
                <a href="#"><i class="fas fa-user-plus"></i>&nbsp; &nbsp; Sign up</a>
            </li>
            <li>
                <a href="#"><i class="fas fa-info"></i>&nbsp; &nbsp; About us</a>
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
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                               
                                <?php include_once('./View/login.php') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<?php include_once('./View/common/footer.php') ?>

<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>



