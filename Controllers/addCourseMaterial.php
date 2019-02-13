<?php

include_once("./common.php");
include_once("../Models/Courses.php");
Database::DBConnect();

$id = safeGet("id");
$crs_id = safeGet("crs_id");
$Material_Label = safeGet("MaterialLabel");
$Material_URL = safeGet("MaterialURL");

Courses::addCourseMaterial($crs_id, $Material_Label, $Material_URL);
header("Location: ../View/teacher/courseMaterial.php?id=$id&crs_id=$crs_id");
?>