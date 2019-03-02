<?php
// Start the session
session_start();

include_once("../Controllers/common.php");
include_once('../Models/user.php');
include_once ('../Models/Courses.php');
include_once('../Models/studentxcourse.php');

Database::DBConnect();
if (!isset($_SESSION['id'])) {
    header("Location: ../index.php?status=session_expired");
} else {
    $id_user = $_SESSION['id'];
}
$crs_id = safeGet("crs_id", 0);

$course = new Courses($crs_id);

if ($course->id == 0 || $course->type == 0) {
    header("Location: ../View/student/addcourse.php?status=wrong");
} else {
    $myCourse = new Studentxcourse($crs_id, $id_user);
    if ($myCourse->id != 0) {
        header("Location: ../View/student/addcourse.php?status=wrong");
    } else {
        Studentxcourse::addCoursetoStudent($id_user, $crs_id);
        header("Location: ../View/student/Courses.php");
    }
}
?>