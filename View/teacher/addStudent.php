<?php
// Start the session
session_start();

include_once("../../Controllers/common.php");
include_once('../../Models/user.php');
Database::DBConnect();
$crs_id = safeGet('crs_id');
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
        include_once './common/CourseNavbar.php';
        ?>   
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div role="main" class="container">

                    <h2 class="mt-5">Add Student</h2>
                    <form action="./addStudent.php" class="form-inline" method="get">
                        <div class="input-group" style="width: 100%">
                            <input type="hidden" name="crs_id" value="<?= $crs_id ?>">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input required class="form-control" id="SearchBox" type="text" name="keywords" placeholder="Search" aria-label="Search" value="<?= safeGet('keywords') ?>">
                            <div class="input-group-append">
                                <button  style="padding-left:50px ;padding-right: 50px" class="button " type="submit">Search</button>
                            </div>
                        </div>
                    </form>

                    <div>
                        <table class="table" style="margin-top: 20px">
                            <thead >
                                <tr id="StudentTable_th">
                                    <th scope="col">Student ID</th>
                                    <th scope="col">Student user Name</th>
                                    <th scope="col">Student name</th>
                                    <th scope="col"></th>
                                </tr>

                                <?php
                                if (safeGet('keywords') != null) {
                                    $student_search = User::all(safeGet('keywords'), NULL, NULL);
                                    foreach ($student_search as $student_d) {
                                        ?>
                                        <tr id="GardeTable_tr">
                                            <td ><?= $student_d->ID ?></td>
                                            <td><?= $student_d->User_Name ?></td>
                                            <td ><?= $student_d->Name ?></td>
                                            <td><button style="padding-left:50px ;padding-right: 50px" class="button float-right AddStudent" id="<?= $id_user ?>" crs_id="<?= $crs_id ?>" name="<?= $student_d->User_Name ?>" >Add</button></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php include_once('./common/tail.php') ?>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.AddStudent').click(function (event) {
                window.location.href = "../../Controllers/savestudent.php?crs_id=" + $(this).attr('crs_id') + "&name=" + $(this).attr('name');
            });
        });
    </script>
</html>