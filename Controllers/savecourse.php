<?php

include_once("../Controllers/common.php");
include_once("../Models/Courses.php");

Database::DBConnect();
$user_id = safeGet("user_id", 0);
$course_id = safeGet("course_id", 0);
if ($course_id == 0) {
    Courses::add(safeGet("name"), safeGet("study_year"), safeGet("max_degree"), safeGet("description"), safeGet("type"), $user_id);
} else {
    $courses = new Courses($course_id);
    $courses->name = safeGet("name");
    $courses->study_year = safeGet("study_year");
    $courses->max_degree = safeGet("max_degree");
    $courses->description = safeGet("description");
    $courses->type = safeGet("type");
    $courses->teacher_id = $user_id;

    $courses->save();
}
header('Location: ../View/teacher/courses.php?id=' . $user_id);
?>