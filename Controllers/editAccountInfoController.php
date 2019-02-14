<?php

include_once("./common.php");
include_once("../Models/user.php");
Database::DBConnect();

$id = safeGet("user_id", 0);

$Full_Name = safeGet("Full_Name");
$Email = safeGet("Email");
$Mobile_No = safeGet("Mobile_No");
$Profession = safeGet("Profession");
$Department = safeGet("Department");
$School_Collage = safeGet("School_Collage");
$Country = safeGet("Country");

User::adduser($Full_Name, $Email, $Mobile_No, $Profession, $Department, $School_Collage, $Country, $id);
header("Location: ../View/teacher/home?id=" . $id);
?>