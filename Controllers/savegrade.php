    <?php

include_once("../Controllers/common.php");
include_once("../Models/grade.php");
Database::DBConnect();
$id = safeGet("id");
$page = safeGet("page");

$grades = new Grade($id, "std");
$grades->course_id = safeGet("course_id");
$grades->degree = safeGet("degree");
$grades->examine_at = safeGet("examine_at");

$grades->save();

if ($page == "std") {
    header('Location: ../view/teacher/students.php');
} else if ($page == "crs") {
    header('Location: ../view/teacher/courses.php');
}
?>