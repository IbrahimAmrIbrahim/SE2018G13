<?php

include_once("./common.php");
include_once("../Models/Courses.php");
Database::DBConnect();

$id = safeGet("user_id", 0);
$crs_id = safeGet("crs_id", 0);
$materialid = safeGet('materialid', 0);
$Material_Label = safeGet("MaterialLabel", "");
$Material_URL = safeGet("MaterialURL", "");

if ($materialid) {
    Courses::updateCourseMaterial($materialid, $Material_Label, $Material_URL);
} else {
    Courses::addCourseMaterial($crs_id, $Material_Label, $Material_URL);
}

header("Location: ../View/teacher/courseMaterial.php?id=$id&crs_id=$crs_id");
?>