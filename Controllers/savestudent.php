<?php

include_once("../Controllers/common.php");
include_once('../Models/user.php');
include_once('../Models/studentxcourse.php');
Database::DBConnect();
$crs_id = safeGet("crs_id", 0);
$std_id = User::searchbyUserName(safeGet('name'));
Studentxcourse::add($crs_id, $std_id, '' ,'');
header("Location: ../View/teacher/student_management.php?crs_id=$crs_id");
?>