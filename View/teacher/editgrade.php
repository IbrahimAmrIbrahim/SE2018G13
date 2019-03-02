<?php
// Start the session
session_start();

include_once('../../Controllers/common.php');
include_once('../../Models/student.php');
include_once('../../Models/studentxcourse.php');
include_once('../../Models/user.php');
Database::DBConnect();
$crs_id = safeGet('crs_id');
if (!isset($_SESSION['id'])) {
    header("Location: ../../index.php?status=session_expired");
} else {
    $id_user = $_SESSION['id'];
}
$std_id = safeGet('std_id');
$user = new User($id_user);
$grade = new Studentxcourse($crs_id, $std_id);
?>

<!DOCTYPE html>
<html lang= "en">
    <?php include_once './common/head.php'; ?>  
    <body>
        <?php
        include_once './common/CourseNavbar.php';
        ?>   
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div role="main" class="container">

                    <h2 class="mt-5">Edit Grade for : <?= $user->Name ?> </h2>

                    <form action="../../Controllers/savegrade.php" method="get">
                        <input type="hidden" name="crs_id" value="<?= $crs_id ?>">
                        <input type="hidden" name="std_id" value="<?= $std_id ?>">
                        <div class="card"  style='background: darkslategray ;opacity: .85' >
                            <div class="card-body">
                                <div class="form-group row gutters">

                                    <label for="nameInput" class="col-sm-2 col-form-label" style="color: black">Old degree</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="nameInput" type="text" name="ss" value="<?= $grade->grade ?>" disabled="">
                                    </div>

                                    <label for="nameInput" class="col-sm-2 col-form-label mt-2" style="color: black">Old Exame Date</label>
                                    <div class="col-sm-10 ">
                                        <input class="form-control mt-2" id="nameInput" type="text" name="ss" value="<?= $grade->examine_date ?>" disabled="">
                                    </div>



                                    <label for="nameInput" class="col-sm-2 col-form-label mt-5" style="color: black">New degree</label>
                                    <div class="col-sm-10">
                                        <input class="form-control mt-5"  id="nameInput" type="text" name="name" value="<?= $user->get('name') ?>" required>
                                    </div>


                                    <label for="nameInput" class="col-sm-2 col-form-label mt-2" style="color: black">New Exame Date</label>
                                    <div class="col-sm-10">
                                        <input class="form-control mt-2"  id="nameInput" type="date" name="examine_date" value="<?= $user->get('examine_date') ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button style="padding-left:50px ;padding-right: 50px" class="btn btn-outline-success float-right" type="submit" >Edit</button>
                                </div>
                            </div>
                        </div>
                    </form>




                </div>
            </div>
        </div>
    </body>
    <?php include_once('./common/tail.php') ?>
</html>