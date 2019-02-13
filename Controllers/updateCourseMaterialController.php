<?php

include_once("./common.php");
include_once("../Models/Courses.php");
Database::DBConnect();

$id = safeGet("id");
$crs_id = safeGet("crs_id");
$materialid = safeGet('materialid');
$Material_Label = safeGet("MaterialLabel");
$Material_URL = safeGet("MaterialURL");

Courses::updateCourseMaterial($materialid, $Material_Label, $Material_URL);
header("Location: ../View/teacher/courseMaterial.php?id=$id&crs_id=$crs_id");
?>