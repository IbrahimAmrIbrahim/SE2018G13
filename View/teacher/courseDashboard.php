<?php
// Start the session
session_start();

include_once('../../Controllers/common.php');
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
                    
                        <h1 style="color: #062c33;"> 
                        teacher name : <?= User::user($course->teacher_id)->Name ?></h1>
                    <h1 class="mt-5  "><?= $course->name ?></h1>
                
                    <div>
                        <div class="card-deck table">
                            <div class="card course_material" id="<?= $id ?>" id2="<?= $crs_id ?>" style=" background-color: rgba(06 ,44,51,0.85 );cursor: pointer ">
                                <div class="card-body text-center">
                                    <h3>course materials and files</h3>
                                    <p class="card-text">you can put files for this course here   </p>
                                </div>
                            </div>
                            <div class="card student_managment" id="<?= $id ?>" id2="<?= $crs_id ?>"  style=" background-color: rgba(06 ,44,51,0.85 );cursor: pointer ">
                                <div class="card-body text-center">
                                    <h3>Student management</h3>
                                    <p class="card-text">you can mange students from here </p>
                                </div>
                            </div>
                            <div class="card student_grade" id="<?= $id ?>" id2="<?= $crs_id ?>"  style=" background-color: rgba(06 ,44,51,0.85 );cursor: pointer ">
                                <div class="card-body text-center">
                                    <h3>Student grade</h3>
                                    <p class="card-text">you can edit Students grade for this course</p>
                                </div>
                            </div>
                            
                            <div class="card student_attendance" id="<?= $id ?>" id2="<?= $crs_id ?>" style=" background-color: rgba(06 ,44,51,0.85 );cursor: pointer ">
                                <div class="card-body text-center">
                                    <h3>Student attendance</h3>
                                    <p class="card-text">you can mange student attendance </p>
                                </div>
                            </div> 
                        </div>
                    </div>

                </div>
            </div>
        </div>
         
    </body> 
    <?php include_once './common/tail.php'; ?>



    <script type="text/javascript">
        // open edit grade page
        $(document).ready(function () {
            $('.student_grade').click(function (event) {
                window.location.href = "./students_grade.php?crs_id=" + $(this).attr('id2');
            });

            // material page
            $('.course_material').click(function (event) {
                window.location.href = "./courseMaterial.php?crs_id=" + $(this).attr('id2');
            });
            // student enroll
            $('.student_managment').click(function (event) {
                window.location.href = "./student_management.php?crs_id=" + $(this).attr('id2');
            });

            $('.student_attendance').click(function (event) {
                window.location.href = "./students_attendance.php?crs_id=" + $(this).attr('id2');
            });
        });

    </script>
</html>