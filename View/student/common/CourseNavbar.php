<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <button id="menu-toggle" type="button" class="btn btn-outline-success"><i class="fas fa-bars"></i></button>
    <a class="navbar-brand" style="padding-left: 10px" href="./home.php"><i class="fas fa-chalkboard-teacher"></i> LMS</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">

            <button class="btn Navbtn dropdown-toggle" id="userDropdown"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../Images/User.png" class="rounded-circle" alt="User Img" width="30px" height="30px">&nbsp; &nbsp; <?= $user->Name ?></button>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="./home.php"><i class="fas fa-home"></i>&nbsp; &nbsp; Home</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="./Courses.php"><i class="fas fa-book-open"></i>&nbsp; &nbsp; My Courses</a>
                <a class="dropdown-item" href="./editAccountInfo.php"><i class="fas fa-cog"></i>&nbsp; &nbsp; Account Info</a>
                <a class="dropdown-item" href="../../Controllers/SignOut.php"><i class="fas fa-sign-out-alt"></i>&nbsp; &nbsp; Sign out</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="./about_us.php"><i class="fas fa-info"></i>&nbsp; &nbsp; About us</a>
                <a class="dropdown-item" href="./contact_us.php"><i class="fas fa-info"></i>&nbsp; &nbsp; Contact us</a>
            </div>
        </li>
    </ul>
</nav>


<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand" style="color: white;">
                <?= $user->Name ?>
            </li>
            <li>
                <a href="./home.php"><i class="fas fa-home"></i>&nbsp; &nbsp; Home</a>
            </li>
            <li>
                <a href="./Courses.php"><i class="fas fa-book-open"></i>&nbsp; &nbsp; My Courses</a>
            </li>
            <li>
                <a href="./courseDashboard.php?crs_id=<?= $crs_id ?>"><i class="fas fa-book-reader"></i>&nbsp; &nbsp; Course Dashboard</a>
            </li>
            <div class="dropdown-divider"></div>
            <li>
                <a href="./editAccountInfo.php"><i class="fas fa-cog"></i>&nbsp; &nbsp; Account Info</a>
            </li>
            <li>
                <a href="./about_us.php"><i class="fas fa-info"></i>&nbsp; &nbsp; About us</a>
            </li>

            <li>
                <a href="./contact_us.php"><i class="fas fa-info"></i>&nbsp; &nbsp; Contact us</a>
            </li>
        </ul>
    </div>
