<?php

include_once("../Controllers/common.php");
include_once("../Models/user.php");
Database::DBConnect();

$Full_Name = safeGet("Full_Name");
$Email = safeGet("Email");
$Mobile_No = safeGet("Mobile_No");
$Profession = safeGet("Profession");
$Department = safeGet("Department");
$School_Collage = safeGet("School_Collage");
$Country = safeGet("Country");
$User_Name = safeGet("User_Name");
$Password = safeGet("Password");
$Re_enter_password = safeGet("Re_enter_password");

$Password_Wrong = 0;
$User_Name_Wrong = 0;

if ($Password != $Re_enter_password) {
    $Password_Wrong = 1;
}
if (User::searchbyUserName($User_Name) != null) {
    $User_Name_Wrong = 1;
}
if (($Password_Wrong == 1) || ($User_Name_Wrong == 1)) {
    header("Location: ../view/signup.php?User_Name_Wrong=" . $User_Name_Wrong . "&password_Wrong=" . $Password_Wrong);
} else {
    User::adduser($Full_Name,$Email,$Mobile_No,$Profession,$Department,$School_Collage,$Country,$User_Name,$Password);
    header("Location: ../index.php");
}
?>