<?php
// Start the session
session_start();

include_once('../../Controllers/common.php');
include_once('../../Models/studentxcourse.php');
include_once('../../Models/Courses.php');
include_once('../../Models/user.php');
Database::DBConnect();
if (!isset($_SESSION['id'])) {
    header("Location: ../../index.php?status=session_expired");
} else {
    $id = $_SESSION['id'];
}
$crs_id = safeGet('crs_id');
$user = new User($id);
$course = new Courses($crs_id);
$students = Studentxcourse::teacher_show_my_students($crs_id)
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
                    <h1 class="mt-5  "><?= $course->name ?></h1>

                    <div>

                        <table class="table">
                            <thead>
                                <tr id="GardeTable_th">
                                    <th scope="col">Student ID  </th>
                                    <th scope="col">Student Name  </th>
                                    <th scope="col">
                                        <button class="add_student" id="<?= $id ?>" id2="<?= $crs_id ?>" >Add student</button>  </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                foreach ($students as $student) {
                                    ?>
                                    <tr id="GardeTable_tr">
                                        <td><?= $student->ID ?></td>
                                        <td><?= $student->Name ?></td>
                                        <td></td>
                                    <?php } ?>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </body> 
    <?php include_once './common/tail.php'; ?>



    <script type="text/javascript">
        // open edit grade page
        $(document).ready(function () {
            $('.add_student').click(function (event) {
                window.location.href = "./addStudent.php?crs_id=" + $(this).attr('id2');
            });
        });
    </script>
</html>