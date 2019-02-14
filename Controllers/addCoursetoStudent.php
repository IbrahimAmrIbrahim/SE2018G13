<?php

include_once("../Controllers/common.php");
include_once('../Models/user.php');
include_once ('../Models/Courses.php');
include_once('../Models/studentxcourse.php');
Database::DBConnect();
$id_user = safeGet("id", 0);
$crs_id = safeGet("crs_id", 0);

$course = new Courses($crs_id);

if ($course->id == 0 || $course->type == 0) {
    header("Location: ../View/student/addcourse.php?id=$id_user&status=wrong");
} else {
    $myCourse = new Studentxcourse($crs_id, $id_user);
    if ($myCourse->id != 0) {
        header("Location: ../View/student/addcourse.php?id=$id_user&status=wrong");
    } else {
        Studentxcourse::addCoursetoStudent($id_user, $crs_id);
        header("Location: ../View/student/Courses.php?id=$id_user");
    }
}
?>