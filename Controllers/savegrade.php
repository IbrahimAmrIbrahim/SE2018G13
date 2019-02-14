<?php

include_once("../Controllers/common.php");
include_once('../Models/user.php');
include_once('../Models/studentxcourse.php');
Database::DBConnect();
$id_user = safeGet("id", 0);
$crs_id = safeGet('crs_id', 0);
$std_id = safeGet('std_id', 0);
$new_degree = safeGet('name', 0);
$new_date = safeGet('examine_date', 0);
$new = new Studentxcourse($crs_id, $std_id);
$new->std_id = $std_id;
$new->crs_id = $crs_id;
$new->grade = $new_degree;
$new->examine_date = $new_date;

$new->save();

header("Location: ../view/teacher/students_grade.php?id=$id_user&crs_id=$crs_id");
?>