<!DOCTYPE html>
<?php
include_once('../../Models/studentxcourse.php');
include_once('../../Controllers/common.php');
include_once('../../Models/Courses.php');
include_once('../../Models/user.php');
Database::DBConnect();
$id = safeGet('id');
$crs_id = safeGet('crs_id');
$grade = new Studentxcourse($crs_id, $id);
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
                    <h1 class="mt-5" style=" color: blue  "><?= $course->name ?></h1>
                    <div class="card-text mb-3" style="word-break: normal"> <?= $course->description ?></div>
                    <div>

                        <div class="card-deck table">
                            <div class="card student_grade" id="<?= $id ?>" style=" background-color: rgba(06 ,44,51,0.85 ) ">
                                <div class="card-body text-center">
                                    <h3>Course Grades</h3>
                                    <p class="card-text"> MAX Grade = <?= $course->max_degree ?> </p>
                                    <p class="card-text"> MINE = <?= $grade->grade ?>   </p>
                                </div>
                            </div>
                            <div class="card course_material" id="<?= $id ?>" crs_id="<?= $crs_id ?>"  style=" background-color: rgba(06 ,44,51,0.85 );cursor: pointer ">
                                <div class="card-body text-center">
                                    <h3>Course Material</h3>
                                    <p class="card-text">click to open the materials file</p>
                                </div>
                            </div>
                            <div class="card student_attendance" id="<?= $id ?>" crs_id="<?= $crs_id ?>" style=" background-color: rgba(06 ,44,51,0.85 );cursor: pointer ">
                                <div class="card-body text-center">
                                    <h3>attendance</h3>
                                    <p class="card-text">show your attendance  </p>

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


            // material page
            $('.course_material').click(function (event) {
                window.location.href = "./courseMaterial.php?id=" + $(this).attr('id') + "&crs_id=" + $(this).attr('crs_id');
            });

            // student enroll
            $('.student_attendance').click(function (event) {
                window.location.href = "./students_attendance.php?id=" + $(this).attr('id') + "&crs_id=" + $(this).attr('crs_id');
            });


        });

    </script>
</html> 