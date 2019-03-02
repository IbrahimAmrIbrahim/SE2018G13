<?php
// Start the session
session_start();

include_once("../../Controllers/common.php");
include_once('../../Models/user.php');
Database::DBConnect();
if (!isset($_SESSION['id'])) {
    header("Location: ../../index.php?status=session_expired");
} else {
    $id_user = $_SESSION['id'];
}
$user = new User($id_user);
?>

<!DOCTYPE html>
<html lang= "en">
    <?php include_once './common/head.php'; ?>  
    <body>
        <?php
        include_once './common/Navbar.php';
        ?>   
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div role="main" class="container">

                    <?php
                    $status = safeGet("status", "");
                    if ($status == "wrong") {
                        ?>
                        <div class="alert alert-danger alert-dismissible">
                            <strong>Wrong Course ID</strong> <br>
                        </div>
                        <?php
                    }
                    ?>

                    <h2 class="mt-5">Add Course</h2>

                    <form action="../../Controllers/addCoursetoStudent.php" class="form-inline" method="get">
                        <div class="input-group" style="width: 100%">
                            <input required class="form-control" id="SearchBox" type="text" name="crs_id" placeholder="Course ID" aria-label="Search">
                            <div class="input-group-append">
                                <button  style="padding-left:50px ;padding-right: 50px" class="button " type="Add">Add</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </body>
    <?php include_once('./common/tail.php') ?>
</html>