<?php

include_once("../Controllers/common.php");
include_once("../Models/Courses.php");

Database::DBConnect();
$id = safeGet("id", 0);
if ($id == 0) {
    Courses::add(safeGet("name"), safeGet("study_year"), safeGet("max_degree") , safeGet("description") , safeGet("type") , safeGet("teacher_id"));
} else {
    $courses = new Courses($id);
    $courses->name = safeGet("name");
    $courses->study_year = safeGet("study_year");
    $courses->max_degree = safeGet("max_degree");
    $courses->description = safeGet("description");
    $courses->type = safeGet("type");
    $courses->teacher_id = safeGet("teacher_id");
     
    $courses->save();
}
header('Location: ../view/teacher/courses.php');
?>