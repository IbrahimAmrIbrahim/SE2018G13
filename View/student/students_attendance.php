<?php
// Start the session
session_start();

include_once('../../Controllers/common.php');
include_once('../../Models/attendance.php');
include_once('../../Models/Courses.php');
include_once('../../Models/user.php');

Database::DBConnect();
if (!isset($_SESSION['id'])) {
    header("Location: ../../index.php?status=session_expired");
} else {
    $id = $_SESSION['id'];
}
$crs_id = safeGet('crs_id');
$course = new Courses($crs_id);
$user = new User($id);
$attendeces = Attendance::all_student($id, $crs_id);
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
                    <h1 class="mt-5  "><?= $course->name ?></h1>
                    <div>
                        <table class="table" style="text-align: center;">
                            <thead>
                                <tr id="GardeTable_th">
                                    <th scope="col" rowspan="2">Student Name  </th>
                                    <th scope="col" rowspan="2">Attendance points  </th>
                                    <th scope="col" colspan="12">Course Weeks</th >
                                </tr>
                                <tr id="GardeTable_th">
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                    <th scope="col">4</th>
                                    <th scope="col">5</th>
                                    <th scope="col">6</th>
                                    <th scope="col">7</th>
                                    <th scope="col">8</th> 
                                    <th scope="col">9</th>
                                    <th scope="col">10</th>
                                    <th scope="col">11</th>
                                    <th scope="col">12</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                if (!empty($attendeces)) {
                                    foreach ($attendeces as $attendece) {
                                        ?>
                                        <tr id="GardeTable_tr">
                                            <td><?= $attendece->student_name ?></td>
                                            <td><?= $attendece->attendance_point ?></td>
                                            <?php
                                            for ($i = 1; $i <= 12; $i = $i + 1) {
                                                ?>
                                                <td>
                                                    <?= ($attendece->get('Week' . $i)) ? "1" : "0" ?>
                                                </td>
                                            <?php } ?>
                                            <?php
                                        }
                                    }
                                    ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body> 
    <?php include_once './common/tail.php'; ?>


</html>
